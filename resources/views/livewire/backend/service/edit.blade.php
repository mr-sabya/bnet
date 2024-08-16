<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Edit {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">


                    <div class="mb-3">
                        <label for="name" class="form-label">{{ $page }} Name</label>
                        <input type="text" id="name" class="form-control" name="name" wire:model.live="name" placeholder="{{ $page }} Name">
                        @if($name == '')
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" id="slug" class="form-control" name="slug" wire:model.live="slug" placeholder="slug" wire:click="generateSlug">
                        @if($slug == '')
                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" id="icon" class="form-control" name="icon" wire:model.live="icon" placeholder="flaticon-internet-banking">
                        @if($icon == '')
                        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Banner Image</label>
                        <label for="image" class="image-label">
                            <button type="button" class="btn btn-light rounded-0" wire:click="resetImage">
                                <i class="icon-refresh-ccw feather me-2"></i>Reset
                            </button>
                            <a href="javascript:void(0)" wire:click="openImageModal">
                                @if($image)
                                <img src="{{ getFileUrl($image) }}" />
                                @else
                                <h4>Upload Image</h4>
                                @endif
                            </a>
                        </label>
                        @if($image == '')
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label>
                        <textarea id="text" class="form-control" name="text" wire:model.live="text"></textarea>
                        @if($text == '')
                        @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Text</label>
                        <livewire:quill-text-editor id="details" wire:model.live="details" theme="snow" />
                        @if($details == '')
                        @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <button wire:click.prevent="update({{ $service->id }})" class="btn btn-primary" type="submit">Update</button>

                    <button wire:click.prevent="create()" class="btn btn-secondary ms-2" type="button">Cancel</button>

                </form>
            </div>
        </div>


        <!-- media modal -->
        <div wire:ignore.self class="modal fade" id="mediaModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Select Media</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            @forelse($images as $image)
                            <div class="col-lg-3">
                                <a href="javascript:void(0)" wire:click="selectImage({{ $image->id }})" class="{{ $selectId == $image->id ? 'active' : '' }}" data-bs-dismiss="modal">
                                    <div class="media-card">
                                        <div class="media">
                                            <img src="{{ getFileUrl($image->image) }}" alt="">
                                        </div>
                                        <div class="title">
                                            <h5>{{ $image->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div class="col-lg-12">
                                <p>No Media Found!!</p>
                            </div>
                            @endforelse
                        </div>
                        {{ $images->links() }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script>
    document.addEventListener('livewire:init', function() {
        Livewire.on('open-modal', () => {
            $('#mediaModal').modal('show');
        });
    });
</script>