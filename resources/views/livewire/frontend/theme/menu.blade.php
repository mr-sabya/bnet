<ul class="navigation">
    <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}" wire:navigate>Home</a></li>

    <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" wire:navigate>About</a></li>

    <!-- <li class="{{ Route::is('service') ? 'active' : '' }}"><a href="{{ route('service') }}" wire:navigate>Services</a></li> -->

    <li class="{{ Route::is('post.index') ? 'active' : '' }}"><a href="{{ route('post.index') }}" wire:navigate>News</a></li>

    <li class="menu-item-has-children"><a href="#">FTP Server</a>
        <ul class="sub-menu">
            @foreach($servers as $server)
            <li><a href="{{ $server->link }}" target="_blank">{{ $server->title}}</a></li>
            @endforeach
        </ul>
    </li>

    <li class="menu-item-has-children"><a href="#">Live Tv</a>
        <ul class="sub-menu">
            @foreach($livetvs as $livetv)
            <li><a href="{{ $livetv->link }}" target="_blank">{{ $livetv->title}}</a></li>
            @endforeach
        </ul>
    </li>

    <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" wire:navigate>contacts</a></li>
</ul>