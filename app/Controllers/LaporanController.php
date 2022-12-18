<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailPengaduan;
use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Pengaduan;
use App\Models\User;

class LaporanController extends BaseController
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
        if ($this->level == "2" || $this->level == "3") {
            echo "403";
            die();
        }
    }

    public function index()
    {
        $data = [];
        $tahun = date('Y');
        for ($n = 1; $n <= 12; $n++) {
            $npeng = [];
            $npeng['bulan'] = date('F', strtotime($tahun . '-' . $n));
            $npeng['peninjauan'] = $this->pengaduan
                ->select('count(id) as jml')
                ->where('status', 1)
                ->where('MONTH(created_at)', $n)
                ->where('YEAR(created_at)', $tahun)
                ->first();
            $npeng['peninjauan'] = $npeng['peninjauan']['jml'] ? (int)$npeng['peninjauan']['jml'] : 0;

            $npeng['pemrosesan'] = $this->pengaduan
                ->select('count(id) as jml')
                ->where('status', 2)
                ->where('MONTH(created_at)', $n)
                ->where('YEAR(created_at)', $tahun)
                ->first();
            $npeng['pemrosesan'] = $npeng['pemrosesan']['jml'] ? (int)$npeng['pemrosesan']['jml'] : 0;

            $npeng['tindaklanjut'] = $this->pengaduan
                ->select('count(id) as jml')
                ->where('status', 3)
                ->where('MONTH(created_at)', $n)
                ->where('YEAR(created_at)', $tahun)
                ->first();
            $npeng['tindaklanjut'] = $npeng['tindaklanjut']['jml'] ? (int)$npeng['tindaklanjut']['jml'] : 0;

            $npeng['ditutup'] = $this->pengaduan
                ->select('count(id) as jml')
                ->where('status', 4)
                ->where('MONTH(created_at)', $n)
                ->where('YEAR(created_at)', $tahun)
                ->first();
            $npeng['ditutup'] = $npeng['ditutup']['jml'] ? (int)$npeng['ditutup']['jml'] : 0;

            $npeng['total'] = $npeng['peninjauan'] + $npeng['pemrosesan'] + $npeng['tindaklanjut'] + $npeng['ditutup'];
            array_push($data, $npeng);
        }
        // dd($data);
        $this->data['laporans'] = $data;
        return view('app/laporan/index', $this->data);
    }
}
