<div class="{{ $className }}">
    <a href="{{ route('home') }}" wire:navigate>
    @if($isWhiteLogo)    
    <img src="{{ url('assets/frontend/imgs/logo/w_logo.png') }}" alt=""></a>
    @else
    <img src="{{ url('assets/frontend/imgs/logo/logo.png') }}" alt=""></a>
    @endif
</div>