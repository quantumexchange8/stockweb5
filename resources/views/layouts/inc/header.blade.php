<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo">
                    <a href="/"><img src="assets/images/resources/logo-1.png" alt=""></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li><a class ="{{ Request::is('/') ? 'current' : '' }}" href="/">Home</a></li>
                        {{-- <li class="dropdown {{ Request::is('/', 'index-2') ? 'current' : '' }}">
                            <a href="/">Home</a>
                            <ul>
                                <li>
                                    <a href="/">Home One</a>
                                </li>
                                <li><a href="/index-2">Home Three</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown {{ Request::is('financial-advice', 'marketing-rules') ? 'current' : '' }}">
                            <a href="/financial-advice">Services</a>
                            <ul>
                                <li><a href="/financial-advice">Financial Advice</a></li>
                                <li><a href="/marketing-rules">Marketing Rules</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('about-us', 'faq') ? 'current' : '' }}">
                            <a href="/about-us">About</a>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/faq">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('track', 'track-details') ? 'current' : '' }}">
                            <a href="/track-details">Track</a>
                            <ul>
                                <li><a href="/track-details">Track Details</a></li>
                                <li><a href="/track">Track Record</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('blog-posts', 'blogposts-rightsidebar') ? 'current' : '' }}">
                            <a href="/blog-posts">Blog</a>
                            <ul>
                                <li><a href="/blog-posts">Blog Posts</a></li>
                                <li><a href="/blogposts-rightsidebar">Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a class ="{{ Request::is('contact') ? 'current' : '' }}" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">
                <div class="main-menu-wrapper__call">
                    <div class="main-menu-wrapper__call-icon">
                        <span class="icon-phone-call"></span>
                    </div>
                    <div class="main-menu-wrapper__call-number">
                        <p>Need help? Talk to an expert</p>
                        <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                    </div>
                </div>
                {{-- <div class="main-menu-wrapper__search-cat">
                    <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                </div> --}}
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->