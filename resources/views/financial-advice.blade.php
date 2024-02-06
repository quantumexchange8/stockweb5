@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/images/backgrounds/financial-bckg.jpg")}})">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li><a href="/financial-advice">Services</a></li>
                <li><span>/</span></li>
                <li>service Details</li>
            </ul>
            <h2>Financial Advice</h2>
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
                            <li class="current"><a href="/financial-advice">Financial Advice <span class="icon-right-arrow"></span></a></li>
                            <li><a href="/marketing-rules">Marketing Rules <span class="icon-right-arrow"></span></a></li>
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
                        <img src={{ asset("assets/images/services/service-1.jpg")}} alt="service">
                    </div>
                    <div class="service-details__content">
                        <div class="service-details__title-box">
                            <div class="service-details__title-icon">
                                <span class="icon-global"></span>
                            </div>
                            <h3 class="service-details__title">Financial Advice</h3>
                        </div>
                        <p class="service-details__text-1">Oslim Investment provides an extensive range of services, including strategic advice, mergers & acquisitions, capital raising, strategic consulting, and the implementation of financial solutions.</p>
                        <h4 id="mergers" class="service-sub-details__title">Mergers and Acquisitions</h4> {{--New--}}
                        <p class="service-details__text-2">At Oslim Investment, our seasoned consultants possess vast experience in navigating corporations through different stages of the business cycle, 
                            from start-ups to mergers and expansions. 
                            We comprehend the intricacies of mergers and acquisitions and are committed to minimizing risks for all stakeholders. <br>
                            Through our varied financial solutions, we facilitate the complexities of mergers and acquisitions, ensuring a seamless transition. 
                            Our consultants meticulously evaluate assets and resources, delivering comprehensive advice rooted in a profound understanding of balance sheets. 
                            Moreover, we provide valuable insights on share offerings, structuring, restructuring, and other crucial aspects.</p>
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
                    <h4 id="raising" class="service-sub-details__title">Raising Capital</h4>
                    <p class="service-details__text-3">Oslim Investment's steadfast dedication to our clients played a crucial role in our resilience during the devastating 
                        financial downturn of 2007. Leveraging our profound market understanding and capital access, we not only withstood the challenges but also prospered 
                        alongside our clients through strategic expansion and successful takeovers. <br>
                        Thanks to our enduring success, we have established valuable partnerships that empower us to share our wealth of knowledge and experience with our 
                        corporate clients. These collaborations further augment our capacity to provide comprehensive and insightful financial solutions.</p>
                        <h4 class="service-sub-details__title">Further Reading</h4>
                        <div class="service-details__how-help">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__how-help-single">
                                    <div class="service-details__how-help-img">
                                        <img src={{ asset("assets/images/services/financial-merges.jpg")}} alt="shake hands">
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
                                        <img src={{ asset("assets/images/services/rasing-capital.jpg")}} alt="data">
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
        <div class="site-footer-shape-1" style="background-image: url({{ asset("assets/images/shapes/site-footer-shape-1.png")}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="/"><img src={{ asset("assets/images/resources/logo-1.png")}} alt="logo"></a>
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