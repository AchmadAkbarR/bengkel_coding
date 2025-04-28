<!-- Sidebar Navigation -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="{{ route('dashboard-dokter') }}" class="nav-link" style="color: #ffffff;">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <!-- Menu Periksa (Menu Induk) -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link" style="color: #ffffff;">
                <i class="nav-icon fas fa-stethoscope"></i> <!-- Icon ganti stethoscope biar lebih cocok -->
                <p>
                    Memeriksa
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <!-- Submenu di bawah Periksa -->
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('riwayat-periksa') }}" class="nav-link" style="color: #ffffff;">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Riwayat Periksa</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Logout Button -->
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-block mt-3" type="submit">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>

    </ul>
</nav>
