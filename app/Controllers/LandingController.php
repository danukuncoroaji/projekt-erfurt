<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailPengaduan;
use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Pengaduan;
use App\Models\User;
use App\Models\Pengumuman;

class LandingController extends BaseController
{
    protected $session;
    protected $data;
    protected $user;
    protected $pengaduan;
    protected $detail;
    protected $gambar;
    protected $komentar;
    protected $pengumuman;

    public function __construct()
    {
        $this->user = new User();
        $this->pengaduan = new Pengaduan();
        $this->detail = new DetailPengaduan();
        $this->gambar = new Gambar();
        $this->komentar = new Komentar();
        $this->kategori = new Kategori();
        $this->pengumuman = new Pengumuman();
    }

    public function index(){
        $this->data['jumlah_user'] = count($this->user->where('level',3)->findAll());
        $this->data['jumlah_aduan'] = count($this->pengaduan->findAll());
        $this->data['jumlah_aduan_selesai'] = count($this->pengaduan->where('status',4)->findAll());

        $this->data['jumlah_aduan_1'] = count($this->pengaduan->where('id_kategori',1)->findAll());
        $this->data['jumlah_aduan_2'] = count($this->pengaduan->where('id_kategori',2)->findAll());
        $this->data['jumlah_aduan_3'] = count($this->pengaduan->where('id_kategori',3)->findAll());
        $this->data['jumlah_aduan_4'] = count($this->pengaduan->where('id_kategori',4)->findAll());
        $this->data['jumlah_aduan_5'] = count($this->pengaduan->where('id_kategori',5)->findAll());

        // dd($this->data);
        return view('landing/index', $this->data);
    }

    public function pengumuman(){
        $this->data['pengumumans'] = $this->pengumuman->findAll();
        return view('landing/pengumuman/index', $this->data);
    }

    public function pengumumanDetail($id){
        $this->data['pengumuman'] = $this->pengumuman->find($id);
        return view('landing/pengumuman/detail', $this->data);
    }
}
