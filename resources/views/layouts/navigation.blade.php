<nav id="nav">
    <ul class="links">
        <li class="{{ request()->routeIs('game.home') ? 'active' : '' }}">
            <a href="{{ route('game.home') }}">Featured</a>
        </li>
        <li class="{{ request()->is('list') ? 'active' : '' }}">
            <a href="{{ route('game.list') }}">Igrice na ponudu</a>
        </li>
        <li class="{{ request()->is('contact') ? 'active' : '' }}">
            <a href="{{ route('game.contact') }}">Kontakt</a>
        </li>

        @auth
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="nav-link-logout">
                        Logout
                    </button>
                </form>
            </li>
        @endauth

        @guest
            <li class="{{ request()->is('login') ? 'active' : '' }}">
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li class="{{ request()->is('register') ? 'active' : '' }}">
                <a href="{{ route('register') }}">Register</a>
            </li>
        @endguest
    </ul>
    <ul class="icons">
        <li><a href="https://github.com/m-kojcic" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>