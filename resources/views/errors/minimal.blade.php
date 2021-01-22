<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('dashboard/css/perfect-scrollbar.min.css')}}" />
        <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}" />
        <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}" />
    </head>
    <body>
        <div class="container-scroller">
        <div class="container-fluid">
          <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center text-center error-page">
              <div class="col-lg-6 mx-auto">
                <h1 class="display-1 mb-0">@yield('code')</h1>
                <h2 class="mb-4">@yield('message')</h2>
                <a class="btn btn-primary mt-5 btn-rounded btn-lg" href="{{url('/')}}">Back to home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
        <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
        <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('dashboard/js/misc.js')}}"></script>
    </body>
</html>
