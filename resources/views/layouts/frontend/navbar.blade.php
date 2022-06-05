<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="cleverNav">
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/ethereal.png" width="50" alt=""> Ethereal Education</a>
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <div class="classy-menu">
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-primary' : '' }}">About Us</a></li>
                        <li><a href="{{ route('artikel') }}" class="{{ Request::segment(1) == 'artikel' ? 'text-primary' : '' }}">Artikel</a></li>
                        <li><a href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                    </ul>

                    <div class="search-area">
                        <form action="{{ route('artikel.search') }}" method="GET">
                            <input name="keyword" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>