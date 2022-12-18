@extends('auth')

@section('content')
    <!-- BEGIN register -->
    <div class="register">
        <!-- BEGIN register-content -->
        <div class="register-content">
            <h1 class="text-center">Try Ligalis for Free</h1>
            <p class="text-muted text-center">Start your 14 days free trial now.</p>
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" name="first_name" class="form-control  fs-15px" placeholder="e.g John Smith"
                        value="{{ old('first_name') }}" />
                    @error('first_name')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name <span class="text-danger">*</span></label>
                    <input type="text" name="last_name" class="form-control  fs-15px" placeholder="e.g John Smith"
                        value="{{ old('last_name') }}" />
                    @error('last_name')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control  fs-15px" placeholder="username@address.com"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control  fs-15px" value="" />
                    @error('password')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control  fs-15px" value="" />
                </div>
                <div style="margin-bottom:15px;">
                    <label class="form-label">Firm Size</label>
                    <select class="form-select" name="firm_size">
                        <option value="0">Select here</option>
                        @foreach ($firmSizes as $firmSize)
                            <option value="{{ $firmSize->id }}" {{ old('firm_size') == $firmSize->id ? 'selected' : '' }}>
                                {{ $firmSize->min === $firmSize->max ? $firmSize->min : "{$firmSize->min} to {$firmSize->max}" }}
                            </option>
                        @endforeach
                        <option value="-1" {{ old('firmSize') == '-1' ? 'selected' : '' }}>Not a Law firm</option>
                    </select>
                    @error('firm_size')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" name="agreed" type="checkbox" value="1" id="customCheck1"
                            {{ old('agreed') == '1' ? 'checked' : '' }} />
                        <label class="form-check-label fw-500" for="customCheck1">I have read and agree to the <a
                                href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</label>
                    </div>
                    @error('agreed')
                        <p class="mt-2 text-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg fs-15px fw-500 d-block w-100">Sign Up</button>
                </div>
            </form>
            <div class="text-muted text-center">
                Already registered with Ligalis? <a href="{{ route('login.view') }}">Sign In</a>
            </div>
        </div>
        <!-- END register-content -->
    </div>
    <!-- END register --
@endsection
