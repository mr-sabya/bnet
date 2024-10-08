<div class="row">
    <div class="col-lg-6 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Update {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="video_section_heading" class="form-label">Section Heading</label>
                        <input type="text" id="video_section_heading" class="form-control" wire:model.live="video_section_heading">
                        @if($video_section_heading == '')
                        @error('video_section_heading') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="video_section_text" class="form-label">Section Text</label>
                        <textarea id="video_section_text" class="form-control" wire:model.live="video_section_text"></textarea>
                        @if($video_section_text == '')
                        @error('video_section_text') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="video_section_video" class="form-label">Section Video</label>
                        <input type="text" id="video_section_video" class="form-control" wire:model.live="video_section_heading">
                        @if($video_section_video == '')
                        @error('video_section_video') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="counter_1" class="form-label">Counter (1)</label>
                                <input type="number" id="counter_1" class="form-control" wire:model.live="counter_1">
                                @if($counter_1 == '')
                                @error('counter_1') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="counter_1_text" class="form-label">Counter Text (1)</label>
                                <input type="text" id="counter_1_text" class="form-control" wire:model.live="counter_1_text">
                                @if($counter_1_text == '')
                                @error('counter_1_text') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="counter_2" class="form-label">Counter (2)</label>
                                <input type="number" id="counter_2" class="form-control" wire:model.live="counter_2">
                                @if($counter_2 == '')
                                @error('counter_2') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="counter_2_text" class="form-label">Counter Text (2)</label>
                                <input type="text" id="counter_2_text" class="form-control" wire:model.live="counter_2_text">
                                @if($counter_2_text == '')
                                @error('counter_2_text') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="counter_3" class="form-label">Counter (3)</label>
                                <input type="number" id="counter_3" class="form-control" wire:model.live="counter_3">
                                @if($counter_3 == '')
                                @error('counter_3') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="counter_3_text" class="form-label">Counter Text (3)</label>
                                <input type="text" id="counter_3_text" class="form-control" wire:model.live="counter_3_text">
                                @if($counter_3_text == '')
                                @error('counter_3_text') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Section Background</label>
                        <label for="video_section_image" class="image-label">
                            <button type="button" class="btn btn-light rounded-0" wire:click="resetImage">
                                <i class="icon-refresh-ccw feather me-2"></i>Reset
                            </button>
                            <a href="javascript:void(0)" wire:click="openImageModal">
                                @if($video_section_image)
                                <img src="{{ getFileUrl($video_section_image) }}" />
                                @elseif($homepage->video_section_image)
                                <img src="{{ getFileUrl($homepage->video_section_image) }}" />
                                @else
                                <h4>Upload Image</h4>
                                @endif
                            </a>
                        </label>
                        @if($video_section_image == '')
                        @error('video_section_image') <span class="text-danger">{{ $message }}</span> @enderror
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