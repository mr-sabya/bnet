<div class="row">
    <div class="col-lg-6 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Update {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="package_section_heading" class="form-label">Section Heading</label>
                        <input type="text" id="package_section_heading" class="form-control" wire:model.live="package_section_heading">
                        @if($package_section_heading == '')
                        @error('package_section_heading') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="package_section_text" class="form-label">Section Text</label>
                        <textarea id="package_section_text" class="form-control" wire:model.live="package_section_text"></textarea>
                        @if($package_section_text == '')
                        @error('package_section_text') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <button wire:click.prevent="save()" class="btn btn-primary" type="submit">Save</button>


                </form>
            </div>

        </div>
    </div>
</div>
