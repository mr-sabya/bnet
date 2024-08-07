<section class="special-offer-area section-space-top section-meadium-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="special-offer-img wow fadeInRight" data-wow-delay=".2s">
                    <img src="{{ url('assets/frontend/imgs/images/special_offer_img.jpg') }}" alt="">
                    <div class="special-offer-text">For Students</div>
                    <div class="special-offer-mbps">
                        <span>UP TO</span>
                        <h3 class="title">{{ $package->bandwidth }} MB</h3>
                        <p>PER Second</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-40">
                    <h2 class="title">{{ $home->offer_section_heading }}</h2>
                </div>
                <div class="special-offer-content">
                    <p>{{ $home->offer_section_text }}</p>
                    <div class="special-price-wrap">
                        <h2 class="special-price"><sup>৳</sup>{{ $package->price }}<sub>Monthly</sub> </h2>
                        
                    </div>
                    <a href="pricing.html" class="btn transparent-btn">Get started</a>
                </div>
            </div>
        </div>
    </div>
</section>