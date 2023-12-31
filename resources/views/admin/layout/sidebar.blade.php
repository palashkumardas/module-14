  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin-panel">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/product/create">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/product">
              <i class="bi bi-circle"></i><span>All product</span>
            </a>
          </li>
         
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/customer/create">
              <i class="bi bi-circle"></i><span>Add Customer</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/customer">
              <i class="bi bi-circle"></i><span>Customer List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Customer Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/order">
              <i class="bi bi-circle"></i><span>Order list</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Payment Gateway</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/payment/create">
              <i class="bi bi-circle"></i><span>Add Payment</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/payment">
              <i class="bi bi-circle"></i><span>List Payment</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Product Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/category/create">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/category">
              <i class="bi bi-circle"></i><span>Category List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#vendor-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Vendor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vendor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/vendor/create">
              <i class="bi bi-circle"></i><span>Add Vendor</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/vendor">
              <i class="bi bi-circle"></i><span>List Vendor</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#refand-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Refand</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="refand-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-panel/refund/create">
              <i class="bi bi-circle"></i><span>Add Refund</span>
            </a>
          </li>
          <li>
            <a href="/admin-panel/refund">
              <i class="bi bi-circle"></i><span>View Refund</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cart-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Cart</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cart-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          {{-- <li>
            <a href="/admin-panel/cart/create">
              <i class="bi bi-circle"></i><span>Add Cart</span>
            </a>
          </li> --}}
          <li>
            <a href="/admin-panel/cart">
              <i class="bi bi-circle"></i><span>Cart List</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->