@extends('layouts.master')

@section('content')

{{-- <div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header --> --}}

<!--Main Slider Start-->
<section class="main-slider">
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
                    style="background-image: url({{ asset("assets/images/backgrounds/index-1-bckg.jpg")}});">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Welcome<br>to Oslim <br> Consultants</h2>
                                <a href="/about-us" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset("assets/images/backgrounds/about-us-mission.jpg")}});">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Achieve <br> Financial <br> Goal</h2>
                                <a href="/financial-advice" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset("assets/images/backgrounds/marketing-bckg.jpg")}});">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Worldwide <br> Network <br> Support</h2>
                                <a href="/contact" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
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
</section>
<!--Main Slider End-->

<!--Welcome One Start-->
<section class="welcome-one">
    <div class="welcome-one-shape" style="background-image: url({{ asset("assets/images/shapes/welcome-one-shape.png")}});">
    </div>
    <div class="container">
        <div class="welcome-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">welcome to our agency</span>
                            <h2 class="section-title__title">Receive secure and reliable advice for both your small and large businesses</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__top-right">
                        <div class="welcome-one__counter">
                            <ul class="welcome-one__counter-list list-unstyled">
                                <li class="welcome-one__counter-single wow fadeInUp" data-wow-delay="100ms">
                                    <h3 class="odometer" data-count="962">0</h3>
                                    <p class="welcome-one__counter-text">Happy Customers</p>
                                </li>
                                <li class="welcome-one__counter-single wow fadeInUp" data-wow-delay="200ms">
                                    <h3 class="odometer" data-count="882">0</h3>
                                    <p class="welcome-one__counter-text">Completed Cases</p>
                                </li>
                            </ul>
                        </div>
                        <div class="welcome-one__video-link wow fadeInRight" data-wow-delay="200ms"
                            style="background-image: url({{ asset("assets/images/backgrounds/video-bckg.jpg")}}); background-repeat: no-repeat; background-position-y:30%;">
                            <a href="https://www.youtube.com/watch?v=CU4l_rs50Kk" class="video-popup">
                                <div class="welcome-one__video-icon">
                                    <span class="fas fa-play"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-one__bottom">
            <ul class="list-unstyled welcome-one__feature">
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="100ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title"><a href="/financial-advice">Financial <br>
                                Advice</a></h3>
                        <div class="welcome-one__feature-arrow">
                            <a href="/financial-advice"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-wealth"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="200ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title"><a href="/marketing-rules">Marketing <br>
                                Rules</a></h3>
                        <div class="welcome-one__feature-arrow">
                            <a href="/marketing-rules"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-data-analytics"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="300ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title"><a href="/track">Track <br>
                                Record</a></h3>
                        <div class="welcome-one__feature-arrow">
                            <a href="/track"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-report"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
            </ul>
        </div>
        <div class="welcome-one__find-solutions">
            <p class="welcome-one__find-solutions-text">Consulting & Finance Services Built Specifically for
                your Business. <a href="/contact">Find Your Solution</a></p>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Work Together Start-->
<section class="work-together">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="work-together__left wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="work-together__img-box">
                        <div class="work-together-shape-1"><img
                                src={{ asset("assets/images/shapes/work-together-shape-1.png")}} alt="shape"></div>
                        <div class="work-together__img-1" >
                            <img src={{ asset("assets/images/resources/work-tgt-2.jpg")}} alt="Alexander Mitchell">
                            <div class="work-together__img-2">
                                <img src={{ asset("assets/images/resources/work-tgt-1.jpg")}} alt="Olivia Bennett">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="work-together__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">get to know us</span>
                        <h2 class="section-title__title">Work Together for your Business</h2>
                    </div>
                    <p class="work-together__right-text">We prioritize the well-being of those who contribute to our success. Our continuous efforts to enhance technology, training programs, infrastructure, and initiatives are dedicated to empowering our employees. This empowerment fosters their growth and development, enabling them to craft distinctive solutions for your financial success, consistently exceeding your expectations.</p>
                    <ul class="list-unstyled work-together__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <a href="/financial-advice"><p>Financial Advice</p></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <a href="/marketing-rules"><p>Marketing Rules</p></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <a href="/track"><p>Track Record</p></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <a href="/blog-posts"><p>Blog Post</p></a>
                            </div>
                        </li>
                    </ul>
                    <div class="work-together__person">
                        <div class="work-together__person-img">
                            <img src={{ asset("assets/images/team/team-2-1.jpg")}} style="background-position-x:20%" alt="James Tze">
                        </div>
                        <h2 class="work-together__person-name">James Tze, <br>
                            Chief Executive Officer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Work Together End-->

