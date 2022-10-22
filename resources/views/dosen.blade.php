<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Daftar Dosen</h1>
    <ul>
        @foreach ($nama as $n)
            <li>{{$n}}</li>
        @endforeach
    </ul>
    {{--navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      {{-- Carousel --}}
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://wallpaperaccess.com/full/276590.jpg" class="img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.iliketowastemytime.com/sites/default/files/tokyo-japan-hd-wallpaper.jpg" class="img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" class="img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
