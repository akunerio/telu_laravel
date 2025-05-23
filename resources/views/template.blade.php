<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="width:95%">
    @auth
        <div class="row justify-content-end" style="margin-top:2%">
            <div class="col-3">
        {{ Auth::user()->name }}
            <a href="/logout" class="btn btn-warning">Logout</a>
            </div>
        </div>
    @endauth
    <div class="row justify-content-center" style="margin-top:13%">
      @yield('content')
    </div>
  </body>
</html>
