@extends('layout_backend.main')

@section('content')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>STAFF  REGISTERED</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="Dashboard_admin">Dashboard</a></li>
                    <li><a href="staff">Staff Members</a></li>
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
                            <strong class="card-title">Registered Staff</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Staff Name</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($superAdmins as $superAdmin)
        <tr>
            <td>{{ $superAdmin->first_name }} {{ $superAdmin->last_name }}</td>
            <td>
                @if($superAdmin->profile_image)
                    <img src="{{ asset('storage/' . $superAdmin->profile_image) }}" alt="Profile Image" height="50" width="50" class="img-fluid">
                   
                    @else
                    No Image
                @endif
            </td>
            <td>{{ $superAdmin->email }}</td>
            <td>{{ $superAdmin->phone }}</td>
            <td>{{ $superAdmin->gender }}</td>
            <td>
                <!-- Add Edit and Delete buttons here -->
                <a href="{{ route('edit.super', ['id' => $superAdmin->id]) }}" class="btn btn-primary">Edit</a>
    <!-- Delete button -->
    <form action="{{ route('delete.super', ['id' => $superAdmin->id]) }}" method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
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
