<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pengaduan;
use App\Models\User;

class BerandaController extends BaseController
{
    protected $session;
    protected $data;

    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['validation'] = \Config\Services::validation();
        $this->level = $this->session->get('level');

        $this->pengaduan = new Pengaduan();
    }

    public function index()
    {
        if ($this->level == 1 || $this->level == 2) {
            $warna = ['rgba(52, 152, 219,1.0)', 'rgba(231, 76, 60,1.0)'];
            $bulan = date('m');
            $tahun = date('Y');
            $date = mktime(0, 0, 0, $bulan, 1, $tahun);
            $data['labels'] = array();
            for ($n = 1; $n <= date('t', $date); $n++) {
                array_push($data['labels'], $n . ' ' . date('M', strtotime($tahun . '-' . $bulan)));
            }

            $data['datasets'] = array();

            $nar = array();
            $nar['label'] = "Pengaduan";
            $nar['type'] = 'bar';
            $nar['data'] = array();
            for ($n = 1; $n <= date('t', $date); $n++) {
                $n = str_pad($n, 2, '0', STR_PAD_LEFT);
                $ndate = $tahun . '-' . $bulan . '-' . $n;
                $get = $this->pengaduan
                    ->select('COUNT(id) as jml')
                    ->where('DATE(created_at)', $ndate)
                    ->first();
                $jml = $get['jml'] ? (int) $get['jml'] : 0;
                array_push($nar['data'], $jml);
            }
            $nar['backgroundColor'] = $warna[0];
            array_push($data['datasets'], $nar);

            $this->data['grafik'] = json_encode($data);
        }
        return view('app/home', $this->data);
    }
}
