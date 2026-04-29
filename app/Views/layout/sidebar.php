<div id="sidebar" class="text-white vh-100 position-fixed shadow" style="width: 250px; transition: all 0.3s; background-color: #F875AA; z-index: 1000;">
    
    <div class="p-3">
        <div class="py-3 text-center">
            <h4 class="fw-bold mb-0">💄 BeautyBook</h4>
            <small class="text-white-50">v.1.0</small>
        </div>
        <hr class="bg-white">

        <ul class="nav flex-column">
            
            <li class="nav-item">
                <a href="/<?= session('role') ?>" class="nav-link text-white hover-link">
                    🏠 Dashboard
                </a>
            </li>

            <?php if (session('role') == 'admin') : ?>
                <li class="nav-item">
                    <a href="/admin/services" class="nav-link text-white hover-link">
                        ✨ Kelola Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/schedules" class="nav-link text-white hover-link">
                        📅 Atur Jadwal
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/bookings" class="nav-link text-white hover-link">
                        📝 Semua Booking
                    </a>

                <li class="nav-item">
        <a href="/staff/jobs" class="nav-link text-white hover-link">
            💼 Jadwal Tugas
        </a>
    </li>
    <li class="nav-item">
        <a href="/staff/history" class="nav-link text-white hover-link">
            📜 Riwayat Kerja
        </a>
    </li>

                </li>
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link text-white hover-link">
                        👤 Kelola User
                    </a>
                </li>

            <?php elseif (session('role') == 'staff') : ?>
                <li class="nav-item">
                    <a href="/staff/jobs" class="nav-link text-white hover-link">
                        💼 Tugas Hari Ini
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/staff/history" class="nav-link text-white hover-link">
                        📜 Riwayat Kerja
                    </a>
                </li>

            <?php else : ?>
                <li class="nav-item">
                    <a href="/services" class="nav-link text-white hover-link">
                        🛍️ Pesan Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/my-bookings" class="nav-link text-white hover-link">
                        📑 Booking Saya
                    </a>
                </li>
            <?php endif; ?>

            <hr class="bg-white">

            <li class="nav-item">
                <a href="/profile" class="nav-link text-white hover-link">
                    ⚙️ Profile Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link text-white hover-link mt-2 bg-danger-subtle rounded text-danger bg-opacity-25 py-2">
                    🚪 Logout
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
    /* Biar ada efek pas menu didekati kursor */
    .hover-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        padding-left: 20px !important;
        transition: all 0.2s;
    }
    .nav-link {
        transition: all 0.2s;
    }
</style>