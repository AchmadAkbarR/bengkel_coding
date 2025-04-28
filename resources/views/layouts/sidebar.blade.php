<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('pasien.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>      
          </li>
          <li class="nav-item">
            <a href="{{ route('pasien.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Periksa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-block mt-3" type="submit">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>
          