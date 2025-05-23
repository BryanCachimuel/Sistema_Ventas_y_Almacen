 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ route("home") }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      @can('ver-ventas')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-cash-register"></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route("ventas-nueva") }}">
              <i class="bi bi-circle"></i><span>Vender Producto</span>
            </a>
          </li>
          <li>
            <a href="{{ route("detalle-venta") }}">
              <i class="bi bi-circle"></i><span>Consultar Ventas</span>
            </a>
        </ul>
      </li><!-- End Components Nav -->
      @endcan

      @can('ver-admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("categorias") }}">
          <i class="fa-solid fa-list-check"></i>
          <span>Categorias</span>
        </a>
      </li><!-- End Categorias Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav-products" data-bs-toggle="collapse" href="#">
          <i class='bx bx-basket'></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route("productos") }}">
              <i class="bi bi-circle"></i><span>Administrar Productos</span>
            </a>
          </li>
          <li>
            <a href="{{ route("reportes_productos") }}">
              <i class="bi bi-circle"></i><span>Reportes de Productos</span>
            </a>
        </ul>
      </li><!-- End Productos Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('compras') }}">
          <i class="fa-solid fa-cart-plus"></i>
          <span>Compras</span>
        </a>
      </li><!-- End Compras Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("proveedores") }}">
          <i class="fa-solid fa-truck-moving"></i>
          <span>Proveedores</span>
        </a>
      </li><!-- End Clientes Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("usuarios") }}">
          <i class="fa-solid fa-users-between-lines"></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Usuarios Page Nav -->
      @endcan
    </ul>

  </aside><!-- End Sidebar-->