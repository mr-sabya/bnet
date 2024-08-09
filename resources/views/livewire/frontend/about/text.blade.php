<section class="about-area section-space-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <img src="{{ getFileUrl($about->about_image_1) }}" alt="">
                    <img src="{{ getFileUrl($about->about_image_2) }}" class="main-img" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-30">
                    <h2 class="title">{{ $about->about_title }}</h2>
                </div>
                <div class="about-content">
                    <p>Yes! You'll be able to use your T-Mobile Home Internet to connect your computer, phone,
                        and numerous other devices. Gauge your students’ skill level with the initial test and
                        follow their progress.</p>
                    <ul class="about-list">
                        @foreach($lists as $list)
                        <li>{{ $list->name }}</li>
                        @endforeach
                    </ul>
                    <a href="contact.html" class="btn transparent-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>