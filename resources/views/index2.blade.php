@extends('layouts.master')

@section('content')

<!--Main Slider Start-->
<section class="main-slider main-slider-three">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'
                >
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/main-slider-3-bg.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-three-img-1">
                    <img src="assets/images/resources/main-slider-3-img-1.png" alt="">
                </div>
                <div class="main-slider-three-img-2">
                    <img src="assets/images/resources/main-slider-3-img-4.png" alt="">
                </div>
                <div class="main-slider-three-shape-1">
                    <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                </div>
                <div class="main-slider-three-shape-2">
                    <img src="assets/images/shapes/main-slider-three-shape-2.png" alt="">
                </div>
                <div class="main-slider-three__social">
                    <a href="#">Twitter</a>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="main-slider-three__date-time">
                    <p>Mon - Fri <span> 9am - 7pm </span></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="main-slider__content">
                                <h2>finance <span>&</span> <br> consulting <br> business</h2>
                                <a href="/about-us" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/main-slider-3-bg.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-three-img-1">
                    <img src="assets/images/resources/main-slider-3-img-2.png" alt="">
                </div>
                <div class="main-slider-three-img-2">
                    <img src="assets/images/resources/main-slider-3-img-5.png" alt="">
                </div>
                <div class="main-slider-three-shape-1">
                    <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                </div>
                <div class="main-slider-three-shape-2">
                    <img src="assets/images/shapes/main-slider-three-shape-2.png" alt="">
                </div>
                <div class="main-slider-three__social">
                    <a href="#">Twitter</a>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="main-slider-three__date-time">
                    <p>Mon - Fri <span> 9am - 7pm </span></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="main-slider__content">
                                <h2>finance <span>&</span> <br> consulting <br> business</h2>
                                <a href="/about-us" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/main-slider-3-bg.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-three-img-1">
                    <img src="assets/images/resources/main-slider-3-img-3.png" alt="">
                </div>
                <div class="main-slider-three-img-2">
                    <img src="assets/images/resources/main-slider-3-img-6.png" alt="">
                </div>
                <div class="main-slider-three-shape-1">
                    <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                </div>
                <div class="main-slider-three-shape-2">
                    <img src="assets/images/shapes/main-slider-three-shape-2.png" alt="">
                </div>
                <div class="main-slider-three__social">
                    <a href="#">Twitter</a>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="main-slider-three__date-time">
                    <p>Mon - Fri <span> 9am - 7pm </span></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="main-slider__content">
                                <h2>finance <span>&</span> <br> consulting <br> business</h2>
                                <a href="/about-us" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="slider-bottom-box clearfix">
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->

<!--Find Solution Start-->
<section class="find-solution">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="find-solution__inner">
                    <p class="find-solutions__text">Consulting &amp; Finance Services Built Specifically for
                        your Business. <a href="/about-us">Find Your Solution</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Find Solution End-->

<!--Services Two Start-->
<section class="services-two">
    <div class="container">
        <div class="services-two__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Services</span>
                            <h2 class="section-title__title">Services We Offer</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-right">
                        <p class="services-two__top-text">There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injected
                            humour, or randomised.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-two__bottom">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-creative"></span>
                        </div>
                        <h3 class="services-two__title"><a href="consumer-product.html">Consumer <br>
                                Product</a></h3>
                        <p class="services-two__text">Lorem ipsum is are <br> many variations of <br> pass of
                            majority.</p>
                        <div class="services-two__bottom-box">
                            <a href="consumer-product.html" class="services-two__read-more">Read More</a>
                            <a href="consumer-product.html" class="services-two__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-analysis"></span>
                        </div>
                        <h3 class="services-two__title"><a href="audit-marketing.html">Audit <br> Marketing</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are <br> many variations of <br> pass of
                            majority.</p>
                        <div class="services-two__bottom-box">
                            <a href="audit-marketing.html" class="services-two__read-more">Read More</a>
                            <a href="audit-marketing.html" class="services-two__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-business"></span>
                        </div>
                        <h3 class="services-two__title"><a href="banking-advising.html">Banking <br>
                                Advicing</a></h3>
                        <p class="services-two__text">Lorem ipsum is are <br> many variations of <br> pass of
                            majority.</p>
                        <div class="services-two__bottom-box">
                            <a href="banking-advising.html" class="services-two__read-more">Read More</a>
                            <a href="banking-advising.html" class="services-two__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-global"></span>
                        </div>
                        <h3 class="services-two__title"><a href="marketing-rules.html">Marketing <br> Rules</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are <br> many variations of <br> pass of
                            majority.</p>
                        <div class="services-two__bottom-box">
                            <a href="marketing-rules.html" class="services-two__read-more">Read More</a>
                            <a href="marketing-rules.html" class="services-two__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Two End-->

