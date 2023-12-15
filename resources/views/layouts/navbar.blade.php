{{-- <nav class="sb-topnav navbar navbar-expand navbar-light bg-light"> --}}
<nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #f1f1f1;">
    {{-- Logo Bootstrap --}}
    <a class="navbar-brand ps-3" href="index.html"><img src="{{ asset('img/Logo-Panasonic.webp') }}" class="img-fluid" alt="" srcset=""></a>

    {{-- Icon List --}}
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle"><i class="fs-3 fw-bold bi bi-list"></i></button>

    {{-- Jam --}}
    <ul class="navbar-nav d-none d-lg-inline-block form-inline ms-auto me-0 me-lg-3 my-2 my-lg-0">
        <div class="card fs-4 fw-bold p-1" id="MyClockDisplay" onload="showTime()"></div>
    </ul>
</nav>
