<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div style="background-color: white" class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <!-- Logo -->
                        <div class="col-xl-11 col-lg-11 col-md-11 d-none d-md-block">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('assets/img/logo/LOGOJDI.jpg')}}" alt="" width="150">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #1A3059;border-top:15px solid #F9B501" class="header-bottom header-sticky">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-lg-11 col-md-11 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <h1 class="text-white">LOGO</h1>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation" class="d-flex bd-highlight">
                                        <li class="bd-highlight">
                                            <a class="{{ (Request::url() === url('/')) ? 'menu-active' : '' }}" href="{{url('/')}}">Beranda</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="{{ (Request::url() === url('/category')) ? 'menu-active' : '' }}" href="{{route('category')}}">Kategori</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="{{ (Request::url() === url('/archive/news')) ? 'menu-active' : '' }}" href="{{route('archive.news')}}">Arsip Terbaru</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="{{ (Request::url() === url('/archive/popular')) ? 'menu-active' : '' }}" href="{{route('archive.popular')}}">Arsip Terpopuler</a>
                                        </li>
                                        <li class="bd-highlight"></li>
                                        @guest
                                        <li class="ml-auto bd-highlight"><a href="{{route('login')}}"><span class="fa fa-sign-in-alt"></span> Sign In</a></li>
                                        @else
                                        <li class="ml-auto bd-highlight">
                                            <a href="#">{{\Auth::user()->name}}&nbsp;</a>
                                            <ul class="submenu">
                                                @if(\Auth::user()->role == "admin")
                                                    <li><a href="{{route('home')}}">Dashboard</a></li>
                                                @endif
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Sign Out</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<style type="text/css">
    #navigation li a:hover {
        color: #222831;
    }

    #navigation li .menu-active {
        color: #222831;
    }
</style>