<!--Welcome Three Start-->
<section class="welcome-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="welcome-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">grow your business</span>
                        <h2 class="section-title__title">We’re Changing the Way of Growth</h2>
                    </div>
                    <ul class="list-unstyled welcome-three__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>Our Mission</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>Our Story</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled welcome-three__points-content">
                        <li>
                            <p class="welcome-three__points-text">Lorem ipsum dolor sit amet not <br> is
                                consectetur notted.</p>
                        </li>
                        <li>
                            <p class="welcome-three__points-text">Lorem ipsum dolor sit amet not <br> is
                                consectetur notted.</p>
                        </li>
                    </ul>
                    <p class="welcome-three__text">Tincidunt elit magnis nulla facilisis sagittis maecenas.
                        Sapien nunced amet dolores sit ipsum velit purus aliq massa fringilla leo. There are
                        many variations of passages.</p>
                    <div class="welcome-three__progress">
                        <div class="welcome-three__progress-single">
                            <h4 class="welcome-three__progress-title">Consulting</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="77%">
                                    <div class="count-text">77%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-three__bottom">
                        <a href="about.html" class="thm-btn welcome-three__btn">Discover More</a>
                        <div class="welcome-three__video">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__video-icon"
                                    style="background-image: url(assets/images/resources/welcome-three-video-bg.jpg)">
                                    <span class="fa fa-play"></span>
                                </div>
                            </a>
                            <h5 class="welcome-three__video-text">Watch Video</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome-three__right wow slideInRight" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="welcome-three__img-box">
                        <div class="welcome-three-img-1">
                            <img src="assets/images/resources/welcome-three-img-1.jpg" alt="">
                        </div>
                        <div class="welcome-three__img-2">
                            <img src="assets/images/resources/welcome-three-img-2.jpg" alt="">
                        </div>
                        <div class="welcome-three__experience">
                            <p>30 Years of experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome Three End-->

<!--Case One Start-->
<section class="case-one case-three">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our recent work</span>
            <h2 class="section-title__title">New Case Studies</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/case/case-3-1.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">leadership</p>
                        <h3 class="case-one__title"><a href="case-details.html">Businesses <br> Growth</a>
                        </h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/case/case-3-2.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">Management</p>
                        <h3 class="case-one__title"><a href="case-details.html">Marketing <br> Advice</a>
                        </h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src="assets/images/case/case-3-3.jpg" alt="">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">strategy</p>
                        <h3 class="case-one__title"><a href="case-details.html">Finance <br> Consulting</a>
                        </h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="case-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Case One End-->

<!--Our Mission Two Start-->
<section class="our-mission-two our-mission-three">
    <div class="our-mission-two-bg-box">
        <div class="our-mission-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/our-mission-bg.jpg);"></div>
    </div>
    <div class="our-mission-shape-1 shapemover2"></div>
    <div class="our-mission-shape-2 shapemover2"></div>
    <div class="our-mission-shape-3 shapemover2"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="our-mission-two__left">
                    <h2 class="our-mission-two__title">Mission is to Protect <br> your Businesses & Much More
                    </h2>
                    <a href="about.html" class="thm-btn our-mission-two__btn">Discover More</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="our-mission-two__right">
                    <div class="our-mission-two__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="our-mission-two__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                        <h3 class="our-mission-two__video-text">Watch video</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Mission Two End-->

