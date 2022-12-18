<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kategori;
use App\Models\User;

class KategoriController extends BaseController
{
    protected $session;
    protected $data;
    protected $user;
    protected $kategori;

    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['validation'] = \Config\Services::validation();
        $this->level = $this->session->get('level');

        $this->user = new User();
        $this->kategori = new Kategori();
        if ($this->level === "3" || $this->level === "4") {
            echo "403";
            die();
        }
    }

    public function index()
    {
        $this->data['kategoris'] = $this->kategori->findAll();
        return view('app/kategori/index', $this->data);
    }

    public function create()
    {
        return view('app/kategori/create', $this->data);
    }

    public function store()
    {
        try {
            $valid = $this->validate([
                'judul' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->kategori->insert([
                'judul' => $this->request->getVar('judul'),
            ]);

            session()->setFlashdata('success', "Kategori berhasil ditambah.");
            return redirect()->to('/app/kategori');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/kategori/tambah')->withInput(); //->with('validation', $this->validator);
        }
    }

    public function edit($id)
    {
        $this->data['kategori'] = $this->kategori->find($id);
        return view('app/kategori/edit', $this->data);
    }

    public function update($id)
    {
        try {
            $valid = $this->validate([
                'judul' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->kategori->update($id, [
                'judul' => $this->request->getVar('judul'),
            ]);

            session()->setFlashdata('success', "Kategori berhasil diubah.");
            return redirect()->to('/app/kategori');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/kategori/edit/' . $id)->withInput(); //->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        try {

            $this->kategori->delete(['id' => $id]);

            session()->setFlashdata('success', "Kategori berhasil dihapus.");
            return redirect()->to('/app/kategori');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/kategori')->withInput(); //->with('validation', $this->validator);
        }
    }
}
