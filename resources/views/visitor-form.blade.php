<!DOCTYPE html>
<html lang="en" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Visitor Management System" />
    <meta name="author" content="https://www.instagram.com/andhy.57" />
    <meta name="google" value="notranslate" />
    <title>Visitor Management System</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet" />
</head>
{{-- <style>
    .bg-gambar {
        background-image:url(img/panasonic-area.webp);
        background-size:cover;
        background-attachment: fixed;
    }
</style> --}}
<body>
    {{-- <div class="container-fluid w-100 h-100" style="background-color: #f1f1f1;"> --}}
    <div class="container-fluid w-100 h-100 bg-secondary bg-opacity-50">
    {{-- <div class="container-fluid w-100 h-100 bg-gambar"> --}}
        <div class="d-flex aligns-items-center justify-content-center card text-center w-75 position-absolute top-50 start-50 translate-middle">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        {{-- <div class="card mx-auto my-auto" style="max-width: 80rem;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              <div class="col-md-4">
                <img src="{{ asset('img/panasonic-area.webp') }}" class="img-fluid rounded-end h-100" alt="{{ asset('img/panasonic-area.webp') }}">
              </div>
            </div>
        </div> --}}


        {{-- <img src="{{ asset('img/panasonic-area.webp') }}" class="img-fluid w-100 h-100" alt="{{ asset('img/panasonic-area.webp') }}"> --}}

        {{-- <div class="card text-bg-dark">
            <img src="{{ asset('img/panasonic-area.webp') }}" class="card-img" alt="{{ asset('img/panasonic-area.webp') }}">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div> --}}
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
