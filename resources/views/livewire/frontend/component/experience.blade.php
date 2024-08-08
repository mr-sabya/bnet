<section class="experience-area section-space-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="progress-video">
                    <img src="{{ getFileUrl($about->skill_section_image) }}" alt="">
                    <div class="video-paly">
                        <a href="{{ $about->skill_section_video }}" class="popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-30">
                    <h2 class="title">{{ $about->skill_section_heading }}</h2>
                </div>
                <div class="experience-content">
                    <p>{{ $about->skill_section_text }}</p>
                    <div class="progress-item">
                        <span class="title">Technical Skills</span>
                        <div class="progress--bar" data-percentage="90%">
                            <div class="progress-number">
                                <span class="percent"></span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <span class="title">Customer Support</span>
                        <div class="progress--bar" data-percentage="80%">
                            <div class="progress-number">
                                <span class="percent"></span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <span class="title">Networking SKills</span>
                        <div class="progress--bar" data-percentage="95%">
                            <div class="progress-number">
                                <span class="percent"></span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>