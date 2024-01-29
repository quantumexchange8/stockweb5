@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/track-record-bckg.jpg)">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
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
                        <img src="assets/images/track/track-1-new.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">ON Semiconductor <br> </a></h3>
                        <p class="case-one__tagline">NASDAQ: ON</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    {{-- img href --}}
                    <a href="/track-details">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-2.png" alt="">
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
                        <img src="assets/images/track/track-3.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Gamestop<br></a></h3>
                        <p class="case-one__tagline">NYSE: GME</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-4.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Moderna<br></a></h3>
                        <p class="case-one__tagline">NASDAQ: MRNA</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-5.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Diamondback Energy<br></a></h3>
                        <p class="case-one__tagline">NASDAQ: FANG</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-6.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Marathon Oil<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: MRO</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-7.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Riot Blockchain<br></a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: RIOT</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-8.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">NIO<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: NIO</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-9.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Walt Disney Co.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: DIS</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-10.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Zoom Video Communications Inc.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: ZM</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-11.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">Novavax<br> </a>
                        </h3>
                        <p class="case-one__tagline">NASDAQ: NVAX</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/track/track-12.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <h3 class="case-one__title"><a href="case-details.html">PayPal Holdings Inc.<br> </a>
                        </h3>
                        <p class="case-one__tagline">NYSE: PYPL</p>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
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
            style="background-image: url(assets/images/shapes/site-footer-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
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
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Meet our team</a></li>
                            <li><a href="cases.html">Case stories</a></li>
                            <li><a href="blog.html">Latest news</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <ul
                            class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled clearfix">
                            <li><a href="about.html">Support</a></li>
                            <li><a href="about.html">Terms of use</a></li>
                            <li><a href="about.html">Privacy policy</a></li>
                            <li><a href="about.html">Help</a></li>
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