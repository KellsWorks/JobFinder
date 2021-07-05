{{-- Blade imports --}}

{{-- Sign in Modal dialog --}}

<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><ion-icon name="close-outline"></ion-icon></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                        <div class="pb-9">
                            <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                Welcome Back
                            </h3>
                            <p class="mb-0 font-size-4 text-white">Log in to continue your account and explore new jobs.</p>
                            {{-- <img class="mt-4" height="250" src="{{ asset('img/no-companies.png') }}" alt=""> --}}
                        </div>
                        <div class="border-top border-default-color-2 mt-auto">
                            <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                                <div class="pt-5 px-9">
                                    <h3 class="font-size-7 text-orange">
                                        <span class="counter">295</span>+
                                    </h3>
                                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs posted today</p>
                                </div>
                                <div class="pt-5 px-9">
                                    <h3 class="font-size-7 text-orange">
                                        <span class="counter">20</span>+
                                    </h3>
                                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies and businesses
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                        <h3 class="text-center"><span class="text-green">JOB</span> FINDER</h3>
                        <div class="or-devider mt-4 mb-4 pb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                <input type="email" placeholder="Enter your email address" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                <div class="position-relative">
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Enter password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">

                                <label for="remember" class="gr-check-input d-flex  mr-3">
                                <input class="d-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkbox mr-5"></span>
                                <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">{{ __('Remember Me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="font-size-3 text-dodger line-height-reset">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="javascipt:" class="text-primary" data-toggle="modal" data-target="#signup">Create a free account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End of sign in Modal dialog --}}

{{-- Sign up Modal dialog  --}}

<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><ion-icon name="close-outline"></ion-icon></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                        <div class="pb-9">
                            <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                Create a free account today
                            </h3>
                            <p class="mb-0 font-size-4 text-white">Create your account to continue and explore new jobs.</p>
                            </div>
                        <div class="border-top border-default-color-2 mt-auto">
                            <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                                <div class="pt-5 px-9">
                                    <h3 class="font-size-7 text-orange">
                                        <span class="counter">
                                            295
                                        </span>+
                                    </h3>
                                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs posted today</p>
                                </div>
                                <div class="pt-5 px-9">
                                    <h3 class="font-size-7 text-orange">
                                        <span class="counter">
                                            14
                                        </span>+
                                    </h3>
                                    <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New business, companies and firms
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                        <h3 class="text-center"><span class="text-green">JOB</span> FINDER</h3>
                        <div class="or-devider pb-7">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Username</label>
                                <input input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                <div class="position-relative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                                <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                                <input class="d-none" type="checkbox" id="terms-check2">
                                <span class="checkbox mr-5"></span>
                                <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="{{ route('terms-and-conditions-privacy-policy') }}" class="text-primary">Terms & Conditions</a></span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="font-size-3 text-dodger line-height-reset">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                            <div class="form-group mb-8">
                                <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color">Already have an account? <a href="javascipt:" class="text-primary" data-toggle="modal" data-target="#login">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End of sign up Modal dialog --}}
