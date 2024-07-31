<div class="row">
    <div class="col-lg-4 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">{{ $addData ? 'Add' : ($updateData ? 'Update' : '') }} {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    @if($district)
                    <input type="hidden" wire:model="districtId">
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ $page }} Title</label>
                        <input type="text" id="name" class="form-control" name="name" wire:model.live="name" placeholder="{{ $page }} Title">
                        @if($name == '')
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($districts as $district)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <h6 class="mb-0">{{ $district->name }}</h6>
                                </td>
                                <td>
                                    <button wire:click="edit({{$district->id}})" class="btn btn-primary btn-sm">
                                        <i class="icon-edit feather"></i>
                                    </button>
                                    <button wire:click="getDeleteId({{ $district->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm">
                                        <i class="icon-trash-2 feather"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">No {{ $page }} found!!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $districts->links() }}
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