<section class="banner-area banner-bg" data-background="{{ getFileUrl($home->banner_image) }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="banner-content">
                    <h2 class="title wow fadeInUp" data-wow-delay=".2s">{{ $home->banner_heading }}</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">{{ $home->banner_text }}</p>
                    <div class="banner-price wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="price">৳{{ $home->banner_package_price }}<sub>/Month</sub></h3>
                    </div>
                    <a href="pricing.html" class="btn wow fadeInUp" data-wow-delay=".8s">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-phone">
        <div class="icon">
            <i class="fal fa-mobile-android"></i>
        </div>
        <div class="content">
            <span>Customer Service:</span>
            <h5 class="number"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></h5>
        </div>
    </div>
</section>