{{-- Copyright (c) Nextgenerations Malawi --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')

        <div class="bg-default-1 pt-lg-28 pb-13 pb-lg-25">

            <div class="container padding-bottom-3x mb-2 mt-15 p-10">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="forgot mb-10">
                            <h2 data-aos="fade-left" data-aos-duration="800" data-aos-once="true">Forgot your password?</h2>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}" class="card mt-4" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                            @csrf
                            <div class="card-body">
                                <div class="form-group"> <label for="email-for-pass">Enter your email address</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="email-for-pass" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="form-text text-muted">Enter the email address you used during the registration on <a href="{{ url('/') }}">jobfindermw.com</a>. Then we'll email a link to this address.</small> </div>
                            </div>
                            <div class="card-footer"> <button class="btn btn-primary text-uppercase font-size-3" type="submit">{{ __('Send Password Reset Link') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        @include('partials.footer')

    </div>

    @include('scripts.js')

</body>

</html>
