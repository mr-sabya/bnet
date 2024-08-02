<div class="row">
    <div class="col-lg-4 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">{{ $addData ? 'Add' : ($updateData ? 'Update' : '') }} {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    @if($package)
                    <input type="hidden" wire:model="packageId">
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ $page }} Name</label>
                        <input type="text" id="name" class="form-control" name="name" wire:model.live="name" placeholder="{{ $page }} Name">
                        @if($name == '')
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="bandwidth" class="form-label">{{ $page }} Dandwidth</label>
                        <input type="number" id="bandwidth" class="form-control" name="bandwidth" wire:model.live="bandwidth" placeholder="{{ $page }} Dandwidth">
                        @if($bandwidth == '')
                        @error('bandwidth') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">{{ $page }} Price (৳)</label>
                        <input type="number" id="link" class="form-control" name="price" wire:model.live="price" placeholder="{{ $page }} Price">
                        @if($price == '')
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="feature_1" class="form-label">Feature 1</label>
                        <input type="text" id="link" class="form-control" name="feature_1" wire:model.live="feature_1" placeholder="Feature 1">
                        @if($feature_1 == '')
                        @error('feature_1') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="feature_2" class="form-label">Feature 2</label>
                        <input type="text" id="link" class="form-control" name="feature_2" wire:model.live="feature_2" placeholder="Feature 2">
                        @if($feature_2 == '')
                        @error('feature_2') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="feature_3" class="form-label">Feature 3</label>
                        <input type="text" id="link" class="form-control" name="feature_3" wire:model.live="feature_3" placeholder="Feature 3">
                        @if($feature_3 == '')
                        @error('feature_3') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="feature_4" class="form-label">Feature 4</label>
                        <input type="text" id="link" class="form-control" name="feature_4" wire:model.live="feature_4" placeholder="Feature 4">
                        @if($feature_4 == '')
                        @error('feature_4') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="feature_5" class="form-label">Feature 5</label>
                        <input type="text" id="link" class="form-control" name="feature_5" wire:model.live="feature_5" placeholder="Feature 5">
                        @if($feature_5 == '')
                        @error('feature_5') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="feature_6" class="form-label">Feature 6</label>
                        <input type="text" id="link" class="form-control" name="feature_6" wire:model.live="feature_6" placeholder="Feature 6">
                        @if($feature_6 == '')
                        @error('feature_6') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="feature_7" class="form-label">Feature 7</label>
                        <input type="text" id="link" class="form-control" name="feature_7" wire:model.live="feature_7" placeholder="Feature 7">
                        @if($feature_7 == '')
                        @error('feature_7') <span class="text-danger">{{ $message }}</span> @enderror
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
                <x-backend.filter width="w-lg-50" />
                <div class="table-responsive table-card mt-0">
                    <table class="table mb-0 text-nowrap table-centered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ $page }} Name</th>
                                <th scope="col">Bandwidth</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($packages as $package)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <h6 class="mb-0">{{ $package->name }}</h6>
                                </td>
                                <td>
                                    {{ $package->bandwidth }}
                                </td>
                                <td>
                                    ৳{{ $package->price }}
                                </td>
                                <td>
                                    <button wire:click="edit({{$package->id}})" class="btn btn-primary btn-sm">
                                        <i class="icon-edit feather"></i>
                                    </button>
                                    <button wire:click="getDeleteId({{ $package->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm">
                                        <i class="icon-trash-2 feather"></i>
                                    </button>
                                    <button wire:click="copy({{ $package->id }})" title="copy" class="btn btn-success btn-sm">
                                        <i class="icon-copy feather"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No {{ $page }} found!!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $packages->links() }}
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