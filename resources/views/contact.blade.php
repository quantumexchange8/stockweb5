@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/images/backgrounds/contact-bckg.jpg")}})">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Details Start-->
<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-details__inner">
                    <div class="contact-details__map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8706329965416!2d101.7191260749711!3d3.1288813968465976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc370206a41739%3A0x5b44dec2a4052249!2sCurrent%20Tech%20Industries%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1706522658424!5m2!1sen!2smy" allowfullscreen="" class="contact-details__map">
                        </iframe>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="contact-details__map" allowfullscreen>

                        </iframe> --}}
                    </div>
                    <div class="contact-details__content">
                        <div class="contact-details__title-box">
                            <h4 class="contact-details__title">Get in Touch</h4>
                            <p class="contact-details__text">
                                We are a global management consulting firm dedicated to assisting businesses with financial solutions.</p>
                        </div>
                        <p class="contact-details__address">VO6-03-08, Signature 2, Lingkaran SV, Sunway Velocity, 55100 Cheras, Federal Territory of Kuala Lumpur</p>
                        <div class="contact-details__contact-info">
                            <div class="contact-details__contact-icon">
                                <span class="icon-phone1"></span>
                            </div>
                            <h4 class="contact-details__contact-number-email">
                                <a href="tel:12463330079" class="contact-details__contact-number">+1- ( 246 )
                                    333 - 0079</a>
                                <a href="mailto:needhelp@company.com"
                                    class="contact-details__contact-email">needhelp@company.com</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Contact with us</span>
            <h2 class="section-title__title">Write a Message</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Full name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="btn-box">
                                    <button type="submit" class="thm-btn comment-form__btn">Send a
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

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