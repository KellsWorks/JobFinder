{{-- Copyright (c) Nextgenerations Malawi --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')

        <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">

            {{-- <iframe src="{{ asset('docs/about.pdf') }}" frameborder="0"></iframe> --}}
            <embed src="{{ asset('docs/about.pdf') }}" type="application/pdf" width="100%" height="600px" />

        </div>

        @include('partials.footer')

    </div>

    @include('scripts.js')

</body>

</html>
