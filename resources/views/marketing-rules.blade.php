@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/marketing-bckg.jpg)">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li><a href="services.html">Services</a></li>
                <li><span>/</span></li>
                <li>service Details</li>
            </ul>
            <h2>Marketing Rules</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">
                    <div class="service-details__sidebar-service">
                        <ul class="service-details__sidebar-service-list list-unstyled">
                            {{-- <li><a href="consumer-product.html">Consumer Product <span class="icon-right-arrow"></span></a></li>
                            <li><a href="audit-marketing.html">Audit Marketing <span class="icon-right-arrow"></span></a></li>
                            <li><a href="banking-advising.html">Banking Advising <span class="icon-right-arrow"></span></a></li>
                            <li><a href="business-growth.html">Business Growth <span class="icon-right-arrow"></span></a></li> --}}
                            <li><a href="/financial-advice">Financial Advice <span class="icon-right-arrow"></span></a></li>
                            <li class="current"><a href="/marketing-rules">Marketing Rules <span class="icon-right-arrow"></span></a></li>
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-shape-1 float-bob-x-6"></div>
                        <div class="service-details__need-help-shape-2 float-bob-x-7"></div>
                        <h2 class="service-details__need-help-title">Contact with <br> us for any <br> advice</h2>
                        <div class="service-details__need-help-icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="service-details__need-help-contact">
                            <p>Need help? Talk to an expert</p>
                            <a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="assets/images/services/service-2.jpg" alt="">
                    </div>
                    <div class="service-details__content">
                        <div class="service-details__title-box">
                            <div class="service-details__title-icon">
                                <span class="icon-global"></span>
                            </div>
                            <h3 class="service-details__title">Marketing Rules</h3>
                        </div>
                        <p class="service-details__text-1">Acknowledging market volatility, we invest in carefully researched stocks in collaboration with our trusted partners.</p>
                        <h4 class="service-sub-details__title">Mutual Funds</h4> {{--New--}}
                        <p class="service-details__text-2">
                            Participating in cooperative funding schemes can substantially enhance returns in comparison to individual investment plans. <br>
                            We offer a diverse array of mutual funds, thoroughly assessed to measure their comprehensive performance spectrum. <br>
                            Our investments span various industries and markets, reducing risks associated with specific sectors while maximizing returns for our clients. <br></p>
                    </div>
                    {{-- <ul class="service-details__two-icons list-unstyled">
                        <li class="service-details__two-icon-single">
                            <div class="service-details__two-icon">
                                <span class="icon-right-arrow"></span>
                            </div>
                            <p class="service-details__two-icon-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </li>
                        <li class="service-details__two-icon-single">
                            <div class="service-details__two-icon">
                                <span class="icon-right-arrow"></span>
                            </div>
                            <p class="service-details__two-icon-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </li>
                    </ul> --}}
                    <h4 class="service-sub-details__title">Stocks</h4>
                    <p class="service-details__text-3">
                        We empower clients to engage in stock and share trading, offering a range of options from globally recognized corporations. <br>
                        Our experts meticulously analyze company reports and statements, carefully selecting investment opportunities that provide optimal returns with minimal risk. <br>
                        Acknowledging the tax implications of capital gains, we offer tax solutions and guidance to help clients meet their tax obligations related to investment gains. <br></p>
                        <h4 class="service-sub-details__title">Further Reading</h4>
                        <div class="service-details__how-help">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__how-help-single">
                                    <div class="service-details__how-help-img">
                                        <img src="assets/images/services/mutual-funds.jpg" alt="">
                                    </div>
                                    <div class="service-details__how-help-content">
                                        <p class="service-details__how-help-text-1">Our financial planning revolves around the needs of our clients.</p>
                                        <p class="service-details__how-help-details">Our plans inherently account for a variety of events to ensure flexibility, security, and risk management.</p>
                                        {{-- add in link direct to blog pages --}}
                                        <a href="/blog-posts" class="service-details_how-help-link">Discover More<span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service-details__how-help-single">
                                    <div class="service-details__how-help-img">
                                        <img src="assets/images/services/stock.jpg" alt="">
                                    </div>
                                    <div class="service-details__how-help-content">
                                        <p class="service-details__how-help-text-1">We are continually seeking new business partnerships.</p>
                                        <p class="service-details__how-help-details">We offer opportunities across various sectors, spanning from energy and minerals to cutting-edge technologies.</p>
                                        {{-- add in link direct to blog pages --}}
                                        <a href="/blog-posts" class="service-details_how-help-link">Discover More <span class="icon-right-arrow"></span></a>
                                        {{-- <ul class="list-unstyled service-details__how-help-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-arrow-right"></i>
                                                </div>
                                                <div class="text">
                                                    <p>In id diam nec nisi congue tincidunt</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-arrow-right"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Sed tristique lorem non tesque</p>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details__faq">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Customized Advisory Solutions</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Tailored Guidance and Planning for Your Precise Needs</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Personalized Planning Solutions</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Tailored Strategy Aligned with Individual Client Needs</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Explore Our Financial Services with an Advisor</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Engage in a Conversation with Our Advisors about Our Financial Offerings</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Diversification for Enhanced Portfolio Growth</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Expanding Client Portfolios Across Different Industries and Markets</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Future Forecasting: 5-Year P&L Projection</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Anticipating the Future: A Five-Year Profit and Loss Projection</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End-->

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