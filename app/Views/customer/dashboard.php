<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="mb-0">Dashboard Customer</h3>
        <small class="text-muted">Booking Makeup Artist</small>
    </div>
</div>

<div class="mb-4">
    <h5>Halo, <?= session('name') ?> 👋</h5>
    <p class="text-muted">Selamat datang di layanan booking makeup artist</p>
</div>

<div class="row">

    <!-- Booking Sekarang -->
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="mb-3">Booking Makeup</h5>
                <p class="text-muted">Pesan layanan makeup sesuai kebutuhan kamu</p>
                <a href="/services" class="btn btn-success">Lihat Layanan</a>
            </div>
        </div>
    </div>

    <!-- Riwayat Booking -->
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="mb-3">Riwayat Booking</h5>
                <p class="text-muted">Belum ada riwayat booking</p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>