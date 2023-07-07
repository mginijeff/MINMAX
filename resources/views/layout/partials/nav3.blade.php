


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="/" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">MinMax</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="cleanliness" class="dropdown-item">Cleanliness</a>
                            <a href="business2" class="dropdown-item">Business</a>
                            <a href="/" class="dropdown-item">Catering</a>
                         
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                   
              
                <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
    @csrf
</form>

<a href="{{ route('logout') }}" class="btn btn-link nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>


                </div>
                @if (session('fullName'))
                <div class="h-100 d-inline-flex align-items-center">
                    <p class="m-0">Welcome, {{ session('fullName') }}</p>
                </div>
            @endif
            &nbsp;  </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 d-flex align-items-center" style="background-color: #0d9824;">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-phone-alt" style="color: #0d9824;"></i>

                    </div>
                    <div class="ms-3">
                        <p class="mb-1 text-white">Emergency 24/7</p>
                        <h5 class="m-0 " style="color: white;">+255 683 350 101</h5>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
