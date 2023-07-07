@extends('layout.mainlayout') 
 @section('content')
<!-- Service Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{ URL::asset('import/assets/img/A11.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0 text-center" style="color: #0d9824;">office cleanliness</h5>


                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{ URL::asset('import/assets/img/A15.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0" style="color: #0d9824">Dry cleaner</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{ URL::asset('import/assets/img/A16.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0" style="color: #0d9824">Affordable Price</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-uppercase" style="color: #0d9824;">About Us</h6>

                <h1 class="mb-4" style="color: #00639a;">We Are Trusted Cleanliness Company</h1>

                    <p class="mb-4">With our commitment to excellence and attention to detail, we ensure that every space we clean shines with pristine hygiene. Our experienced team of professionals is well-equipped with the latest cleaning techniques and top-quality supplies. We understand the importance of a clean and healthy environment, 
                        whether it's an office, residential property, or commercial space</p>
                   <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check text-success me-3" style="color: #0d9824;"></i>Office Sanitation & Cleanliness</p>
                   <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check text-success me-3" style="color: #0d9824;"></i>Quality services at affordable prices</p>
                   <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check text-success me-3" style="color: #0d9824;"></i>Immediate 24/ 7 emergency services</p>
                    <div class="d-flex align-items-center p-4 mt-5" style="background-color: #0d9824;">

                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt fa-2x" style="color: #0d9824;"></i>

                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                            <h3 class="m-0 " style="color: white;">+255 683 350 101</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ URL::asset('import/assets/img/B11.png')}}" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="{{ URL::asset('import/assets/img/C11.png')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">3</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                    <p class="text-white mb-0">Expert officers</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
                    <p class="text-white mb-0">Complete Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
            <div class="d-flex align-items-center justify-content-center w-100 h-100" style="background-color: #00639a;">

                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Professional Cleaners</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text text-uppercase" style="color: #0d9824;">Our Services</h6>

                    <h1 class="mb-5" style="color: #00639a;">Explore Our Services</h1>

                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-tint fa-2x " style="color: #0d9824;"></i>



                            </div>
                            <h4 class="mb-3" style="color: #00639a">Office cleanliness</h4>
                            <p style="color: #000000;"> We provide top-notch cleaning services for various office spaces. We understand the significance of a clean and organized workplace, and we are committed to delivering exceptional results.  
                                We ensure that every nook and corner of your office is thoroughly cleaned and sanitized.</p>
                                <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Quality Service</p>
                                <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Customer Satisfaction</p>
                                <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Support 24/7</p>
                                <a href="/" class="btn w-100 mt-2" style="background-color: #0d9824; color: white;">Read More</a>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-tint fa-2x " style="color: #0d9824;"></i>


                            </div>
                            <h4 class="mb-3" style="color: #00639a">Dry Cleaner</h4>
                            <p style="color: #000000;">we specialize in providing exceptional dry cleaning services for a wide range of clothing items and fabrics. Whether it's delicate dresses, suits, formal wear, or everyday garments,
                                 we use advanced techniques and high-quality solvents to gently clean and refresh your clothes. Our skilled team pays meticulous attention,</p>
                                 <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Quality Service</p>
                                 <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Customer Satisfaction</p>
                                 <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Support 24/7</p>
                                 <a href="/" class="btn w-100 mt-2" style="background-color: #0d9824; color: white;">Read More</a>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-tint fa-2x " style="color: #0d9824;"></i>
                            </div>
                            <h4 class="mb-3" style="color: #00639a">Selling Equipments</h4>
                            <p style="color: #000000;">We are selling top-quality cleanliness equipment to meet all your cleaning needs. We understand the importance of having the right tools. From brooms, mops, and vacuum cleaners to disinfectants, cleaning solutions, and trash bins, we offer a wide range of products that are designed to deliver effective.</p>
                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Quality Service</p>
                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Customer Satisfaction</p>
                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Support 24/7</p>
                            <a href="/" class="btn w-100 mt-2" style="background-color: #0d9824; color: white;">Read More</a>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-tint fa-2x " style="color: #0d9824;"></i>
                            </div>
                            <h4 class="mb-3" style="color: #00639a">Catering Service</h4>
                            <p style="color: #000000;">We provide exceptional culinary experiences for any occasion. With a passion for delicious food and impeccable service, we specialize in crafting custom menus that suit your unique preferences and dietary requirements. From corporate events and weddings to private parties and social gatherings.</p>

                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Quality Service</p>
                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Customer Satisfaction</p>
                            <p class="fw-medium" style="color: #00639a;"><i class="fa fa-check  me-2" style="color: #0d9824;"></i>Support 24/7</p>
                            <a href="/" class="btn w-100 mt-2" style="background-color: #0d9824; color: white;">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
       

          
       
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -1rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                    <h1 class="mb-4" style="color: #00639a;">Make a comment to us</h1>

                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <!--  -->
                                <!-- <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Comment here"></textarea>
                                </div>
                                <div class="col-12">
                                <button class="btn w-100 py-3" type="submit" style="color: white; background-color: #0d9824;">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->




@endsection