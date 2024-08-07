<div class="{{ $className }}">
    <a href="{{ route('home') }}" wire:navigate>
    @if($isWhiteLogo)    
    <img src="{{ getFileUrl($setting->white_logo) }}" alt=""></a>
    @else
    <img src="{{ getFileUrl($setting->logo) }}" alt=""></a>
    @endif
</div>