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

        <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">

        <div class="container contact-form">

            <div class="contact-image">
                <img src="{{ asset('icon.png') }}" class="img-fluid" height="200" width="200" alt="job-finder-icon"  data-aos="fade-right" data-aos-duration="800" data-aos-once="true"/>
            </div>

            @if (session('status'))
            <div class="alert alert-info" id="session-alert">
                {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('support-message') }}"  data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                @csrf

                <h3 class="mt-2 mb-2">Drop us a message</h3>

               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" required name="name" class="form-control" placeholder="Your name" value="" />
                        </div>

                        <div class="form-group">
                            <input type="text" required name="email_address" @error('email_address') is-invalid @enderror class="form-control" placeholder="Your email address" value="" />

                            @error('email_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" required name="phone_number" class="form-control" placeholder="Your phone number" value="" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><span class="mr-2 ml-2 mt-1"><ion-icon name="send-outline"></ion-icon></span> SEND MESSAGE </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your message" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        </div>

        @include('partials.footer')

    </div>

    @include('scripts.js')

</body>

</html>
