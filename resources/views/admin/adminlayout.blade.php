<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | {{ env("APP_NAME") }}| a complete coiching Salution </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>
<body>
<nav class="navbar navbar-expand-lg bg-light border-bottom shadow-sm px-4 py-3">
  <div class="container-fluid">
   
  <div>
    <a href= "{{ route('public.home') }}"><img src="https://template-kit.evonicmedia.com/layout69/wp-content/uploads/2023/05/Logo-3.png" class="navbar-brand" width="150px" alt=""></a>
    
    </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">

       @auth
       <li class="nav-item">
          <a class="btn btn-outline-danger px-4 py-2 rounded-pill fw-semibold" href="">
            Hi, I {{auth()->user()->name  }}
          </a>
        </li>
       <li class="nav-item">
          <a class="btn btn-outline-success px-4 py-2 rounded-pill fw-semibold" href="{{ route('public.logout') }}">
          <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
        
        

       @endauth

      </ul>
    </div>
  </div>
</nav>

@section('content')

@show







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>