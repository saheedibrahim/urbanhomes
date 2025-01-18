<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
  .bcp {
    background: #524CBF;
  }

  .tcp {
    color: #524CBF;
  }
  
</style>
</head>
<body>

  <nav class="navbar bg-white shadow-sm">
    <div class="container-fluid d-flex justify-content-between" style="margin-left: 100px; margin-right: 100px;">
      <a href="">
        <img src="/home/images/homes_logo.png" alt="Urban Homes Logo" class="logo">
      </a>
      <div class="nav-item d-flex">
        <h5 class="p-4"><a class="nav-link" href="#">Features</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Use Cases</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Resources</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Pricing</a></h5>
      </div>
      <div class="d-flex p-1">
        <h6><a href="#" class="nav-link tcp p-2">Sign In</a></h6>
        <h6 class=""><a href="#" class="nav-link btn btn bcp px-4 py-2 text-white">Sign Up</a></h6>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    
    <section style="margin: 0; padding:0;">
      @yield('content')
    </section>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>