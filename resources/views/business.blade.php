@extends('layout.mainlayout3') 
 @section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Business</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Contact</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Business</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
      <!-- cleanliness starts -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class=" text-uppercase" style="color:#0d9824;">BUSINESS</h6>
                <h1 class="mb-5" style="color:#00639a;">Our Business Services</h1>
            </div>
            <div class="row g-4">
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="max-width: 400px; max-height: 400px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text" style="color:#00639a;">Description:</p>
                    @if (strlen($product->product_description) > 28)
                        <p class="card-text">{{ substr($product->product_description, 0, 26) }}...</p>
                       
                        <div class="collapse" id="description{{ $product->id }}">
                            <p class="card-text">{{substr($product->product_description, 26 )}}</p>
                        </div>
                        <a href="#" class="btn btn-link read-more-link" data-toggle="collapse" data-target="#description{{ $product->id }}">Read More</a>
                    @else
                        <p class="card-text">{{ $product->product_description }}</p>
                    @endif
                    <p class="card-text">Price: {{ $product->product_price }}</p>
                    @if (Auth::guard('web')->check())
                    <a href="{{ route('order', ['product' => $product->id]) }}" class="btn btn-primary">Order</a>
                @else
                    <a href="login" class="" style="background:#0d9824; color:white">Order Here</a>
                @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const readMoreLinks = document.querySelectorAll('.read-more-link');

        readMoreLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = this.getAttribute('data-target');
                const collapseElement = document.querySelector(target);

                collapseElement.classList.toggle('show');
            });
        });
    });
</script>

                
               
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cleanliness service -->
    
                </div>
               
            </div>
 @endsection