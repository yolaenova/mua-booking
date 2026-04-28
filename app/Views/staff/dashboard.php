<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="mb-0">Dashboard Staff</h3>
        <small class="text-muted">Makeup Artist Panel</small>
    </div>
</div>

<div class="mb-4">
    <h5>Halo, <?= session('name') ?> 👋</h5>
</div>

<!-- 🔥 MENU TOMBOL -->
<div class="mb-4">
    <a href="/staff/jobs" class="btn btn-primary me-2">
        Lihat Jadwal
    </a>

    <a href="/staff/history" class="btn btn-outline-secondary">
        Riwayat
    </a>
</div>

<div class="row">

    <!-- Jadwal Hari Ini -->
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="mb-3">Jadwal Hari Ini</h5>
                <p class="text-muted">Silakan cek jadwal lengkap di menu "Lihat Jadwal".</p>
            </div>
        </div>
    </div>

    <!-- Riwayat Pekerjaan -->
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="mb-3">Riwayat Pekerjaan</h5>
                <p class="text-muted">Lihat riwayat pekerjaan di menu "Riwayat".</p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>