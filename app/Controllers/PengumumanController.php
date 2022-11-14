<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pengumuman;
use App\Models\User;

class PengumumanController extends BaseController
{
    protected $session;
    protected $data;
    protected $user;
    protected $pengumuman;

    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['validation'] = \Config\Services::validation();
        $this->level = $this->session->get('level');

        $this->user = new User();
        $this->pengumuman = new Pengumuman();

        if($this->level !== 1){
            return redirect()->to('/');
        }
    }

    public function index()
    {
        $this->data['pengumumans'] = $this->pengumuman->findAll();
        return view('app/pengumuman/index', $this->data);
    }

    public function create()
    {
        return view('app/pengumuman/create', $this->data);
    }

    public function store()
    {
        try {

            $valid = $this->validate([
                'judul' => 'required',
                'isi' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->pengumuman->insert([
                'judul' => $this->request->getVar('judul'),
                'author' => $this->session->get('id'),
                'isi' => $this->request->getVar('isi'),
            ]);

            session()->setFlashdata('success', "Pengumuman berhasil ditambah.");
            return redirect()->to('/app/pengumuman');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengumuman/tambah')->withInput(); //->with('validation', $this->validator);
        }
    }

    public function detail($id)
    {
        $this->data['pengumuman'] = $this->pengumuman->find($id);
        return view('app/pengumuman/detail', $this->data);
    }

    public function edit($id)
    {
        $this->data['pengumuman'] = $this->pengumuman->find($id);
        return view('app/pengumuman/edit', $this->data);
    }

    public function update($id)
    {
        try {

            $valid = $this->validate([
                'judul' => 'required',
                'isi' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->pengumuman->update($id, [
                'judul' => $this->request->getVar('judul'),
                'author' => $this->session->get('id'),
                'isi' => $this->request->getVar('isi'),
            ]);

            session()->setFlashdata('success', "Pengumuman berhasil diubah.");
            return redirect()->to('/app/pengumuman');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengumuman/edit/' . $id)->withInput(); //->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        try {

            $this->pengumuman->delete(['id' => $id]);

            session()->setFlashdata('success', "Pengumuman berhasil dihapus.");
            return redirect()->to('/app/pengumuman');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/pengumuman')->withInput(); //->with('validation', $this->validator);
        }
    }
}
