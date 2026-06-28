<nav class="navbar navbar-expand-lg navbar-dark">
    <ul class="navbar-nav">
        @foreach ($navlinks as $link)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($link['route']) }}">
                    {{ $link['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>