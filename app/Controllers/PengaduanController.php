<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailPengaduan;
use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Pengaduan;
use App\Models\User;

class PengaduanController extends BaseController
{
    protected $session;
    protected $data;
    protected $user;
    protected $pengaduan;
    protected $detail;
    protected $gambar;
    protected $komentar;

    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['validation'] = \Config\Services::validation();
        $this->level = $this->session->get('level');

        $this->user = new User();
        $this->pengaduan = new Pengaduan();
        $this->detail = new DetailPengaduan();
        $this->gambar = new Gambar();
        $this->komentar = new Komentar();
        $this->kategori = new Kategori();
    }

    public function index()
    {
        $data = [];
        // $pengaduans = $this->pengaduan->findAll();
        $pengaduans = [];
        $kat = ['Peninjauan','Pemrosesan','Tindak Lanjut','Ditutup'];

        for ($i = 0; $i < 4; $i++) {
            $data = [];
            $data['kat'] = $kat[$i];

            if ($this->level == 1 || $this->level == 2) {
                $data['data'] = $this->pengaduan->where('status',( $i + 1 ))->findAll();
            } else if ($this->level == 3) {
                $data['data'] = $this->pengaduan->where('status', ( $i + 1 ))->where('id_user', $this->session->get('id'))->findAll();
            }

            foreach ($data['data'] as $key => $array) {
                $data['data'][$key]['kategori'] = $this->kategori->find($data['data'][$key]['id_kategori'])['judul'];
            }
            array_push($pengaduans, $data);
        }
        $this->data['pengaduans'] = $pengaduans;

        // dd($this->data);
        return view('app/pengaduan/index', $this->data);
    }

    public function create()
    {
        $this->data['kategoris'] = $this->kategori->findAll();
        return view('app/pengaduan/create', $this->data);
    }

    public function store()
    {
        try {
            $valid = $this->validate([
                'judul' => 'required',
                'isi' => 'required',
                // 'lampiran' => 'uploaded[lampiran]|is_image[lampiran]|max_size[lampiran,4096]',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            // dd($this->request->getVar('kategori'));
            // dd($this->request->getFileMultiple('lampiran'));

            $filePreviewName = [];

            $id_pengaduan = $this->pengaduan->insert([
                'id_kategori' => $this->request->getVar('kategori'),
                'id_user' => $this->session->get('id'),
                'judul' => $this->request->getVar('judul'),
                'kategori_pengaduan' => $this->request->getVar('jenis'),
                'status' => 1,
            ]);

            $id_detail_pengaduan = $this->detail->insert([
                'id_pengaduan' => $id_pengaduan,
                'id_user' => $this->session->get('id'),
                'isi' => $this->request->getVar('isi'),
                'tanggal' => date('Y-m-d'),
                'estimasi' => NULL,
                'status' => 1,
            ]);

            $files = $this->request->getFileMultiple('lampiran');

            if ($files) {
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $name = $file->getRandomName();
                        $file->move(ROOTPATH . 'public/assets/uploads/lampiran', $name);
                        $path = 'assets/uploads/lampiran/' . $name;
                        $this->gambar->insert([
                            'id_detail_pengaduan' => $id_detail_pengaduan,
                            'id_pengaduan' => $id_pengaduan,
                            'filename' => $name,
                            'path' => $path,
                            'filesize' => $file->getSizeByUnit('kb'),
                            'format' => $file->getClientMimeType(),
                        ]);
                    }
                }
            }

            session()->setFlashdata('success', "Pengaduan berhasil ditambah.");
            return redirect()->to('/app/pengaduan');
        } catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengaduan/tambah')->withInput(); //->with('validation', $this->validator);
        }
    }

    public function detail($id)
    {
        try {
            $this->data['pengaduan'] = $this->pengaduan->find($id);
            $this->data['pengaduan']['kategori'] = $this->kategori->find($this->data['pengaduan']['id_kategori'])['judul'];
            $this->data['details'] = $this->detail->where('id_pengaduan', $id)->findAll();
            foreach ($this->data['details'] as $key => $value) {
                $this->data['details'][$key]['gambars'] = $this->gambar->where('id_detail_pengaduan', $this->data['details'][$key]['id'])->findAll();
            }
            $this->data['komentars'] = $this->komentar->where('id_pengaduan', $id)->findAll();
            foreach ($this->data['komentars'] as $key => $value) {
                $this->data['komentars'][$key]['nama'] = $this->user->find($this->data['komentars'][$key]['id_user'])['nama'];
            }
            $this->data['status'] = $this->data['details'][array_key_last($this->data['details'])]['status'];
            // dd($this->data);
            return view('app/pengaduan/detail', $this->data);
        } catch (\Exception $e) {
            // session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengaduan')->withInput(); //->with('validation', $this->validator);
        }
    }

    public function update($id_pengaduan)
    {
        if($this->level !== "1" || $this->level !== "2"){
            return redirect()->to('/app');
        }
        
        try {
            if ($this->request->getFile('lampiran')) {
                $valid = $this->validate([
                    'isi' => 'required',
                    'estimasi' => 'required',
                    'lampiran' => 'uploaded[lampiran]|is_image[lampiran]|max_size[lampiran,4096]',
                ]);
            } else {
                $valid = $this->validate([
                    'isi' => 'required',
                    'estimasi' => 'required',
                ]);
            }

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $id_detail_pengaduan = $this->detail->insert([
                'id_pengaduan' => $id_pengaduan,
                'id_user' => $this->session->get('id'),
                'isi' => $this->request->getVar('isi'),
                'tanggal' => date('Y-m-d'),
                'status' => $this->request->getVar('status'),
                'estimasi' => $this->request->getVar('estimasi'),
            ]);

            $this->pengaduan->update($id_pengaduan, [
                'status' => $this->request->getVar('status'),
            ]);

            if ($this->request->getFileMultiple('lampiran')) {
                $files = $this->request->getFileMultiple('lampiran');
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $name = $file->getRandomName();
                        $file->move(ROOTPATH . 'public/assets/uploads/lampiran', $name);
                        $path = 'assets/uploads/lampiran/' . $name;
                        $this->gambar->insert([
                            'id_detail_pengaduan' => $id_detail_pengaduan,
                            'id_pengaduan' => $id_pengaduan,
                            'filename' => $name,
                            'path' => $path,
                            'filesize' => $file->getSizeByUnit('kb'),
                            'format' => $file->getClientMimeType(),
                        ]);
                    }
                }
            }

            session()->setFlashdata('success', "Pengaduan berhasil diupdate.");
            return redirect()->to('/app/pengaduan/detail/' . $id_pengaduan);
        } catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengaduan/detail/' . $id_pengaduan)->withInput(); //->with('validation', $this->validator);
        }
    }

    public function komentar()
    {
        $id = $this->request->getVar('id');
        try {
            $valid = $this->validate([
                'isi' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->komentar->insert([
                'id_user' => $this->session->get('id'),
                'id_pengaduan' => $this->request->getVar('id'),
                'isi' => $this->request->getVar('isi'),
                'status' => 1,
            ]);

            session()->setFlashdata('success', "Komentar berhasil ditambah.");
            return redirect()->to('/app/pengaduan/detail/' . $id);
        } catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengaduan/detail/' . $id)->withInput(); //->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        try {
            $details = $this->detail->where('id_pengaduan', $id)->findAll();
            foreach ($details as $detail) {
                $gambars = $this->gambar->where('id_detail_pengaduan', $detail['id'])->findAll();
                foreach ($gambars as $gambar) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $gambar['path'])) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $gambar['path']);
                    }
                    $this->gambar->delete(['id' => $gambar['id']]);
                }
                $this->detail->delete(['id' => $detail['id']]);
            }
            $komentars = $this->komentar->where('id_pengaduan', $id)->findAll();
            foreach ($komentars as $komentar) {
                $this->komentar->delete($komentar['id']);
            }
            // $this->komentar->delete(["id_pengaduan" => $id]);

            $this->pengaduan->delete(['id' => $id]);

            session()->setFlashdata('success', "Pengaduan berhasil dihapus.");
            return redirect()->to('/app/pengaduan');
        } catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengaduan/detail/' . $id)->withInput(); //->with('validation', $this->validator);
        }
    }
}
