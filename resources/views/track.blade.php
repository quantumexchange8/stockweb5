@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/images/backgrounds/track-record-bckg.jpg")}})">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Track</li>
            </ul>
            <h2>Track Record</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Track Page Start-->
<section class="cases-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-1-new.jpg")}} alt="track-1">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="/track-details">ON Semiconductor <br> </a></h3>
                        <p class="case-one__tagline">NASDAQ: ON</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/track-details"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    {{-- img href --}}
                    <a href="/track-details">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-2.png")}} alt="track-2">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="/track-details">
                            Ford Motor <br></a></h3>
                        <p class="case-one__tagline">NYSE: F</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/track-details"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-3.png")}} alt="track-3">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="/track-details">Gamestop<br></a></h3>
                        <p class="case-one__tagline">NYSE: GME</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/track-details"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-4.jpg")}} alt="track-4">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Moderna<br></a></h3>
                        <p class="case-one__tagline">NASDAQ: MRNA</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-5.jpg")}} alt="track-5">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Diamondback Energy<br></a></h3>
                        <p class="case-one__tagline">NASDAQ: FANG</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-6.png")}} alt="track-6">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Marathon Oil<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: MRO</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-7.jpg")}} alt="track-7">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Riot Blockchain<br></a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: RIOT</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-8.png")}} alt="track-8">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">NIO<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: NIO</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-9.png")}} alt="track-9">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Walt Disney Co.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: DIS</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-10.jpg")}} alt="track-10">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Zoom Video Communications Inc.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: ZM</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-11.png")}} alt="track-11">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">Novavax<br> </a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: NVAX</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/track/track-12.png")}} alt="track-2">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="#">PayPal Holdings Inc.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: PYPL</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cases Page End-->

<!--Site Footer Start-->
<footer class="site-footer site-footer-three">
    <div class="site-footer__top">
        <div class="site-footer-shape-1"
            style="background-image: url({{ asset("assets/images/shapes/site-footer-shape-1.png")}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="/"><img src={{ asset("assets/images/resources/logo-1.png")}} alt="logo"></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">Great Experience for Building Customers &
                                Businesses</p>
                        </div>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled clearfix">
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/about-us#team">Meet our team</a></li>
                            <li><a href="/financial-advice">Services</a></li>
                            <li><a href="/blog-posts">Blog posts</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                        <ul
                            class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled clearfix">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="/contact">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__newsletter-box clearfix">
                        <h3 class="footer-widget__title">Newsletter</h3>
                        <p class="footer-widget__newsletter-text">Subsrcibe for our upcoming latest articles and
                            resources</p>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><i
                                        class="far fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <p class="footer-widget__contact-text">60 road, broklyn golden street new york. USA</p>
                        <h4 class="footer-widget__contact-info">
                            <a href="tel:12463330079" class="footer-widget__contact-number">+1- ( 246 ) 333 -
                                0079</a>
                            <a href="mailto:needhelp@company.com"
                                class="footer-widget__contact-email">needhelp@company.com</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright <span id="currentYear"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->

@endsection