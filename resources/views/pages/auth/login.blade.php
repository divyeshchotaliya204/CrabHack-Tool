@extends('auth')

@section('content')
    <!-- BEGIN login -->
    <div class="login">
        <!-- BEGIN login-content -->
        <div class="login-content">
            <h1 class="text-center">Sign In</h1>
            <div class="text-muted text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="text" name="email" class="form-control form-control-lg fs-15px"
                        value="{{ old('email') }}" placeholder="username@address.com" />
                    @error('email')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex">
                        <label class="form-label">Password</label>
                        <a href="#" class="ms-auto text-muted">Forgot password?</a>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg fs-15px" value=""
                        placeholder="Enter your password" />
                </div>
                <div class="mb-3">
                    <div>
                        <input class="form-check-input" type="checkbox"name="remember_me" value="1" />
                        <label class="form-check-label fw-500">Remember me</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
            </form>
            <div class="text-center text-muted">
                Don't have an account yet? <a href="{{ route('register.view') }}">Sign up</a>.
            </div>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login -->
@endsection
