<div>

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form wire:submit.prevent="store" class="contact-form mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-grp">
                    <input type="text" id="name" autocomplete="off" wire:model.live="name">
                    <label for="name">Full Name*</label>
                    @if($name == '')
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <input type="number" id="phone" autocomplete="off" wire:model.live="phone">
                    <label for="phone">Phone*</label>
                    @if($phone == '')
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <input type="email" id="email" autocomplete="off" wire:model.live="email">
                    <label for="email">Email</label>
                    @if($email == '')
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <select class="form-select" id="package" wire:model.live="package_id">
                        <option value="">Select Package</option>
                        @foreach($packages as $package)
                        <option value="{{ $package->id }}" wire:key="package-{{ $package->id }}">{{ $package->bandwidth }} mbps - ৳{{ $package->price }}/Month</option>
                        @endforeach
                    </select>
                    <label for="package">Package*</label>
                    @if($package_id == '')
                    @error('package_id') <small class="text-danger">{{ $message }}</small> @enderror
                    @endif
                </div>
            </div>
        </div>
        <div class="form-grp">
            <textarea name="address" id="address" autocomplete="off" wire:model.live="address"></textarea>
            <label for="address">Full Address</label>
            @if($address == '')
            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Send Request</button>
    </form>

</div>