<!--How We Works Start-->
<section class="how-we-works">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">follow 3 steps</span>
            <h2 class="section-title__title">How We Works</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="list-unstyled how-we-works__list-box">
                    <li class="how-we-works__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="how-we-works__icon-box">
                            <div class="how-we-works__icon">
                                <div class="how-we-works__icon">
                                    <span class="icon-team"></span>
                                    <div class="how-we-works__count"></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="how-we-works__title">Consult with Team</h3>
                        <p class="how-we-works__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                            elit do eiusmod.</p>
                    </li>
                    <li class="how-we-works__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="how-we-works__icon-box">
                            <div class="how-we-works__icon">
                                <span class="icon-checklist"></span>
                                <div class="how-we-works__count"></div>
                            </div>
                        </div>
                        <h3 class="how-we-works__title">Make a Plan</h3>
                        <p class="how-we-works__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                            elit do eiusmod.</p>
                    </li>
                    <li class="how-we-works__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="how-we-works__icon-box">
                            <div class="how-we-works__icon">
                                <span class="icon-outsourcing"></span>
                                <div class="how-we-works__count"></div>
                            </div>
                        </div>
                        <h3 class="how-we-works__title">Enjoy the Success</h3>
                        <p class="how-we-works__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                            elit do eiusmod.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--How We Works End-->

<!--Testimonial Three Start-->
<section class="testimonial-three">
    <div class="testimonial-three-shape-1 float-bob-x-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our testimonials</span>
                        <h2 class="section-title__title">What They’re Saying About Agency</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-three__right">
                    <div class="testimonial-three__carousel owl-theme owl-carousel">
                        <!--Testimonial Three Single-->
                        <div class="testimonial-three__single">
                            <p class="testimonial-three__text">I was impresed by the company services, not lorem
                                ipsum is simply free text of used. Neque porro est qui dolorem ipsum quia.</p>
                            <div class="testimonial-three__client-info">
                                <div class="testimonial-three__client-img">
                                    <img src="assets/images/testimonial/testimonial-3-client-img-1.jpg" alt="">
                                </div>
                                <div class="testimonial-three__client-details">
                                    <h4 class="testimonial-three__client-name">Christine Rose</h4>
                                    <p class="testimonial-three__client-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial-three__quote-icon">
                                <img src="assets/images/icon/testimonial-3-quote-icon.png" alt="">
                            </div>
                        </div>
                        <!--Testimonial Three Single-->
                        <div class="testimonial-three__single">
                            <p class="testimonial-three__text">I was impresed by the company services, not lorem
                                ipsum is simply free text of used. Neque porro est qui dolorem ipsum quia.</p>
                            <div class="testimonial-three__client-info">
                                <div class="testimonial-three__client-img">
                                    <img src="assets/images/testimonial/testimonial-3-client-img-2.jpg" alt="">
                                </div>
                                <div class="testimonial-three__client-details">
                                    <h4 class="testimonial-three__client-name">Mike Hardson</h4>
                                    <p class="testimonial-three__client-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial-three__quote-icon">
                                <img src="assets/images/icon/testimonial-3-quote-icon.png" alt="">
                            </div>
                        </div>
                        <!--Testimonial Three Single-->
                        <div class="testimonial-three__single">
                            <p class="testimonial-three__text">I was impresed by the company services, not lorem
                                ipsum is simply free text of used. Neque porro est qui dolorem ipsum quia.</p>
                            <div class="testimonial-three__client-info">
                                <div class="testimonial-three__client-img">
                                    <img src="assets/images/testimonial/testimonial-3-client-img-1.jpg" alt="">
                                </div>
                                <div class="testimonial-three__client-details">
                                    <h4 class="testimonial-three__client-name">Christine Rose</h4>
                                    <p class="testimonial-three__client-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial-three__quote-icon">
                                <img src="assets/images/icon/testimonial-3-quote-icon.png" alt="">
                            </div>
                        </div>
                        <!--Testimonial Three Single-->
                        <div class="testimonial-three__single">
                            <p class="testimonial-three__text">I was impresed by the company services, not lorem
                                ipsum is simply free text of used. Neque porro est qui dolorem ipsum quia.</p>
                            <div class="testimonial-three__client-info">
                                <div class="testimonial-three__client-img">
                                    <img src="assets/images/testimonial/testimonial-3-client-img-2.jpg" alt="">
                                </div>
                                <div class="testimonial-three__client-details">
                                    <h4 class="testimonial-three__client-name">Mike Hardson</h4>
                                    <p class="testimonial-three__client-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial-three__quote-icon">
                                <img src="assets/images/icon/testimonial-3-quote-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Three End-->

