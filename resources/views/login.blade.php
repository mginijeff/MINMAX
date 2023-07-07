@extends('layout.mainlayout2') 
 @section('content')

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="col-lg-6">
        <div class="card">
        @if (isset($errorMessage))
        <div class="alert alert-danger">
            {{ $errorMessage }}
        </div>
    @endif
            <div class="card-header">
                <strong>MINMAX LOGIN</strong>
            </div>
            <div class="card-body card-block">
            <form action="{{ route('login.submit') }}" method="POST" class="form-horizontal">
  @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-username" class="form-control-label">Username</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-username" name="hf-username" placeholder="Enter username" class="form-control" required>
                            <span class="help-block">Please enter your username</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class="form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                            <span class="help-block">Please enter your password</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class=" btn-sm" style="background: #0d9824; color:white">
                                <i class="fa fa-dot-circle-o" ></i> Login
                            </button>
                            <p class="mb-0">Do you have an account? <a href="registration" class="btn  btn-sm" style="background: #0d9824; color:white">Register here</a>.</p>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
