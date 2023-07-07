@extends('layout_backend.main')

@section('content')
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Register Business</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" id="product_name" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <input type="file" id="product_image" name="product_image" class="form-control-file">
                        <small class="form-text text-muted">Select a new image to update the product image.</small>
                    </div>
                    @if ($product->product_image)
                        <div class="form-group">
                            <label>Current Image</label>
                            <div>
                                <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" width="200" height="200">
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea id="product_description" name="product_description" class="form-control" rows="3" required>{{ $product->product_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input type="number" id="product_price" name="product_price" class="form-control" value="{{ $product->product_price }}" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" id="cancelButton">Cancel</button>
                    </div>
                </form>
            </div>
        </div> <!-- .card -->
    </div>
</div>

<!-- JavaScript code to handle cancel button click event -->
<script>
    document.getElementById('cancelButton').addEventListener('click', function() {
        // Redirect to the desired page or perform any other action
        window.location.href = "{{ route('viewBusiness') }}";
    });
</script>
@endsection
