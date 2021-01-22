<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
  <div style="margin-top: 20%" class="user-info">
    <img src="{{asset('assets/img/profile/'. \Auth::user()->photo)}}" alt="">
    <p class="name">{{\Auth::user()->name}}</p>
    <p class="designation">{{Auth::user()->email}}</p>
    <span class="online"></span>
  </div>
  <ul class="nav">
    <hr class="mt-4">
    <li class="nav-item @yield('dashboard')">
      <a class="nav-link" href="{{route('home')}}">
        <img src="{{asset('dashboard/images/icons/1.png')}}" alt="">
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item @yield('arsip')">
      <a class="nav-link" href="{{route('archive')}}">
        <img src="{{asset('dashboard/images/icons/001-doc.png')}}" alt="">
        <span class="menu-title">Arsip</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="false" aria-controls="user-pages">
        <img src="{{asset('dashboard/images/icons/4.png')}}" alt="">
        <span class="menu-title">Pengguna<i class="fa fa-sort-down ml-2"></i></span>
      </a>
      <div class="collapse" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.lecture')}}">
              Dosen
            </a><a class="nav-link" href="{{route('users.student')}}">
              Mahasiswa
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
