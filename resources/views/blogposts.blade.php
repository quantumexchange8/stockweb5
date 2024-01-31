@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/images/backgrounds/blog-bckg.jpg")}})">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Blog</li>
            </ul>
            <h2>Blog Posts</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News One Start-->
<section class="news-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/backgrounds/financial-bckg.jpg")}} alt="financial">
                        <a href="/blogposts-rightsidebar">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="/financial-advice#mergers">Experience in navigating corporations</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 22 Jan, 2024</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/services/service-1.jpg")}} alt="service">
                        <a href="/blogposts-rightsidebar">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">finance</p>
                        <h3 class="news-one__title"><a href="/financial-advice#raising">Oslim Investment: <br>Navigating 2007's Financial Downturn</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                        <h3 class="news-one__title"><a href="/marketing-rules#mutual">Diversified Investments, Maximum Returns</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/services/service-2.jpg")}} alt="service">
                        <a href="/blogposts-rightsidebar">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">marketing</p>
                        <h3 class="news-one__title"><a href="/marketing-rules#stocks">Empowering Clients Worldwide in Stock and Share Trading</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/backgrounds/track-details-bckg.jpg")}} alt="track-details">
                        <a href="/blogposts-rightsidebar">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">track</p>
                        <h3 class="news-one__title"><a href="/track-details#track">Oslim Consultants: Pioneering Robust Returns Since 2015</a></h3>
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-clock"></i> 20 Oct, 2021</a></li>
                            <li><span>/</span></li>
                            <li><a href="/blogposts-rightsidebar"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src={{ asset("assets/images/backgrounds/track-record-bckg.jpg")}} alt="track-record">
                        <a href="/blogposts-rightsidebar">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <p class="news-one__sub-title">track</p>
                        <h3 class="news-one__title"><a href="/track"> Proven Success: Oslim Consultants' Track Record </a></h3>
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
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="blog-pagination">
                    <a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a>
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a> </div>
                <!-- /.blog-pagination -->
            </div><!-- /.col-lg-12 -->
        </div> --}}
    </div>
</section>
<!--News One End-->

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