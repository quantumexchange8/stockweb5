@extends('layouts.master')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/blog-side-bckg.jpg)">
    </div>
    <div class="page-header-shape-1 float-bob-x-6"></div>
    <div class="page-header-shape-2 float-bob-x-7"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Blog Sidebar</li>
            </ul>
            <h2>Blog Sidebar</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Sidebar Start-->
<section class="news-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-sidebar__left">
                    <div class="news-sidebar__content">
                        <!--Blog Sidebar Single-->
                        <div class="news-sidebar__single">
                            <div class="news-sidebar__img">
                                <img src="assets/images/backgrounds/financial-bckg.jpg" alt="">
                            </div>
                            <div class="news-sidebar__content-box">
                                <p class="news-sidebar__sub-title">finance</p>
                                <ul class="list-unstyled news-sidebar__meta">
                                    <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct,
                                            2021</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-sidebar__title"><a href="blog-details.html">Experience in navigating corporations</a></h3>
                                <p class="news-sidebar__text">We comprehend the intricacies of mergers and acquisitions and are committed to minimizing risks for all stakeholders.</p>
                                <div class="news-sidebar__bottom">
                                    <a href="blog-details.html" class="news-sidebar__arrow"><span
                                            class="icon-right-arrow"></span></a>
                                    <a href="/financial-advice#mergers" class="news-sidebar__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--Blog Sidebar Single-->
                        <div class="news-sidebar__single">
                            <div class="news-sidebar__img">
                                <img src="assets/images/services/service-1.jpg" alt="">
                            </div>
                            <div class="news-sidebar__content-box">
                                <p class="news-sidebar__sub-title">finance</p>
                                <ul class="list-unstyled news-sidebar__meta">
                                    <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct,
                                            2021</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-sidebar__title"><a href="/financial-advice#raising">Oslim Investment: Navigating 2007's Financial Downturn</a></h3>
                                <p class="news-sidebar__text">We have established valuable partnerships that empower us to share our wealth of knowledge and experience with our corporate clients. </p>
                                <div class="news-sidebar__bottom">
                                    <a href="blog-details.html" class="news-sidebar__arrow"><span
                                            class="icon-right-arrow"></span></a>
                                    <a href="blog-details.html" class="news-sidebar__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--Blog Sidebar Single-->
                        <div class="news-sidebar__single">
                            <div class="news-sidebar__img">
                                <img src="assets/images/backgrounds/marketing-bckg.jpg" alt="">
                            </div>
                            <div class="news-sidebar__content-box">
                                <p class="news-sidebar__sub-title">marketing</p>
                                <ul class="list-unstyled news-sidebar__meta">
                                    <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct,
                                            2021</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-sidebar__title"><a href="blog-details.html">Diversified Investments, Maximum Returns</a></h3>
                                <p class="news-sidebar__text">We offer a diverse array of mutual funds, thoroughly assessed to measure their comprehensive performance spectrum.</p>
                                <div class="news-sidebar__bottom">
                                    <a href="blog-details.html" class="news-sidebar__arrow"><span
                                            class="icon-right-arrow"></span></a>
                                    <a href="/marketing-rules#mutual" class="news-sidebar__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--Blog Sidebar Single-->
                        <div class="news-sidebar__single">
                            <div class="news-sidebar__img">
                                <img src="assets/images/services/service-2.jpg" alt="">
                            </div>
                            <div class="news-sidebar__content-box">
                                <p class="news-sidebar__sub-title">marketing</p>
                                <ul class="list-unstyled news-sidebar__meta">
                                    <li><a href="blog-details.html"><i class="far fa-clock"></i> 20 Oct,
                                            2021</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-sidebar__title"><a href="blog-details.html">Empowering Clients Worldwide in Stock and Share Trading</a></h3>
                                <p class="news-sidebar__text">We empower clients to engage in stock and share trading, offering a range of options from globally recognized corporations.</p>
                                <div class="news-sidebar__bottom">
                                    <a href="blog-details.html" class="news-sidebar__arrow"><span
                                            class="icon-right-arrow"></span></a>
                                    <a href="/marketing-rules#stocks" class="news-sidebar__read-more">Read More</a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-pagination">
                                    <a class="prev page-numbers" href="/blogposts-rightsidebar"><i class="fa fa-angle-left"></i></a>
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!-- /.blog-pagination -->
                            </div><!-- /.col-lg-12 -->
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    {{-- <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div> --}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/backgrounds/financial-bckg.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i>20
                                            Oct, 2021</span>
                                        <a href="blog-details.html">Experience in navigating corporations</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img style="background: url(assets/images/backgrounds/marketing-bckg.jpg) 50% 50% no-repeat" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i>20
                                            Oct, 2021</span>
                                        <a href="blog-details.html">Diversified Investments, Maximum Returns</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img style="background: url(assets/images/backgrounds/track-record-bckg.jpg) 50% 50% no-repeat"  alt="">
                                    {{-- src="assets/images/backgrounds/track-record-bckg.jpg" --}}
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i>20
                                            Oct, 2021</span>
                                        <a href="blog-details.html">Proven Success: Oslim Consultants' Track Record</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.html">Finance <span
                                        class="fa fa-angle-right"></span></a></li>
                            <li class="active"><a href="blog-details.html">Marketing <span
                                        class="fa fa-angle-right"></span></a></li>
                            {{-- <li><a href="blog-details.html">Technology <span
                                        class="fa fa-angle-right"></span></a></li>
                            <li><a href="blog-details.html">Business & Finance <span
                                        class="fa fa-angle-right"></span></a></li>
                            <li><a href="blog-details.html">Bank Cryptcy <span
                                        class="fa fa-angle-right"></span></a></li> --}}
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Finance</a>
                            <a href="#">Marketing</a>
                            <a href="#">Stock</a>
                            <a href="#">Track Record</a>
                            <a href="#">Mutual Funds</a>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>John Doe on Template:</p>
                                    <h5>Comments</h5>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>John Doe on Template:</p>
                                    <h5>Comments</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Sidebar End-->

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