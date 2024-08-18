<section class="services-area section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Find Perfect Network Solutions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <div class="services-content">
                        <h3 class="title"><a href="services-details.html">{{ $service->name }}</a></h3>
                        <p>{{ $service->text }}</p>
                        <a href="services-details.html" class="btn btn-link">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>