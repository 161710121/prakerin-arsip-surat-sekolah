<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link bg-warning">
      <img src="{{ asset ('img/smk.png')}}" alt="SMK Assalaam Logo" class="brand-image img-circle elevation-3"
           style="opacity: 1.0">
      <span class="brand-text font-weight-light">P S S</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pt-3 pb-3 mb-3 d-flex bg-primary">
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
              <i class="nav-icon ion ion-email-unread" style="font-size:25px;color:mediumturquoise"></i>
              <p>
                Surat Masuk
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('surat_masuk.index') }}" class="nav-link">
                  <i class="fa fa-edit nav-icon" style="color:#17a2b8"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-open" style="color:dodgerblue"></i>
                <p>
                  Surat Keluar
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
  
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat_keluar.index') }}" class="nav-link">
                    <i class="fa fa-edit nav-icon" style="color:#ffc107"></i>
                    <p>Data</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-building" style="color:#7f7f7f"></i>
                  <p>
                    Instansi
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
    
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('instansi.index') }}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon" style="color:#28a745"></i>
                      <p>Data</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-clipboard" style="color:saddlebrown"></i>
                    <p>
                      Disposisi
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
      
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('disposisi.index') }}" class="nav-link">
                        <i class="fa fa-file nav-icon" style="color:burlywood"></i>
                        <p>Data</p>
                      </a>
                    </li>
                  </ul>

                </li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-cog" style="color:black"></i>
                      <p>
                        Settings
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
        
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                          <i class="fa fa-user nav-icon" style="color:#007bff"></i>
                          <p>User</p>
                        </a>
                      </li>
                    </ul>

                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  <i class="material-icons" style="color:red">&#xe879;</i> <p>{{ __('Logout') }}</p>
                                </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
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