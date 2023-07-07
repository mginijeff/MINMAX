@extends('layout_backend.main')

@section('content')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>CUSTOMER REGISTERED</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="Dashboard_admin">Dashboard</a></li>
                    <li><a href="customer">customers</a></li>
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
                            <strong class="card-title">Customers</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normalUsers as $normalUser)
                                    <tr>
                                        <td>{{ $normalUser->first_name }} {{ $normalUser->last_name }}</td>
                                        <td>{{ $normalUser->email }}</td>
                                        <td>{{ $normalUser->phone }}</td>
                                        <td>{{ $normalUser->gender }}</td>
                                        <td>
                                            <!-- Edit button -->
                                            <!-- <a href="{{ route('edit.normal', ['id' => $normalUser->id]) }}" class="btn btn-primary">Edit</a> -->
                                            
                                            <!-- Delete button -->
                                            <form action="{{ route('delete.normal', ['id' => $normalUser->id]) }}" method="POST" style="display:inline">
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