<!--Case One Start-->
<section class="case-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our services</span>
            <h2 class="section-title__title">Your Success, Our Expertise</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/resources/service-2.jpg")}} alt="shake hands" style="height:450px">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">Financial</p>
                        <h3 class="case-one__title"><a href="/financial-advice">Businesses <br> Growth</a></h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/financial-advice"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/resources/rasing-capital.jpg")}} alt="stock" style="height:450px">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">Marketing</p>
                        <h3 class="case-one__title"><a href="/marketing-advice">Marketing <br> Advice</a></h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/marketing-advice"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Case One Single-->
                <div class="case-one__single">
                    <div class="case-one__img">
                        <img src={{ asset("assets/images/resources/stock.jpg")}} alt="data" style="height:450px">
                    </div>
                    <div class="case-one__content">
                        <p class="case-one__tagline">Track</p>
                        <h3 class="case-one__title"><a href="/track">Track <br> Record</a>
                        </h3>
                    </div>
                    <div class="case-one__arrow">
                        <a href="/track"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Case One End-->

<!--Benefits One Start-->
<section class="benefits-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="benefits-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our approach</span>
                        <h2 class="section-title__title">Innovative Methodologies,<br>Lasting Results</h2>
                    </div>
                    <div class="benefits-one__img-box">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="benefits-one__img-single">
                                    <img src={{ asset("assets/images/resources/index-approach-1.jpg")}} alt="flower">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="benefits-one__img-single">
                                    <img src={{ asset("assets/images/resources/index-approach-2.jpg")}} alt="chart">
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled benefits-one__points">
                        <li>
                            <div class="icon">
                                <span class="icon-verification"></span>
                                <p>Financial</p>
                            </div>
                            <div class="text">
                                <p>Oslim Investment provides an extensive range of services, including strategic advice, mergers & acquisitions, capital raising, strategic consulting, and the implementation of financial solutions.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-help"></span>
                                <p>Marketing</p>
                            </div>
                            <div class="text">
                                <p>Acknowledging market volatility, we invest in carefully researched stocks in collaboration with our trusted partners.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="benefits-one__rihgt">
                    <p class="benefits-one__right-text">Oslim distinguishes itself in the crowded investment landscape with carefully crafted principles that prioritize customer success, setting us apart from the rest.</p>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Is Oslim a registered company?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes, Oslim is a registered company</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What steps are required to join GPI consultants?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Just fill out our online application form and submit the necessary KYC documents. Alternatively, reach out to us, and we'll guide you through the process.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>When can I start investing or trading with GPI consultants?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Once we've assessed your investment needs and obtained your KYC documentation, our specialists will promptly kickstart your journey.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>Can I invest from anywhere in the world?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our network boasts an extraordinary global reach, ensuring limitless possibilities no matter where you are in the world.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>what if i don't know much about the financial markets?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our expert team is dedicated to guiding you every step of the way, ensuring you feel at ease and comprehend all the details related to the investment or trade you are about to undertake.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>Does GPI consultants offer an internship program?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our dedicated team of experts is committed to assisting you throughout the process, ensuring your comfort and comprehension of all the details pertaining to the investment or trade you are about to engage in.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Benefits One End-->

<!--Free Consultation Start-->
<section class="free-consultation">
    <div class="container">
        <div class="free-consultation__inner wow fadeInUp" data-wow-delay="300ms">
            <div class="free-consultation__left">
                <h3 class="free-consultation__content">Get your <span>FREE</span> <br> business consultation
                </h3>
                <div class="free-consultation__icon">
                    <span class="icon-phone-call"></span>
                </div>
            </div>
            <div class="free-consultation__right">
                <h4 class="free-consultation__contact-info">
                    <a href="tel:12463330079" class="free-consultation__contact-number">+1- ( 246 ) 333 -
                        0079</a>
                    <a href="mailto:needhelp@company.com"
                        class="free-consultation__contact-email">needhelp@company.com</a>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--Free Consultation End-->

<!--Our Mission Start-->
<section class="our-mission">
    <div class="our-mission-bg-box">
        <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{ asset("assets/images/backgrounds/about-us-mission.jpg")}});"></div>
    </div>
    <div class="our-mission-shape-1 shapemover2"></div>
    <div class="our-mission-shape-2 shapemover2"></div>
    <div class="our-mission-shape-3 shapemover2"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="our-mission__inner">
                    <h2 class="our-mission__title">Mission is to Protect <br> your Businesses & <br> Much More
                    </h2>
                    <a href="/about-us" class="thm-btn our-mission__btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Mission End-->

