<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-olive">
      
      <span class="brand-text font-weight-light">SIMRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @php
                $imagePath = auth()->user()->path_image ? asset('storage/' . auth()->user()->path_image) : asset('images/default-profile.png');
            @endphp
            <img src="{{ $imagePath }}" class="img-circle elevation-2 rounded-circle" style="width: 35px; height: 35px;">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

                    <li class="nav-item">
                      <a href="{{ route('dokter.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-user"></i>
                        <p>
                          Dokter
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('pasien.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                          Pasien
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('jadwal_konsultasi.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-calendar"></i>
                        <p>
                          Jadwal Konsultasi
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('rekam_medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-book"></i>
                        <p>
                          Rekam Medis
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fas fa-stethoscope"></i>
                        <p>
                          Hasil Pemeriksaan
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('obat.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-capsules"></i>
                        <p>
                          Data Obat
                        </p>
                      </a>
                    </li>

                   
          {{-- Pengaturan --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-user-cog"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (auth()->user()->hasRole('admin'))
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil</p>
                </a>
              </li>
            </ul>
          </li> --}}
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>