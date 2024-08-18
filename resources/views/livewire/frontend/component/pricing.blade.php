<section class="pricing-three-area section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11">
                <div class="section-title text-center mb-55">
                    <h2 class="title">{{ $home->package_section_heading }}</h2>
                    <p>{{ $home->package_section_text }}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($packages as $package)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">{{ $package->name }}</h4>
                        <span class="devices-support">{{ $package->bandwidth }}mbps</span>
                        <ul class="devices-icon-wrap">
                            <li><i class="flaticon-tv"></i></li>
                            <li><i class="flaticon-wifi-router-1"></i></li>
                            <li><i class="flaticon-device"></i></li>
                            <li><i class="flaticon-laptop"></i></li>
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <ul>
                            <li>{{ $package->feature_1 }}</li>
                            <li>{{ $package->feature_2 }}</li>
                            <li>{{ $package->feature_3 }}</li>
                            <li>{{ $package->feature_4 }}</li>
                            <li>{{ $package->feature_5 }}</li>
                            <li>{{ $package->feature_6 }}</li>
                            <li>{{ $package->feature_7 }}</li>
                        </ul>
                    </div>
                    <h2 class="pricing-three-price"><span>৳</span> {{ $package->price }}<span>/mon</span></h2>
                    <a href="{{ route('quote') }}?package={{ $package->id }}" class="btn transparent-btn">Get Started</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>