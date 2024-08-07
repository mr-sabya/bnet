<section class="subscribe-area subscribe-bg" data-background="{{ url('assets/frontend/imgs/bg/subscribe_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="subscribe-img wow fadeInLeft" data-wow-delay=".2s">
                    <img src="{{ getFileUrl($home->top_section_image) }}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="section-title mb-30">
                    <h2 class="title">{{ $home->top_section_heading }}</h2>
                </div>
                <div class="subscribe-content">
                    <p>{{ $home->top_section_text }}</p>
                    <h4 class="title">{!! $home->top_section_subtext !!}</h4>
                    <div class="subscribe-plan">
                        <h2 class="price"><span>Only</span> ৳{{ $package->price }}<sub>/Mon</sub></h2>
                        <a href="pricing.html" class="btn btn-link">View All Plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>