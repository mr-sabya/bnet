<div class="row">
    <div class="col-lg-6 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Update {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="site_title" class="form-label">Website Title</label>
                        <input type="text" id="site_title" class="form-control" wire:model.live="site_title">
                        @if($site_title == '')
                        @error('site_title') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" id="tagline" class="form-control" wire:model.live="tagline">
                        @if($tagline == '')
                        @error('tagline') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Logo</label>
                                <label class="image-label">
                                    <button type="button" class="btn btn-light rounded-0" wire:click="resetImage('logo')">
                                        <i class="icon-refresh-ccw feather me-2"></i>Reset
                                    </button>
                                    <a href="javascript:void(0)" wire:click="openImageModal('logo')">
                                        @if($logo)
                                        <img src="{{ getFileUrl($logo) }}" />
                                        @elseif($setting->logo)
                                        <img src="{{ getFileUrl($setting->logo) }}" />
                                        @else
                                        <h4>Upload Image</h4>
                                        @endif
                                    </a>
                                </label>
                                @if($logo == '')
                                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="" class="form-label">White Logo</label>
                                <label for="white_logo" class="image-label bg-dark">
                                    <button type="button" class="btn btn-light rounded-0" wire:click="resetImage('whitelogo')">
                                        <i class="icon-refresh-ccw feather me-2"></i>Reset
                                    </button>
                                    <a href="javascript:void(0)" wire:click="openImageModal('white_logo')">
                                        @if($white_logo)
                                        <img src="{{ getFileUrl($white_logo) }}" />
                                        @elseif($setting->white_logo)
                                        <img src="{{ getFileUrl($setting->white_logo) }}" />
                                        @else
                                        <h4>Upload Image</h4>
                                        @endif
                                    </a>
                                </label>
                                @if($white_logo == '')
                                @error('white_logo') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Favicon</label>
                                <label for="favicon" class="image-label">
                                    <button type="button" class="btn btn-light rounded-0" wire:click="resetImage('favicon')">
                                        <i class="icon-refresh-ccw feather me-2"></i>Reset
                                    </button>
                                    <a href="javascript:void(0)" wire:click="openImageModal('favicon')">
                                        @if($favicon)
                                        <img src="{{ getFileUrl($favicon) }}" />
                                        @elseif($setting->favicon)
                                        <img src="{{ getFileUrl($setting->favicon) }}" />
                                        @else
                                        <h4>Upload Image</h4>
                                        @endif
                                    </a>
                                </label>
                                @if($favicon == '')
                                @error('favicon') <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" class="form-control" wire:model.live="address"></textarea>
                        @if($address == '')
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" wire:model.live="email">
                        @if($email == '')
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" class="form-control" wire:model.live="phone">
                        @if($phone == '')
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="opening_time" class="form-label">Opening Time</label>
                        <input type="text" id="opening_time" class="form-control" wire:model.live="opening_time">
                        @if($opening_time == '')
                        @error('opening_time') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" id="facebook" class="form-control" wire:model.live="facebook">
                        @if($facebook == '')
                        @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" id="twitter" class="form-control" wire:model.live="twitter">
                        @if($twitter == '')
                        @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" id="instagram" class="form-control" wire:model.live="instagram">
                        @if($instagram == '')
                        @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" id="linkedin" class="form-control" wire:model.live="linkedin">
                        @if($linkedin == '')
                        @error('linkedin') <span class="text-danger">{{ $message }}</span> @enderror
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