<!--Team One Start-->
<section class="team-one">
    <div class="team-one__container">
        <div class="section-title text-center">
            <span class="section-title__tagline">professional people</span>
            <h2 class="section-title__title">Meet Our Experts</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src={{ asset("assets/images/team/team-1.jpg")}} alt="Sarah Albert">
                        <div class="team-one__content">
                            <h3 class="team-one__name">Sarah Albert</h3>
                            <p class="team-one__title">Consultant</p>
                        </div>
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src={{ asset("assets/images/team/team-2.jpg")}} alt="Mike Hardson">
                        <div class="team-one__content">
                            <h3 class="team-one__name">Mike Hardson</h3>
                            <p class="team-one__title">Advisor</p>
                        </div>
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src={{ asset("assets/images/team/team-3.jpg")}} alt="Christine Eve">
                        <div class="team-one__content">
                            <h3 class="team-one__name">Christine Eve</h3>
                            <p class="team-one__title">Manager</p>
                        </div>
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src={{ asset("assets/images/team/team-4.jpg")}} alt="Kevin Martin">
                        <div class="team-one__content">
                            <h3 class="team-one__name">Kevin Martin</h3>
                            <p class="team-one__title">Co Founder</p>
                        </div>
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Team One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-one__carousel owl-the owl-carousel">
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src={{ asset("assets/images/testimonial/testimonial-1.jpg")}} alt="pp1">
                                <div class="testimonial-one__quote">
                                    <img src={{ asset("assets/images/icon/quote-icon.png")}} alt="quote">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__content">
                            <p class="testimonial-one__text">Our strategies integrate your personal situation, global factors, and investment environments for effective and responsive decision-making. We prioritize diversification in portfolios to absorb shocks, continually monitoring and mitigating potential risks.</p>
                            <h4 class="testimonial-one__client-name">Building Investment Balance</h4>
                            <p class="testimonial-one__client-title">Approach-1</p>
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src={{ asset("assets/images/testimonial/testimonial-2.jpg")}} alt="ppl2">
                                <div class="testimonial-one__quote">
                                    <img src={{ asset("assets/images/icon/quote-icon.png")}} alt="quote">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__content">
                            <p class="testimonial-one__text">We emphasize emerging markets to maximize capital value by identifying realizable potential. Our in-depth research and analysis of investment options, economic environments, and market trends mitigate risks, providing clients with high-growth, low-risk investment opportunities.</p>
                            <h4 class="testimonial-one__client-name">Emerging Markets</h4>
                            <p class="testimonial-one__client-title">Approach-2</p>
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src={{ asset("assets/images/testimonial/testimonial-3.jpg")}} alt="ppl3">
                                <div class="testimonial-one__quote">
                                    <img src={{ asset("assets/images/icon/quote-icon.png")}} alt="quote">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__content">
                            <p class="testimonial-one__text">Our industry-leading research, powered by a global information network, precise modeling, and thorough analyses, informs our successful investment strategies. Our skilled team provides clients with the insights needed for informed decision-making.</p>
                            <h4 class="testimonial-one__client-name">In-Depth Research</h4>
                            <p class="testimonial-one__client-title">Approach-3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Trusted One Start-->
<section class="trusted-one">
    <div class="container">
        <div class="trusted-one__inner">
            <div class="trusted-one__left">
                <h3 class="trusted-one__content">Our Approach</h3>
            </div>
            <div class="trusted-one__right">
                <ul class="list-unstyled trusted-one__content-box">
                    <li class="trusted one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="trusted-one__icon">
                            <span class="icon-briefcase"></span>
                        </div>
                        <h3 class="trusted-one__title"><a href="/financial-advice">Action</a></h3>
                        <p class="trusted-one__text">Championing ESG Values in Investment</p>
                    </li>
                    <li class="trusted one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="trusted-one__icon">
                            <span class="icon-bar-chart"></span>
                        </div>
                        <h3 class="trusted-one__title"><a href="/blogposts-rightsidebar">Goals</a></h3>
                        <p class="trusted-one__text">Empowering Financial Dreams Together</p>
                    </li>
                    <li class="trusted one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="trusted-one__icon">
                            <span class="icon-team-leader"></span>
                        </div>
                        <h3 class="trusted-one__title"><a href="/track-details">Collaboration </a></h3>
                        <p class="trusted-one__text">Empowering Clients in Portfolio Decisions</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Trusted One End-->

<!--News One Start-->
<section class="news-one">
    <div class="news-one-shape-1 shapemover2"></div>
    <div class="news-one-shape-2 float-bob-x-2"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">What’s Happening</span>
            <h2 class="section-title__title">Blog Posts</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/services/service-1.jpg")}} alt="finance">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="/blog-posts">Oslim Investment:
                            Navigating 2007's Financial Downturn</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/backgrounds/marketing-bckg.jpg")}} alt="marketing">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">marketing</p>
                        <h3 class="news-one__title"><a href="/blog-posts">Diversified Investments, Maximum Returns</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/services/service-2.jpg")}} alt="marketing">
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">marketing</p>
                        <h3 class="news-one__title"><a href="/blog-posts">Empowering Clients Worldwide in Stock and Share Trading</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News One End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__inner-content">
                        <div class="cta-one-shape-1 float-bob-x"></div>
                        <div class="cta-one-shape-2 float-bob-x-2"></div>
                        <h3 class="cta-one__title">We’re delivering the best <br> customer experience</h3>
                        <a href="/about-us" class="thm-btn cta-one__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<!--Site Footer Start-->
<footer class="site-footer">
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
                        <p class="footer-widget__newsletter-text">
                            Subsrcibe for our upcoming latest articles and
                            resources
                        </p>
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