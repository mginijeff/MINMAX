@extends('layout_backend.main') 
 @section('content')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>PRODUCT REGISTER</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Dashboard_admin">Dashboard</a></li>
                            <li><a href="register">Post Business</a></li>
                            <!-- <li class="active">Data table</li> -->
                        </ol>
                    </div>
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
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Register Business</strong>
            </div>
            <div class="card-body">
            <form action="{{ route('register-business.store') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="product_name" class="control-label mb-1">Name of a product</label>
                    <input id="product_name" name="product_name" type="text" class="form-control" data-val="true" data-val-required="Please enter the name of the product" autocomplete="off">
                    <span class="help-block" data-valmsg-for="product_name" data-valmsg-replace="true"></span>
                </div>

                <div class="form-group">
                    <label for="product_image" class="control-label mb-1">Picture of a product</label>
                    <div class="input-group">
                        <input id="product_image" name="product_image" type="file" class="form-control" accept="image/*" data-val="true" data-val-required="Please upload a picture of the product" autocomplete="off">
                        <div class="input-group-addon">
                            <span class="" data-toggle="popover" data-container="body" data-html="true" data-title="Picture of a product" data-content="<div class='text-center one-card'>This is where you can upload a picture of the product.<div></div>" data-trigger="hover"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="product_description" class="control-label mb-1">Description</label>
                    <textarea id="product_description" name="product_description" class="form-control" data-val="true" data-val-required="Please enter a description of the product"></textarea>
                    <span class="help-block" data-valmsg-for="product_description" data-valmsg-replace="true"></span>
                </div>

                <div class="form-group">
                    <label for="product_price" class="control-label mb-1">Price</label>
                    <input id="product_price" name="product_price" type="number" class="form-control" data-val="true" data-val-required="Please enter the price of the product" autocomplete="off">
                    <span class="help-block" data-valmsg-for="product_price" data-valmsg-replace="true"></span>
                </div>

                <div>
                    <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">Save</button>
                </div>
   
                </form>
                
            </div>
        </div> <!-- .card -->
    </div>
</div>

 @endsection

 
