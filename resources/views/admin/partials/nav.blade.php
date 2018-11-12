<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    {{--  <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>  --}}
    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Administración</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          @can('users.index')
          <li><a href="{{ route('users.index') }}"><i class="fa fa-eye"></i>Usuarios</a></li>
          @endcan
          @can('roless.index')
          <li><a href="{{ route('roles.index') }}"><i class="fa fa-eye"></i>Roles</a></li>
          @endcan
        </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>CMS</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          @can('products.index')
        <li><a href="{{ route('products.index') }}"><i class="fa fa-eye"></i>Productos</a></li>
         @endcan
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li>
  </ul>

