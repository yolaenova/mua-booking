<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand">Admin Panel</a>
<a href="/logout" class="btn btn-light btn-sm">Logout</a>
</div>
</nav>

<div class="container mt-5">

<h2>Selamat Datang, <?= session('name') ?></h2>
<p>Dashboard Administrator Booking Makeup Artist</p>

<div class="row mt-4">

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Total Booking</h5>
<h2>0</h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Total Customer</h5>
<h2>0</h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Total Revenue</h5>
<h2>Rp 0</h2>
</div>
</div>
</div>

</div>

</div>

</body>
</html>