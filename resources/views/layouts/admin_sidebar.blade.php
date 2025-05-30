<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- Manage Users -->
    @auth
      @if(auth()->user()->role_id == 1)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Users</span>
          </a>
        </li>
      @endif
    @endauth
    <!-- Manage Games -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.games') }}">
        <i class="ti-game menu-icon"></i>
        <span class="menu-title">Igre</span>
      </a>
    </li>
    <!-- Manage Comments -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.comments') }}">
        <i class="ti-comments menu-icon"></i>
        <span class="menu-title">Komentari</span>
      </a>
    </li>
    <!-- Return Home -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('game.home') }}">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Povratak na sajt</span>
      </a>
  </ul>
</nav>