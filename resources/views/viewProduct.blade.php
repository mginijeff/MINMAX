@extends('layout_backend.main')

@section('content')
<div class="modal-body">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Product Details</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="product-name">Product Name:</label>
                    <input type="text" class="form-control" id="product-name" value="{{ $product->product_name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="product-image">Product Image:</label><br>
                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" class="img-fluid">
                </div>
                <div class="form-group">
                    <label for="product-description">Description:</label>
                    <textarea class="form-control" id="product-description" rows="3" readonly>{{ $product->product_description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="product-price">Price:</label>
                    <input type="text" class="form-control" id="product-price" value="{{ $product->product_price }}" readonly>
                </div>
            </form>
        </div>
        <div class="card-footer">
           <a href="/viewBusiness"><button type="button" class="btn btn-secondary" id="cancelButton" data-dismiss="modal">Cancel</button></a> 
        </div>
    </div>
</div>



@endsection

