<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    protected $session;
    protected $data;
    protected $user;

    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['validation'] = \Config\Services::validation();
        $this->level = $this->session->get('level');

        $this->user = new User();

        if ($this->level === "3" || $this->level === "4") {
            echo "403";
            die();
        }
    }

    public function index()
    {
        $this->data['users'] = $this->user->findAll();
        return view('app/user/index', $this->data);
    }

    public function create()
    {
        return view('app/user/create', $this->data);
    }

    public function store()
    {
        try {

            $valid = $this->validate([
                'nama' => 'required',
                'username' => 'required|is_unique[user.username]',
                'password' => 'required|min_length[8]',
                'level' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }

            $this->user->insert([
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'level' => $this->request->getVar('level'),
            ]);

            session()->setFlashdata('success', "User berhasil ditambah.");
            return redirect()->to('/app/user');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/user/tambah')->withInput(); //->with('validation', $this->validator);
        }
    }

    public function edit($id)
    {
        $this->data['user'] = $this->user->find($id);
        return view('app/user/edit', $this->data);
    }

    public function update($id)
    {
        try {

            $valid = $this->validate([
                'nama' => 'required',
                'level' => 'required',
            ]);

            if (!$valid) {
                throw new \Exception($this->validator->listErrors());
            }
            if($this->request->getVar('password')){
                $this->user->update($id, [
                    'nama' => $this->request->getVar('nama'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'level' => $this->request->getVar('level'),
                ]);
            }else{
                $this->user->update($id, [
                    'nama' => $this->request->getVar('nama'),
                    'level' => $this->request->getVar('level'),
                ]);
            }

            session()->setFlashdata('success', "User berhasil diubah.");
            return redirect()->to('/app/user');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/user/edit/' . $id)->withInput(); //->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        try {

            $this->user->delete($id);

            session()->setFlashdata('success', "User berhasil dihapus.");

            return redirect()->to('/app/user');
        } catch (\Exception$e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/app/user')->withInput(); //->with('validation', $this->validator);
        }
    }
}
