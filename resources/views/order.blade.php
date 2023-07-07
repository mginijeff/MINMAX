@extends('layout.mainlayout3')

@section('content')
    <!-- Product Details and Order Form -->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Display Product Details -->
                <div class="card shadow" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="max-width: 400px; max-height: 400px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">Description: {{ $product->product_description }}</p>
                        <p class="card-text">Price: {{ $product->product_price }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Order Form -->
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Order Form</h5>
                        <form action="" method="POST" id="order-form">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="total-price">Total Price:</label>
                                <input type="text" name="total_price" id="total-price" class="form-control" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary" id="order-button" disabled>Payment</button>
                        </form>
                    </div>
                </div>
                <br>
                <!-- Order Payment Card -->
                <form action="{{ route('saveBooking') }}" method="POST" id="order-form">


                @csrf
                <div class="card shadow" id="order-payment-card" style="display: none;">
                    <div class="card-body">
                    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
                        <h5 class="card-title">Order Payment</h5>
                        <p>Product: <span id="product-name"></span></p>
                        <p>Price: <span id="product-price"></span></p>
                        <p>Quantity: <span id="order-quantity"></span></p>
                        <p>Total Price: <span id="order-total-price"></span></p>
                        <p>Payment Number: <input type="text" name="payment_number" id="payment-number" class="form-control" value="0712332212 -TIGO PESA" readonly></p>
                        <button type="submit" class="btn btn-primary">Submit Order</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Calculate total price based on quantity
        var quantityInput = document.getElementById('quantity');
        var totalPriceInput = document.getElementById('total-price');
        var orderButton = document.getElementById('order-button');
        var price = {{ $product->product_price }};

        quantityInput.addEventListener('input', function() {
            var quantity = parseInt(quantityInput.value);
            var totalPrice = quantity * price;
            totalPriceInput.value = totalPrice;

            // Enable or disable the order button based on quantity input
            if (quantity > 0) {
                orderButton.disabled = false;
            } else {
                orderButton.disabled = true;
            }
        });

        // Order button click event
        var orderForm = document.getElementById('order-form');
        orderForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Show the order payment card
            var orderPaymentCard = document.getElementById('order-payment-card');
            orderPaymentCard.style.display = 'block';

            // Set the values for the order payment details
            var productName = document.getElementById('product-name');
            var productPrice = document.getElementById('product-price');
            var orderQuantity = document.getElementById('order-quantity');
            var orderTotalPrice = document.getElementById('order-total-price');

            productName.textContent = "{{ $product->product_name }}";
            productPrice.textContent = "{{ $product->product_price }}";
            orderQuantity.textContent = quantityInput.value;
            orderTotalPrice.textContent = totalPriceInput.value;
        });
    </script>
@endsection