<!--Brand One Start-->
<section class="brand-two">
    <div class="brand-two-shape-2 float-bob-x"></div>
    <div class="container">
        <div class="brand-two__inner">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Contact One Start-->
<section class="contact-one">
    <div class="contact-one-shape" style="background-image: url(assets/images/shapes/contact-one-shape.png);">
    </div>
    <div class="container">
        <div class="contact-one__top">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-one__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">contact with us</span>
                            <h2 class="section-title__title">We are Here to Help You & Your Business</h2>
                        </div>
                        <p class="contact-one__text">Pellentesque ultricies quam dui, id portt tor leo <br>
                            iaculis nec. Phasellus ac neque.</p>
                        <div class="contact-one__timings">
                            <h5 class="contact-one__timings-title">Timings</h5>
                            <p class="contact-one__timings__text">8:00 am - 6:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="contact-one__top-right">
                        <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Full name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-form__input-box">
                                        <input type="email" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-form__input-box contact-form__input-message-box">
                                        <textarea name="message" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="contact-form__input-btn-box">
                                        <button type="submit" class="thm-btn contact-form__btn">send a
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-one__bottom">
            <h2 class="contact-one__bottom-title">Visit Our Office</h2>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Contact One Single-->
                    <div class="contact-one__single">
                        <h3 class="contact-one__title">Austin</h3>
                        <p class="contact-one__text-2">22 Texas West Hills</p>
                        <h4 class="contact-one__contact-info">
                            <a href="mailto:needhelp@company.com"
                                class="contact-one__email">needhelp@company.com</a>
                            <a href="tel:12463330079" class="contact-one__phone">+1- ( 246 ) 333 - 0079</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--Contact One Single-->
                    <div class="contact-one__single">
                        <h3 class="contact-one__title">Boston</h3>
                        <p class="contact-one__text-2">22 Texas West Hills</p>
                        <h4 class="contact-one__contact-info">
                            <a href="mailto:needhelp@company.com"
                                class="contact-one__email">needhelp@company.com</a>
                            <a href="tel:12463330079" class="contact-one__phone">+1- ( 246 ) 333 - 0079</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--Contact One Single-->
                    <div class="contact-one__single">
                        <h3 class="contact-one__title">New York</h3>
                        <p class="contact-one__text-2">22 Texas West Hills</p>
                        <h4 class="contact-one__contact-info">
                            <a href="mailto:needhelp@company.com"
                                class="contact-one__email">needhelp@company.com</a>
                            <a href="tel:12463330079" class="contact-one__phone">+1- ( 246 ) 333 - 0079</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--Contact One Single-->
                    <div class="contact-one__single">
                        <h3 class="contact-one__title">Dubai</h3>
                        <p class="contact-one__text-2">22 Texas West Hills</p>
                        <h4 class="contact-one__contact-info">
                            <a href="mailto:needhelp@company.com"
                                class="contact-one__email">needhelp@company.com</a>
                            <a href="tel:12463330079" class="contact-one__phone">+1- ( 246 ) 333 - 0079</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->

<!--Google Map Two Start-->
<section class="google-map-two">
    <div class="container">
        <div class="google-map-two__inner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__two-map" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!--Google Map Two End-->

<!--News Two Start-->
<section class="news-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">What’s Happening</span>
            <h2 class="section-title__title">News & Articles</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="assets/images/blog/news-1-1.jpg" alt="">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="blog-details.html">Accounting Support During the
                                Exponential Growth</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="assets/images/blog/news-1-2.jpg" alt="">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="blog-details.html">Taking seamless key performance
                                indicators offline </a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="assets/images/blog/news-1-3.jpg" alt="">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="blog-details.html">Competently parallel task fully
                                researched data and</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Two End-->

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
                            <a href="/"><img src="assets/images/resources/logo-1.png" alt=""></a>
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