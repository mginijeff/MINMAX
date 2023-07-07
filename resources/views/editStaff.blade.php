@extends('layout_backend.main')

@section('content')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Staff Member</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="Dashboard_admin">Dashboard</a></li>
                    <li><a href="staff">Staff Members</a></li>
                    <li class="active">Edit Staff Member</li>
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
                            <strong class="card-title">Edit Staff Member</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.super', ['id' => $superAdmin->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $superAdmin->first_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $superAdmin->last_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ $superAdmin->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="Male" {{ $superAdmin->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $superAdmin->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $superAdmin->phone }}" required>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        <button type="button" class="btn btn-secondary" id="cancelButton">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    <!-- JavaScript code to handle cancel button click event -->
<script>
    document.getElementById('cancelButton').addEventListener('click', function() {
        // Redirect to the desired page or perform any other action
        window.location.href = "{{ route('staff') }}";
    });
</script>
@endsection
