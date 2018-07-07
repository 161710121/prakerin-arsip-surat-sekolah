<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset ('img/smk.png')}}" alt="SMK Assalaam Logo" class="brand-image img-circle elevation-3"
           style="opacity: 1.0">
      <span class="brand-text font-weight-light">P S S</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Surat Masuk
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="surat_masuk" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Surat Keluar
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
  
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="surat Keluar" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Data</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    Instansi
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
    
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="instansi" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Data</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                      Disposisi
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
      
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="disposisi" class="nav-link active">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Data</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>