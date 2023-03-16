<nav class="navbar navbar-expand fixed-top be-top-header">
    <div class="container-fluid">
        <div class="be-navbar-header">
            <a class="navbar-brand" href="{{ url('admin/dashboard') }}"></a>
        </div>
        <div class="page-title"><span>Dashboard</span></div>
        <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="{{ asset('img/avatar.png') }}" alt="Avatar">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu" role="menu">     
                        <div class="user-info">
                            @if ( Auth::check())        
                                <div class="user-name">{{ Auth::user()->name }}</div>
                            @endif
                        </div>
                        @if ( Auth::check())
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="icon mdi mdi-power"></span>Wyloguj się
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>