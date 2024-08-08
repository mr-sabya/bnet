<section class="contact-area section-space-top section-meadium-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-title">
                    <h3 class="title">Get in Touch</h3>
                </div>
                <livewire:frontend.component.quote-form />
            </div>
            <div class="col-lg-4">
                <div class="contact-info-wrap">
                    <h3 class="contact-info-title">Direct Contact</h3>
                    <p>We are the broadband internet service provider at New</p>
                    <ul class="contact-info-list">
                        <li><i class="fal fa-phone"></i> <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                        <li><i class="fal fa-envelope"></i> <a href="mailto:{{ $setting->email }}"><span class="__cf_email__">{{ $setting->email }}</span></a></li>
                        <li><i class="fal fa-map-marker-alt"></i> <span>{{ $setting->address }}</span></li>
                    </ul>
                </div>
                <div class="contact-info-wrap">
                    <h3 class="contact-info-title">Live Chat</h3>
                    <p>We are the broadband internet service provider at New</p>
                    <div class="live-chat">
                        <div class="icon"><i class="flaticon-chat"></i></div>
                        <a href="#" class="live-chat-link">Live Chat to Executive</a>
                    </div>
                </div>
                <div class="contact-info-wrap">
                    <h3 class="contact-info-title">Not interested to talk?</h3>
                    <p>Please check out or best suggested <a href="#">Help Center & FAQ</a></p>
                </div>
            </div>
        </div>
    </div>
</section>