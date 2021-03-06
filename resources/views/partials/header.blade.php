<header class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
    <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">

            <div class="brand-logo">
                <a href="{{ route('home') }}">
                    <h3>
                        <span class="text-green">
                            {{ __('messages.job') }}
                        </span>
                            {{ __('messages.finder') }}
                    </h3>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mobile-menu">
                <div class="navbar-nav-wrapper">
                    <ul class="navbar-nav main-menu">

                        <li @if (Request::path() == "/" || Request::path() == "profile")
                                class="active nav-item"
                            @else
                                class="nav-item"
                            @endif >
                            <a href={{ url('/') }} class="nav-link" aria-expanded="false">
                                {{ __('messages.home') }}
                            </a>
                        </li>
                        <li @if (Request::path() == "jobs" || Request::path() == "explore-by-category")
                                class="active nav-item"
                            @else
                                class="nav-item"
                            @endif>
                            <a href="{{ route('jobs') }}" class="nav-link">
                                {{ __('messages.jobs') }}
                            </a>
                        </li>

                        @auth

                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                        </li>

                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                        @else

                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="#footer">Log in</a>
                        </li>

                        @endauth

                        <li @if (Request::path() == "support")
                            class="active nav-item"
                        @else
                            class="nav-item"
                        @endif >
                            <a class="nav-link" href="{{ route('support') }}">
                                {{ __('messages.support') }}
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
                <i class="gr-cross-icon"></i>
                </button>
            </div>
            <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                @if(Route::has('login'))
                <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                @auth

                @else
                <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
                    {{ __('messages.login') }}
                </a>
                @if (Route::has('register'))
                <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
                    {{ __('messages.register') }}
                </a>
                @endif
            @endauth
            </div>
            @endif
            </div>

            <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger hamburger--squeeze js-hamburger">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
            </button>

            @auth
                <div class=" ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">
                <div class="dropdown show-gr-dropdown">
                    <a href="#" role="button" class="text-gray px-3 ml-7 font-size-7 notification-block flex-y-center position-relative" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="notifications-outline" size="large"></ion-icon>
                    <span class="font-size-3 count font-weight-semibold text-white bg-red circle-24 border border-width-3 border border-white">{{ $notifications->count() }}</span>
                    </a>
                    <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-800 bg-default" aria-labelledby="dropdownMenuLink">
                        <span class="dropdown-item dropdown-header"><span class="badge badge-red">{{ $notifications->count() }}</span> Notifications </span>
                        <div class="dropdown-divider"></div>

                        @forelse ($notifications as $notification)
                        <a href="#" class="dropdown-item">
                            <div class="row">
                              <span class="circle-40 bg-green  text-center">
                                  <i class="text-white fa fa-bell"></i>
                              </span> <span class="text-center mt-2 ml-3">{{ $notification->title }}</span>
                            </div>
                          </a>
                        @empty
                        <p class="mr-3 ml-3 font-weight-bold text-red font-size-3">
                            You have no notifications
                        </p>
                        @endforelse

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('profile') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
                      </div>
                </div>
                <div class="nav-item">
                    <div class="dropdown show-gr-dropdown py-5">
                        <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="circle-40">
                                @foreach ($profiles as $profile)
                                    <img class="circle-40 status-like img-fluid" src="{{ asset('storage/profiles/'.$profile->avatar) }}" alt="user-avatar">
                                @endforeach
                            </div>
                        </a>
                        <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#">Settings </a>
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase border-b" href="{{ route('profile') }}">Profile</a>
                            <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase text-center" href="#"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="mr-2 fa fa-power-off"></i> Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
            <div class="nav-item dropdown ml-3 d-none d-lg-block">
                <a class="nav-link text-gray dropdown-toggle" href="#" id="navBarDropdownLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 flag-icon flag-icon-{{ Config::get('language')[App::getLocale()]['flag-icon'] }}"></span>{{ Config::get('language')[App::getLocale()]['display'] }}
                </a>
                    <div class="dropdown-menu" aria-labelledby="navBarDropdownLink">
                        @foreach (Config::get('language') as $lang => $language)
                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{ $language['flag-icon'] }} mr-2"></span>{{ $language['display'] }}
                        </a>
                        @endforeach
                    </div>

        </nav>
    </div>
</header>
