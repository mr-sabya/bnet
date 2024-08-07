<div class="header-top-wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-7 col-sm-7">
                <div class="header-top-left">
                    <ul>
                        <li class="d-none d-xl-flex"><i class="flaticon-location"></i>
                            {{ $setting->address }}
                        </li>
                        <li class="d-none d-lg-flex"><i class="flaticon-email"></i>
                            <a href="mailto: {{ $setting->email }}"><span class="__cf_email__">{{ $setting->email }}</span></a>
                        </li>
                        <li><i class="flaticon-clock"></i> Opening Time : {{ $setting->opening_time }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-5 col-sm-5">
                <div class="header-top-right">
                    <ul>
                        <li class="header-user-info">
                            <i class="flaticon-businessman"></i>
                            <a href="signup.html">Login / Register</a>
                        </li>
                        <li class="header-social">
                            <a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>