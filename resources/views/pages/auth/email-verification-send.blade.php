@extends('auth', ['isBackgroundWhite' => true])

@section('content')
    <div class="mx-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('assets/img/thank_you_inbox.jpg') }}" class="img-fluid" alt="" />
                        <h2>Thank you for <br>registering with us.</h2><br>
                        <p>We have sent an email to validate your email address. <br>Check your inbox and click the link in
                            <br>the email to validate your email address.
                        </p>
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="{{ route('dashboard.view') }}" class="btn btn-outline-primary">Into the Application</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
