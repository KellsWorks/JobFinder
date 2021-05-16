<header class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
    <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">

            <div class="brand-logo">
                <a href="{{ url('/') }}">
                    <h3>
                        <span class="text-green">JOB</span> FINDER
                    </h3>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mobile-menu">
                <div class="navbar-nav-wrapper">
                    <ul class="navbar-nav main-menu">
                        <li class="nav-item active">
                            <a class="nav-link" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('jobs') }}" class="nav-link">JOBS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                    </ul>
                </div>
                <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
                <i class="gr-cross-icon"></i>
                </button>
            </div>
            <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
                Log in
                </a>
                <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
                Sign up
                </a>
            </div>

            <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger hamburger--squeeze js-hamburger">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
                </span>
            </button>

        </nav>
    </div>
</header>
