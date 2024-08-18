<section class="cta-area cta-bg jarallax" data-background="{{ getFileUrl($home->cta_section_image) }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="cta-content text-center">
                    <div class="section-title white-title mb-35">
                        <h2 class="title">{{ $home->cta_section_heading }}</h2>
                    </div>
                    <div class="cta-btn-wrap">
                        <a href="pricing.html" class="btn">View our Plans</a>
                        <span class="or">OR</span>
                        <a href="tel:{{ $setting->phone }}" class="btn transparent-btn">{{ $setting->phone }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>