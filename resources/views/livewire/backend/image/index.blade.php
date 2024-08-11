<div class="row">
    <div class="col-lg-4 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">{{ $addData ? 'Add' : ($updateData ? 'Update' : '') }} {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    @if($media)
                    <input type="hidden" wire:model="mediaId">
                    @endif
{{ $image }}
                    <div class="mb-3">
                        <label for="" class="form-label">Favicon</label>
                        <label for="image" class="image-label">
                            <button type="button" class="btn btn-light rounded-0" wire:click="resetImage"><i class="icon-refresh-ccw feather me-2"></i>Reset</button>
                            @if($uploadImage == true)
                            @if($image)
                            <div class="p-5">
                                <img src="{{ $image->temporaryUrl() }}" />
                            </div>
                            @else
                            <h4>Upload Image</h4>
                            @endif
                            @elseif($uploadImage == false)
                            <div class="p-5">
                                <img src="{{ getFileUrl($setting->image) }}" />
                            </div>
                            @else
                            <h4>Upload Image</h4>
                            @endif

                        </label>
                        <input type="file" id="image" class="form-control d-none" wire:model.live="image" wire:change="getFileInfo" x-on:change="getFileInfo" wire:click="activeImageUpload">
                        @if($image == '')
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ $page }} Name</label>
                        <input type="text" id="name" class="form-control" name="name" wire:model.live="name" placeholder="{{ $page }} Name">
                        @if($name == '')
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="alt_text" class="form-label">{{ $page }} Title</label>
                        <input type="text" id="alt_text" class="form-control" name="alt_text" wire:model.live="alt_text" placeholder="{{ $page }} alt_text">
                        @if($alt_text == '')
                        @error('alt_text') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">{{ $page }} Link</label>
                        <input type="text" id="link" class="form-control" name="link" wire:model.live="link" placeholder="{{ $page }} Link">
                        @if($link == '')
                        @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    @if($addData)
                    <button wire:click.prevent="store()" class="btn btn-primary" type="submit">Create</button>
                    @elseif($updateData)
                    <div class="d-flex">
                        <button wire:click.prevent="update()" class="btn btn-primary" type="submit">Update</button>
                        <button wire:click.prevent="create()" class="btn btn-secondary ms-2" type="button">Cancel</button>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $page }} List</h4>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">

            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="deleteModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">Are you sure want to delete?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-bs-dismiss="modal">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>