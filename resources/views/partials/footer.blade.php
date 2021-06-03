<footer class="footer bg-ebony-clay dark-mode-texts" id="footer">
    <div class="container">

        @auth
        @else
        <div class="pt-11 pt-lg-20 pb-13 pb-lg-20 border-bottom border-width-1 border-default-color-2">
            <div class="row justify-content-center ">
                <div class="col-xl-7 col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">

                    <div class="pb-xl-0 pb-9 text-xl-left text-center">
                        <h2 class="text-white font-size-8 mb-4">Most comprehensive job portal in Malawi</h2>
                        <p class="text-hit-gray font-size-5 mb-0">Find 100+ job posts across Malawi everyday</p>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">

                    <div class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                        <a class="btn btn-outline-gallery btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#login">Log in</a>
                        <a class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#signup">Register</a>
                    </div>

                </div>
            </div>
        </div>
        @endauth

    </div>
    <div class="container  pt-12 pt-lg-19 pb-5 pb-lg-19">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">

                <h3><span class="text-green">JOB</span> FINDER</h3>

                <div class="mb-11">
                    <p>Malawi's #1 trusted job portal</p>
                    <div class="footer-widget">
                        <h4 class="widget-title">Download Apps</h4>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <ion-icon name="logo-google-playstore"></ion-icon>
                                </div>
                                <div class="os-app-caps">
                                    Google Play
                                    <span>Get It Now</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <ion-icon name="logo-apple"></ion-icon>
                                </div>
                                <div class="os-app-caps">
                                    App Store
                                    <span>Now it Available</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="social-icons">
                    <ul class="pl-0 list-unstyled d-flex align-items-end ">
                        <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget2 mb-md-0 mb-13">

                            <p class="widget-title font-size-6 font-weight-bold text-gray mb-md-8 mb-7">Company</p>

                            <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">About us</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="{{ route('support') }}">Contact us</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">Careers</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#newsletters">Newsletters</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget3 mb-sm-0 mb-13">

                            <p class="widget-title font-size-6 font-weight-bold  text-gray mb-md-8 mb-7">Products</p>

                            <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Features </a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Pricing</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">News</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Help desk</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Support</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget4 mb-sm-0 mb-13">

                            <p class="widget-title font-size-6 font-weight-bold  text-gray mb-md-8 mb-7">Services</p>

                            <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">CV Writing</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">Application Letters</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">Research Development</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="#">Business Plan</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget4">

                            <p class="widget-title font-size-6 font-weight-bold  text-gray mb-md-8 mb-7">Legal</p>

                            <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="{{ route('terms-and-conditions-privacy-policy') }}">Privacy Policy</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="{{ route('terms-and-conditions-privacy-policy') }}">Terms & Conditions</a></li>
                                <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="{{ route('terms-and-conditions-privacy-policy') }}">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
