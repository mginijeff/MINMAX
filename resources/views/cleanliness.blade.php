@extends('layout.mainlayout2') 
 @section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Cleanliness</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Contact</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Cleanliness</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
           
                <!-- cleanliness starts -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text text-uppercase" style="color: #0d9824;">CLEANLINESS</h6>
                <h1 class="mb-5" style="color: #00639a;">Our Cleanliness Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ URL::asset('import/assets/img/C11.png')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0" style="color:#00639a;">OFFICE CLEANING </h5>
                               
                            </div>
                            <div class="" style="background:#00639a">
                            <p style="color:white;">We are performing deep cleanliness in different offices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ URL::asset('import/assets/img/B12.png')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0" style="color:#00639a;">DRY CLEANER</h5>
                               
                            </div>
                            <div  style="background:#00639a">
                            <small style="color:white;">Dry cleaner of different materials</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ URL::asset('import/assets/img/B12.png')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0" style="color:#00639a;">DRY CLEANER</h5>
                               
                            </div>
                            <div  style="background:#00639a">
                            <small style="color:white;">Dry cleaner of different materials</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ URL::asset('import/assets/img/C11.png')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0" style="color:#00639a;">OFFICE SANITATION</h5>
                               
                            </div>
                            <div  style="background:#00639a">
                            <small style="color:white;">Dry cleaner of different materials</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- cleanliness service -->
    
                </div>
               
            </div>
 
 @endsection