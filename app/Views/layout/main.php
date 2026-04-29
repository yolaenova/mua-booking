<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'BeautyBook' ?></title>
    <link rel="icon" href="/iconBeautyBook.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { overflow-x: hidden; }
        
        #sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            transition: all 0.3s;
            z-index: 1000;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
        }

        #main-content {
            margin-left: 260px;
            transition: all 0.3s;
            min-height: 100vh;
        }

        /* State saat sidebar ditutup */
        #sidebar.collapsed {
            left: -260px;
        }

        #main-content.expanded {
            margin-left: 0;
        }
    </style>
</head>
<body class="bg-slate-50">

    <?= $this->include('layout/sidebar') ?>

    <div id="main-content">
        <?= view('layout/navbar') ?>

        <div class="p-4">
            <button class="btn btn-white shadow-sm border mb-4 rounded-lg px-3" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>

            <?= $this->renderSection('content') ?>
        </div>
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