<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<?php if($session->get('level') == 1 || $session->get('level') == 2 || $session->get('level') == 4){ ?>
<div class="row pb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Grafik Pengaduan</h5>
            </div>
            <div class="card-body">
                <canvas id="chart"></canvas>
            </div>
        </div>
    </div>
    <style>
        canvas {
            min-height: 350px !important;
        }
    </style>
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: <?= $grafik; ?>,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            tooltips: {
                enabled: true,
                mode: 'single',
                callbacks: {
                    label: function (tooltipItems, data) {
                        return tooltipItems.yLabel + ' €';
                    }
                }
            },
        }
                });
    </script>
</div>
<?php }else{ ?>
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                </ol>
            </nav>
            <h1>Selamat Datang !</h1>
            <span>
                Apa yang ingin anda adukan hari ini?
            </span>
        </div>
    </div>
<?php } ?>
<?=$this->endSection()?>