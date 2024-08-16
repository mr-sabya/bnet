<section class="video-area video-bg" data-background="{{ getFileUrl($home->video_section_image) }}">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-4">
                <div class="video-paly">
                    <a href="{{ $home->video_section_video }}" class="popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="section-title mb-40">
                    <h2 class="title">{{ $home->video_section_heading }}</h2>
                </div>
                <div class="video-content-wrap">
                    <p>{{ $home->video_section_text }}</p>
                    <div class="fact-wrap">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="fact-item">
                                    <h4 class="title"><span class="odometer" data-count="{{ $home->counter_1 }}"></span>K</h4>
                                    <p>{{ $home->counter_1_text }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="fact-item">
                                    <h4 class="title"><span class="odometer" data-count="{{ $home->counter_2 }}"></span>+</h4>
                                    <p>{{ $home->counter_2_text }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="fact-item">
                                    <h4 class="title"><span class="odometer" data-count="{{ $home->counter_3 }}"></span>+</h4>
                                    <p>{{ $home->counter_3_text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="pricing.html" class="btn">Try Us Free</a>
                </div>
            </div>
        </div>
    </div>
</section>