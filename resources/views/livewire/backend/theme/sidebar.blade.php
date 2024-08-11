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
        <li class="nav-group-title">USER INTERFACE</li>

        <li class="nav-submenu {{ Route::is('admin.setting.index') || Route::is('admin.setting.home') || Route::is('admin.setting.about') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Setting</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse {{ Route::is('admin.setting.index') || Route::is('admin.setting.home') || Route::is('admin.setting.about') ? 'd-block' : '' }}">

                <li class="nav-menu-item {{ Route::is('admin.setting.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.setting.index') }}" wire:navigate>Site Setting</a>
                </li>



            </ul>
        </li>
        <li class="nav-submenu {{ Route::is('admin.home.banner') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Home Page</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse {{ Route::is('admin.home.banner') ? 'd-block' : '' }}">

                <li class="nav-menu-item {{ Route::is('admin.home.banner') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.home.banner') }}" wire:navigate>Banner Section</a>
                </li>




            </ul>
        </li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-file-text"></i>
                <span>Forms</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="v-form-elements.html">Form Elements</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-form-layouts.html">Form Layouts</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-form-validation.html">Form Validation</a>
                </li>
            </ul>
        </li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-grid"></i>
                <span>Tables</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="v-basic-table.html">Basic Table</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-data-table.html">Data Table</a>
                </li>
            </ul>
        </li>
        <li class="nav-menu-item">
            <a href="v-chart.html">
                <i class="feather icon-bar-chart"></i>
                <span class="nav-menu-item-title">Chart</span>
            </a>
        </li>
        <li class="nav-group-title">PAGES</li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-settings"></i>
                <span>Utility</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="v-profile-personal.html">Profile</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-invoice.html">Invoice</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-faq.html">FAQ</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-pricing.html">Pricing</a>
                </li>
                <li class="nav-menu-item">
                    <a href="v-user-list.html">User List</a>
                </li>
            </ul>
        </li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-lock"></i>
                <span>Auth</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="login.html">Login</a>
                </li>
                <li class="nav-menu-item">
                    <a href="login-v2.html">Login v2</a>
                </li>
                <li class="nav-menu-item">
                    <a href="login-v3.html">Login v3</a>
                </li>
                <li class="nav-menu-item">
                    <a href="register.html">Register</a>
                </li>
                <li class="nav-menu-item">
                    <a href="register-v2.html">Register v2</a>
                </li>
                <li class="nav-menu-item">
                    <a href="register-v3.html">Register v3</a>
                </li>
            </ul>
        </li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-slash"></i>
                <span>Errors</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="error.html">Error 1</a>
                </li>
                <li class="nav-menu-item">
                    <a href="error-v2.html">Error 2</a>
                </li>
            </ul>
        </li>
    </ul>
</div>