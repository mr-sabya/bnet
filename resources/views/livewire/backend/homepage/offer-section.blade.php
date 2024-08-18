<div class="row">
    <div class="col-lg-6 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Update {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="offer_section_heading" class="form-label">Section Heading</label>
                        <input type="text" id="offer_section_heading" class="form-control" wire:model.live="offer_section_heading">
                        @if($offer_section_heading == '')
                        @error('offer_section_heading') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="offer_section_text" class="form-label">Sub Heading</label>
                        <textarea id="offer_section_text" class="form-control" wire:model.live="offer_section_text"></textarea>
                        @if($offer_section_text == '')
                        @error('offer_section_text') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Section Image</label>
                        <label for="offer_section_image" class="image-label">
                            <button type="button" class="btn btn-light rounded-0" wire:click="resetImage">
                                <i class="icon-refresh-ccw feather me-2"></i>Reset
                            </button>
                            <a href="javascript:void(0)" wire:click="openImageModal">
                                @if($offer_section_image)
                                <img src="{{ getFileUrl($offer_section_image) }}" />
                                @elseif($homepage->offer_section_image)
                                <img src="{{ getFileUrl($homepage->offer_section_image) }}" />
                                @else
                                <h4>Upload Image</h4>
                                @endif
                            </a>
                        </label>
                        @if($offer_section_image == '')
                        @error('offer_section_image') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>




                    <button wire:click.prevent="save()" class="btn btn-primary" type="submit">Save</button>


                </form>
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
</div>

<script>
    document.addEventListener('livewire:init', function() {
        Livewire.on('open-modal', () => {
            $('#mediaModal').modal('show');
        });
    });
</script>