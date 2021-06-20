 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Usuários
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.usuario-novo')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cadastrar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.permission.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Perfis
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.perfis.cadastrar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cadastrar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.perfis.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Permissões
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.permissoes-cadastrar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cadastrar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.permission.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                    </a>
                </li>
                </ul>
            </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
