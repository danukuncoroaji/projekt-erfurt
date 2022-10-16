<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Pengaduan;
use App\Models\DetailPengaduan;
use App\Models\Gambar;
use App\Models\Komentar;

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
    }
    
    public function index()
    {
        return view('app/pengaduan/index', $this->data);
    }

    public function create()
    {
        return view('app/pengaduan/index', $this->data);
    }
}
