@extends('layout_backend.main')

@section('content')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>PRODUCT REGISTERED</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="Dashboard_admin">Dashboard</a></li>
                    <li><a href="viewBusiness">View Business</a></li>
                </ol>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">View Posted Products</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->product_name }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" style="width: 100px; height: 100px;">
                                            </td>
                                            <td style="max-width: 200px; word-wrap: break-word;">{{ $product->product_description }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
