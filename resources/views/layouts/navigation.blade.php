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
    </ul>
    <ul class="icons">
        <li><a href="https://github.com/m-kojcic" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>