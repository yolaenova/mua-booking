<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Riwayat Pekerjaan</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Layanan</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jobs as $i => $job): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $job['service_name'] ?></td>
            <td>Rp <?= $job['total_price'] ?></td>
            <td><?= $job['booking_status'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>