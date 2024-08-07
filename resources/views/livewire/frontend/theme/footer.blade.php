<footer>
    <div class="footer-wrap">
        <div class="container">
            <div class="row g-0">
                <div class="col-3">
                    <div class="footer-widget">
                        <div class="footer-contact">
                            <div class="footer-call">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="content">
                                    <span>Call us 24/7</span>
                                    <h6 class="title"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></h6>
                                </div>
                            </div>
                            <h6 class="title">Contact info</h6>
                            <p>{{ $setting->address }}</p>
                            <div class="footer-social">
                                <a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-widget">
                        <div class="fw-title">
                            <h4 class="title">Categories</h4>
                        </div>
                        <ul class="fw-list">
                            <li><a href="services-details.html">Laptops & Computers</a></li>
                            <li><a href="services-details.html">Home & Life Style</a></li>
                            <li><a href="services-details.html">Men's Fashion</a></li>
                            <li><a href="services-details.html">Women's Fashion</a></li>
                            <li><a href="services-details.html">Sport & Gyms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-widget">
                        <div class="fw-title">
                            <h4 class="title">About Company</h4>
                        </div>
                        <ul class="fw-list">
                            <li><a href="about-us.html">About Company</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="contact.html">Privacy policy</a></li>
                            <li><a href="contact.html">Terms & Conditions</a></li>
                            <li><a href="contact.html">Mission & Vision</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1">
                    <div class="footer-widget">
                        <div class="fw-title">
                            <h4 class="title">Service Schedule</h4>
                        </div>
                        <ul class="fw-schedule-list">
                            <li>Saturday - Sunday - Mon <span>8:30 AM - 10 PM</span></li>
                            <li>Tuesday - Wed - Thurs <span>9:30 AM - 12 PM</span></li>
                            <li>Friday : <span class="close">Closed</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <livewire:frontend.theme.logo className="footer-logo" whiteLogo="true" />
                </div>
                <div class="col-md-8">
                    <div class="copyright-text text-center text-md-end">
                        <p>Copyrighted by <a href="https://themeforest.net/user/bdevs/portfolio" target="_blank">@Bdevs</a> - All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>