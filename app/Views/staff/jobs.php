<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Jadwal Tugas</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Layanan</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jobs as $i => $job): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $job['service_name'] ?></td>
            <td>Rp <?= $job['total_price'] ?></td>
            <td><?= $job['booking_status'] ?></td>
            <td>
                <a href="/staff/process/<?= $job['id'] ?>" class="btn btn-warning btn-sm">Proses</a>
                <a href="/staff/done/<?= $job['id'] ?>" class="btn btn-success btn-sm">Selesai</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>