 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ route("home") }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-cart'></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
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

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("categorias") }}">
          <i class='bx bx-category'></i>
          <span>Categorias</span>
        </a>
      </li><!-- End Categorias Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("productos") }}">
          <i class='bx bx-basket'></i>
          <span>Productos</span>
        </a>
      </li><!-- End Productos Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("proveedores") }}">
          <i class='bx bxs-user-detail'></i>
          <span>Proveedores</span>
        </a>
      </li><!-- End Clientes Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("usuarios") }}">
          <i class='bx bxs-user-badge'></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Usuarios Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->