<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Favico -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
  @yield('title')
  
  @include('dashboard.dev.link')
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('dashboard.layouts.navbar')

    <!-- partial -->
    <div class="container-fluid mt-5">
      <div class="row row-offcanvas row-offcanvas-right">
        
        <!-- Sidebar -->
        @include('dashboard.layouts.sidebar')
        <!-- End Sidebar -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Footer -->
        @include('dashboard.layouts.footer')
        <!-- End Footer -->

        <!-- partial -->
      </div>
    </div>

  </div>


  @include('dashboard.dev.script')
  
</body>

</html>
<div class="modal fade" id="signOutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Sign Out</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin ingin keluar ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{route('logout')}}" class="btn btn-danger" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Sign Out</a>
      </div>
    </div>
  </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>