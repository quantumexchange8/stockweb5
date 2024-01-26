@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/about-us-bckg.jpg')}})">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>about</li>
            </ul>
            <h2>About us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Work Together Two Start-->
<section class="work-together-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="work-together-two__left wow slideInLeft" data-wow-delay="100ms"
                data-wow-duration="2500ms">
                    <div class="work-together-two__img">
                        <img src="assets/images/resources/about-us-building.jpg" alt="building">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="work-together-tow__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">get to know us</span>
                        <h2 class="section-title__title">Work Together for your Business</h2>
                    </div>
                    <div class="work-together-tow__content">
                        <div class="work-together-tow__icon">
                            <span class="icon-recruit"></span>
                        </div>
                        <h3 class="work-together-tow__text">At Oslim Investment, we recognize the significance of planning for success. That's why we carefully strategize to secure favorable outcomes for both our clients and ourselves.</h3>
                    </div>
                    <p class="work-together-tow__text-2">We tailor our financial planning to suit our clients' individual needs, taking into account their current financial circumstances and the goals they aspire to achieve.</p>
                    <a href="/about-us" class="thm-btn work-together-tow__btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Work Together Two End-->

<!--Free Consultation Start-->
<section class="free-consultation">
    <div class="container">
        <div class="free-consultation__inner wow fadeInUp" data-wow-delay="300ms">
            <div class="free-consultation__left">
                <h3 class="free-consultation__content">Get your <span>FREE</span> <br> business consultation</h3>
                <div class="free-consultation__icon">
                    <span class="icon-phone-call"></span>
                </div>
            </div>
            <div class="free-consultation__right">
                <h4 class="free-consultation__contact-info">
                    <a href="tel:12463330079" class="free-consultation__contact-number">+1- ( 246 ) 333 - 0079</a>
                    <a href="mailto:needhelp@company.com" class="free-consultation__contact-email">needhelp@company.com</a>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--Free Consultation End-->

<!--Quality Work Start-->
<section class="quality-work">
    <div class="quality-work-shape-1 float-bob-x-2"></div>
    <div class="quality-work-shape-2 float-bob-x-2"></div>
     <div class="container">
         <div class="row">
             <div class="col-xl-7 col-lg-7">
                 <div class="quality-work__left">
                     <div class="section-title text-left">
                         <span class="section-title__tagline">meet our agency</span>
                         <h2 class="section-title__title">Work that Meet <br> your Expectations</h2>
                     </div>
                     <div class="quality-work__tab-box tabs-box">
                         <ul class="tab-buttons clearfix list-unstyled">
                             <li data-tab="#solutions" class="tab-btn active-btn"><span>new solutions</span></li>
                             <li data-tab="#work" class="tab-btn"><span>smart work</span></li>
                         </ul>
                         <div class="tabs-content">
                             <!--tab-->
                             <div class="tab active-tab" id="solutions">
                                 <div class="tab-content__inner">
                                     <div class="tab-content__img">
                                         <img src="{{ asset('assets/images/resources/about-us-woman.jpg')}}" alt="">
                                     </div>
                                     <div class="tab-content__contnet">
                                         <h4 class="tab-content__title">We give our clients access to commodities in these areas:</h4>
                                         <p class="tab-content__text">
                                            Natural resources<br>
                                            Agriculture and livestock<br>
                                            Precious and non-precious metals<br>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <!--tab-->
                             <div class="tab " id="work">
                                 <div class="tab-content__inner">
                                     <div class="tab-content__img">
                                         <img src="assets/images/resources/tab-content-img-1.jpg" alt="">
                                     </div>
                                     <div class="tab-content__contnet">
                                         <h4 class="tab-content__title">Pellentesque pharetra ornare dui</h4>
                                         <p class="tab-content__text">There are many variations of pas of available but the majority have suffered alteration in some form, or words which don look.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-5 col-lg-5">
                 <div class="quality-work__right">
                     <ul class="quality-work__points list-unstyled">
                         <li>
                             <div class="icon">
                                 <span class="icon-checking"></span>
                             </div>
                             <div class="text">
                                 <h4>GUIDED BY OUR PRINCIPLES</h4>
                                 <p>
                                    The sustainability of a long-term relationship relies on open and honest communication that flows in both directions.</p>
                             </div>
                         </li>
                         <li>
                             <div class="icon">
                                 <span class="icon-conversation"></span>
                             </div>
                             <div class="text">
                                 <h4>INVOLVEMENT IN THE COMMUNITY</h4>
                                 <p>Our commitment extends beyond the corporate sphere; our employees also contribute their initiative, skills, and personal funds to meaningful causes during their own time.</p>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--Quality Work End-->

 <!--Our Mission Two Start-->
<section class="our-mission-two our-mission-three">
    <div class="our-mission-two-bg-box">
        <div class="our-mission-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/about-us-mission.jpg);"></div>
    </div>
    <div class="our-mission-shape-1 shapemover2"></div>
    <div class="our-mission-shape-2 shapemover2"></div>
    <div class="our-mission-shape-3 shapemover2"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="our-mission-two__left">
                    <h2 class="our-mission-two__title">Mission is to Protect <br> your Businesses &  Much More</h2>
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
                        <img src="assets/images/team/team-1.jpg" alt="">
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
                        <img src="assets/images/team/team-2.jpg" alt="">
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
                        <img src="assets/images/team/team-3.jpg" alt="">
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
                        <img src="assets/images/team/team-4.jpg" alt="">
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
<section class="testimonial-one testimonial-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-one__carousel owl-the owl-carousel">
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-1.jpg" alt="">
                                <div class="testimonial-one__quote">
                                    <img src="assets/images/icon/quote-icon.png" alt="">
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
                                <img src="assets/images/testimonial/testimonial-2.jpg" alt="">
                                <div class="testimonial-one__quote">
                                    <img src="assets/images/icon/quote-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__content">
                            <p class="testimonial-one__text">
                                We emphasize emerging markets to maximize capital value by identifying realizable potential. Our in-depth research and analysis of investment options, economic environments, and market trends mitigate risks, providing clients with high-growth, low-risk investment opportunities.</p>
                            <h4 class="testimonial-one__client-name">Emerging Markets</h4>
                            <p class="testimonial-one__client-title">Approach-2</p>
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-3.jpg" alt="">
                                <div class="testimonial-one__quote">
                                    <img src="assets/images/icon/quote-icon.png" alt="">
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

{{-- <!--Brand One Start-->
<section class="brand-one">
    <div class="container">
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
</section>
<!--Brand One End--> --}}

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
                        <a href="about.html" class="thm-btn cta-one__btn">Discover More</a>
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
                        <p class="site-footer__bottom-text">© Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->

@endsection