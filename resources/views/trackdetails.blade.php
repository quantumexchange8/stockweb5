@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/track-details-bckg.jpg)">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>track Details</li>
            </ul>
            <h2>Track Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Case Details Start-->
<section class="case-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="case-details__img">
                    <img src="assets/images/case/ford.jpg" alt="">
                    <div class="case-details__details-box">
                        <ul class="list-unstyled case-details__details">
                            <li>
                                <div class="case-details__details-icon">
                                    <span class="far fa-user-circle"></span>
                                </div>
                                <div class="case-details__details-content">
                                    <span class="case-details__details-sub-title">Name:</span>
                                    <p class="case-details__details-title">Ford Motor</p>
                                </div>
                            </li>
                            <li>
                                <div class="case-details__details-icon">
                                    <span class="far fa-bookmark"></span>
                                </div>
                                <div class="case-details__details-content">
                                    <span class="case-details__details-sub-title">Label:</span>
                                    <p class="case-details__details-title">NYSE: F</p>
                                </div>
                            </li>
                            <li>
                                <div class="case-details__details-icon">
                                    <span class="far fa-clock"></span>
                                </div>
                                <div class="case-details__details-content">
                                    <span class="case-details__details-sub-title">Profit:</span>
                                    <p class="case-details__details-title">69.30%</p>
                                </div>
                            </li>
                            <li>
                                <div class="case-details__details-icon">
                                    <span class="far fa-money-bill-alt"></span>
                                </div>
                                <div class="case-details__details-content">
                                    <span class="case-details__details-sub-title">Bought at:</span>
                                    <p class="case-details__details-title">$12.67</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="case-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div id="dynamicContent" class="case-details__content-left">
                                <h3 id="track" class="case-details__content-title">Track Details</h3>
                                <p class="case-details__content-text-1">Since 2015, Oslim Consultants has established an impressive track record by consistently generating robust returns for our clients through investments in Blue Chip companies, active asset management, property development, and planning gains.</p>
                                <p class="case-details__content-text-2">GPI Consultants has consistently achieved, or is on course to achieve, annual investor returns ranging from 13% to 17% across its Growth Fund series. We collaborate closely with our partners, advisors, and consultants to identify and enhance significant value in a diverse array of opportunities.</p>
                                <p class="case-details__content-text-3">Highlighted below are instances from our trading history, showcasing when we onboarded clients, the holding periods, and the corresponding profit percentages.</p>
                            </div>
                        </div>
                        {{-- <div class="col-xl-4 col-lg-5">
                            <div class="case-details__content-right">
                                <p class="case-details__content-text-4">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.</p>
                                <ul class="list-unstyled case-details__content-points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Is your van a little old and tired.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>When an unknown printer took.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Has survived not only five centuries.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>The leap into electronic typesetting.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-xl-12">
                        <div class="case-details__pagination-box">
                            <ul class="case-details__pagination list-unstyled">
                                <li class="next">
                                    <a href="#" aria-label="Previous"><i class="icon-right-arrow"></i>Prev</a>
                                </li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="previous">
                                    <a href="#1" aria-label="Next">Next<i class="icon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--Case Details End-->

<!--Similar Case Start-->
<section class="simialr-case">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">more works</span>
            <h2 class="section-title__title">Similar Track</h2>
        </div>
        <div class="test-part">
        <div class="row">
            
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Case One Single-->
                    <div class="track__single">
                        <div class="track__img">
                            <img src="assets/images/track/track-1-new.jpg" alt="">
                        </div>
                        <div class="track__content">
                            <h3 class="case-one__title"><a href="#">ON Semiconductor</a></h3>
                            <p class="case-one__tagline">NASDAQ: ON</p>
                        </div>
                        <div class="case-one__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Case One Single-->
                    <div class="track__single">
                        <div class="track__img">
                            <img src="assets/images/track/track-3.png" alt="">
                        </div>
                        <div class="track__content">
                            <h3 class="case-one__title"><a href="#">Gamestop</a></h3>
                            <p class="case-one__tagline">NYSE: GME</p>
                        </div>
                        <div class="case-one__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Case One Single-->
                    <div class="track__single">
                        <div class="track__img">
                            <img src="assets/images/track/track-4.jpg" alt="">
                        </div>
                        <div class="track__content">
                            <h3 class="case-one__title"><a href="#">Moderna</a></h3>
                            <p class="case-one__tagline">NASDAQ: MRNA</p>
                        </div>
                        <div class="case-one__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            
            {{-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Case One Single-->
                <div class="track__single">
                    <div class="track__img">
                        <img src="assets/images/track/track-1-new.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">growth</p>
                        <h3 class="case-one__title"><a href="#">Digital <br> Campaigns</a></h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Case One Single-->
                <div class="track__single">
                    <div class="track__img">
                        <img src="assets/images/track/track-3.png" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">marketing</p>
                        <h3 class="case-one__title"><a href="#">Substantial <br> Business</a></h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Case One Single-->
                <div class="track__single">
                    <div class="track__img">
                        <img src="assets/images/track/track-4.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">briliant</p>
                        <h3 class="case-one__title"><a href="#">Top-Notch <br> Consulting</a></h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="#"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
</section>
<!--Similar Case End-->

<!--Site Footer Start-->
<footer class="site-footer site-footer-three">
    <div class="site-footer__top">
        <div class="site-footer-shape-1" style="background-image: url(assets/images/shapes/site-footer-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">Great Experience for Building Customers & Businesses</p>
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
                        <p class="footer-widget__newsletter-text">Subsrcibe for our upcoming latest articles and resources</p>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <p class="footer-widget__contact-text">60 road, broklyn golden street new york. USA</p>
                        <h4 class="footer-widget__contact-info">
                            <a href="tel:12463330079" class="footer-widget__contact-number">+1- ( 246 ) 333 - 0079</a>
                            <a href="mailto:needhelp@company.com" class="footer-widget__contact-email">needhelp@company.com</a>
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