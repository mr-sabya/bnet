<header>
    <livewire:frontend.theme.header-top />

    <div id="header-top-fixed"></div>
    <div id="sticky-header" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <!-- logo -->
                            <livewire:frontend.theme.logo className="logo" />
                            <!-- logo end -->

                            <!-- menu -->
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <livewire:frontend.theme.menu />
                            </div>
                            <!-- menu end -->
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <!-- mini cart -->
                                    <livewire:frontend.theme.mini-cart />
                                    <!-- mini cart end -->
                                    <li class="header-btn"><a href="{{ route('quote') }}" wire:navigate class="btn transparent-btn">Get a Quote</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fal fa-times"></i></div>
                            <!-- logo -->
                            <livewire:frontend.theme.logo className="nav-logo" />
                            <!-- logo end -->

                            <!-- menu -->
                            <div class="menu-outer">
                                <livewire:frontend.theme.menu />
                            </div>
                            <!-- menu end -->
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>