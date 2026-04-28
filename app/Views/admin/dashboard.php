<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="mb-0">Dashboard Admin</h3>
        <small class="text-muted">Booking Makeup Artist</small>
    </div>
</div>

<div class="mb-4">
    <h5>Selamat Datang, <?= session('name') ?> 👋</h5>
</div>

<div class="row">

    <!-- Total Booking -->
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h6 class="text-muted">Total Booking</h6>
                <h3 class="fw-bold">0</h3>
            </div>
        </div>
    </div>

    <!-- Total Customer -->
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h6 class="text-muted">Total Customer</h6>
                <h3 class="fw-bold">0</h3>
            </div>
        </div>
    </div>

    <!-- Total Revenue -->
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h6 class="text-muted">Total Revenue</h6>
                <h3 class="fw-bold text-success">Rp 0</h3>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>