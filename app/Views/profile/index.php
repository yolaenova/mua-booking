<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="card shadow">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>My Profile</h4>

            <!-- Tombol kembali -->
            <a href="/<?= session('role') ?>" class="btn btn-secondary">
                ← Kembali
            </a>
        </div>

        <hr>

        <p><strong>Nama:</strong> <?= session('name') ?></p>
        <p><strong>Role:</strong> <?= session('role') ?></p>

    </div>
</div>

<?= $this->endSection() ?>