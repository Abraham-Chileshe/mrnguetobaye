@extends('layouts.auth')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #f8f9fa;">
    <div class="col-md-5 col-lg-4">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-white text-center py-4">
                <h3 class="font-weight-bold mb-0 text-primary">Admin Login</h3>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-muted">Email Address</label>
                        <input type="email" name="email" class="form-control form-control-lg" required autofocus placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-muted">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" required placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg theme-button font-weight-bold">Login</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul class="mb-0 pl-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
