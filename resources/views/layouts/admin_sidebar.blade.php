<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- Example: Manage Users -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
    <!-- Example: Manage Games -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.games') }}">
        <i class="ti-game menu-icon"></i>
        <span class="menu-title">Igre</span>
      </a>
    </li>
    <!-- Example: Orders -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.comments') }}">
        <i class="ti-comments menu-icon"></i>
        <span class="menu-title">Komentari</span>
      </a>
    </li>
    <!-- Add more admin links as needed -->
  </ul>
</nav>