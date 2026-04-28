<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <div class="ms-auto d-flex align-items-center">

        <!-- Nama user -->
        <span class="me-3"><?= session('name') ?> (<?= session('role') ?>)</span>

        <!-- Dropdown profile -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
               id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

                <img src="https://ui-avatars.com/api/?name=<?= session('name') ?>"
                     alt="profile" width="35" height="35" class="rounded-circle">
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li class="px-3 py-2">
                    <strong><?= session('name') ?></strong><br>
                    <small><?= session('role') ?></small>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a class="dropdown-item" href="/profile">My Profile</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">Account Settings</a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a class="dropdown-item text-danger" href="/logout">Sign Out</a>
                </li>
            </ul>
        </div>

    </div>
</nav>