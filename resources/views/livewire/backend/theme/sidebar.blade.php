<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="{{ url('assets/backend/images/logo/logo.png') }}" style="max-height: 70px;" alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
    </div>
    <ul class="nav-menu">
        <li class="nav-menu-item {{ Route::is('admin.dashboard') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" wire:navigate>
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">APPS</li>
        <li class="nav-submenu {{ Route::is('admin.district.index') || Route::is('admin.city.index') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-box"></i>
                <span>Address</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse {{ Route::is('admin.district.index') || Route::is('admin.city.index') ? 'd-block' : '' }}">

                <li class="nav-menu-item {{ Route::is('admin.district.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.district.index')}}" wire:navigate>District</a>
                </li>

                <li class="nav-menu-item {{ Route::is('admin.city.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.city.index')}}" wire:navigate>City</a>
                </li>

            </ul>
        </li>

        <li class="nav-menu-item {{ Route::is('admin.ftp.index') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.ftp.index') }}" wire:navigate>
                <i class="feather icon-message-circle"></i>
                <span class="nav-menu-item-title">FTP Server</span>
            </a>
        </li>

        <li class="nav-menu-item {{ Route::is('admin.livetv.index') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.livetv.index') }}" wire:navigate>
                <i class="feather icon-calendar"></i>
                <span class="nav-menu-item-title">Live TV</span>
            </a>
        </li>

        <li class="nav-menu-item {{ Route::is('admin.package.index') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.package.index') }}" wire:navigate>
                <i class="feather icon-calendar"></i>
                <span class="nav-menu-item-title">Package</span>
            </a>
        </li>

        <li class="nav-menu-item {{ Route::is('admin.media.index') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.media.index') }}" wire:navigate>
                <i class="feather icon-calendar"></i>
                <span class="nav-menu-item-title">Media</span>
            </a>
        </li>


        <li class="nav-group-title">USER INTERFACE</li>

        <li class="nav-submenu {{ Route::is('admin.setting.*') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Setting</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" @if(Route::is('admin.setting.*')) style="display: block" @endif>

                <li class="nav-menu-item {{ Route::is('admin.setting.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.setting.index') }}" wire:navigate>Site Setting</a>
                </li>

            </ul>
        </li>

        <li class="nav-menu-item {{ Route::is('admin.service.*') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.service.index') }}" wire:navigate>
                <i class="feather icon-calendar"></i>
                <span class="nav-menu-item-title">Service</span>
            </a>
        </li>

        <li class="nav-submenu {{ Route::is('admin.home.*') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Home Page</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" @if(Route::is('admin.home.*')) style="display: block" @endif>

                <li class="nav-menu-item {{ Route::is('admin.home.banner') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.home.banner') }}" wire:navigate>Banner Section</a>
                </li>
                <li class="nav-menu-item {{ Route::is('admin.home.price') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.home.price') }}" wire:navigate>Pricing Section</a>
                </li>
                <li class="nav-menu-item {{ Route::is('admin.home.video') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.home.video') }}" wire:navigate>Video Section</a>
                </li>
                <li class="nav-menu-item {{ Route::is('admin.home.service') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.home.service') }}" wire:navigate>Service Section</a>
                </li>

            </ul>
        </li>


    </ul>
</div>