<div class="mb-3">
    <div></div>
    <label for="image" class="image-label">
        <button type="button" class="btn btn-light rounded-0" wire:click="resetImage"><i class="icon-refresh-ccw feather me-2"></i>Reset</button>
        @if($uploadImage == true)
        @if($image)
        <img src="{{ $image->temporaryUrl() }}" />
        @else
        <h4>Upload Image</h4>
        @endif
        @elseif($uploadImage == false)
        <img src="{{ getFileUrl($uploaded) }}" />
        @else
        <h4>Upload Image</h4>
        @endif

    </label>
    <input type="file" id="image" class="form-control" wire:model="image" wire:click="activeImageUpload">
    @if($image == '')
    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
    @endif
</div>