<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'BeautyBook' ?></title>
    <link rel="icon" href="/iconBeautyBook.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }

        #sidebar.collapsed {
            margin-left: -250px;
        }

        #main-content.expanded {
            margin-left: 0;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?= view('layout/navbar') ?>

    <!-- Sidebar -->
    <?= $this->include('layout/sidebar') ?>

    <!-- Content -->
    <div id="main-content" class="p-4">
        <button class="btn btn-dark mb-3" onclick="toggleSidebar()">☰</button>

        <?= $this->renderSection('content') ?>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.getElementById('main-content').classList.toggle('expanded');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>