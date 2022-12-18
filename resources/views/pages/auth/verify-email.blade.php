@extends('auth', ['isBackgroundWhite' => true])

@section('content')
    <div class="mx-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @if (session()->has('message'))
                        <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
                    @endif
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('assets/img/thank_you_inbox.jpg') }}" class="img-fluid" alt="" />
                        {{-- <h2>Thank you for <br>registering with us.</h2><br> --}}
                        <p>We have sent an email to validate your email address. <br>Check your inbox and click the link in
                            <br>If you didn't get mail click below to resend verfication link.
                        </p>
                    </div>

                    <div class="col-md-12 text-center">
                        <form action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-primary">Resend Verification Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
