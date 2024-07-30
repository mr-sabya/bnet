<ul class="navigation">
    <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}" wire:navigate>Home</a></li>

    <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" wire:navigate>About</a></li>

    <!-- <li class="{{ Route::is('service') ? 'active' : '' }}"><a href="{{ route('service') }}" wire:navigate>Services</a></li> -->

    <li class="{{ Route::is('post.index') ? 'active' : '' }}"><a href="{{ route('post.index') }}" wire:navigate>News</a></li>

    <li class="menu-item-has-children"><a href="#">FTP Server</a>
        <ul class="sub-menu">
            <li><a href="pricing.html">Our Packages</a></li>
            <li><a href="team.html">Creative Team</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children"><a href="#">Live Tv</a>
        <ul class="sub-menu">
            <li><a href="pricing.html">Our Packages</a></li>
            <li><a href="team.html">Creative Team</a></li>
        </ul>
    </li>

    <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" wire:navigate>contacts</a></li>
</ul>