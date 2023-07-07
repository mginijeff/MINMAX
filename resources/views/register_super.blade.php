@extends('layout_backend.main')
@section('content')

<div style="display: flex; justify-content: center; align-items: center;">
    <div class="card">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="card-header">
            <strong>Staff Registration</strong>
        </div>
        <div class="card-body card-block">
            <div class="container">
                <form action="{{ route('register.super.submit') }}" method="POST" class="form-horizontal">
                    @csrf

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="first_name" class="form-control-label">First Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="first_name" name="first_name" placeholder="Enter first name" class="form-control" value="" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="last_name" class="form-control-label">Last Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="last_name" name="last_name" placeholder="Enter last name" class="form-control" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Male</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label">Phone</label>
                        <input id="phone" name="phone" type="tel" pattern="[0-9]{10}" class="form-control" value="" required>
                        <small class="form-text text-muted">Phone number must be 10 digits starting with 0.</small>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="profile_image" class="control-label">Profile Image</label>
                        <input id="profile_image" name="profile_image" type="file" class="form-control" accept="image/*">
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class="form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="confirm_password" class="form-control-label">Confirm Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" class="form-control" required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      
    </div>
</div>
@endsection
