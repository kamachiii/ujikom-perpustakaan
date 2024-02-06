<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-opacity-75">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'dashboard-admin') active @endif" href="{{ route('dashboard-admin') }}"><b>Dashboard</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'buku') active @endif" href="{{ route('buku') }}"><b>Book</b></a>
        </li>
        </ul>
    </div>
    </div>
</nav>
