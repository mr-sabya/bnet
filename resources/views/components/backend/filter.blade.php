<div class="mb-5">
    <div class="d-lg-flex justify-content-between ">
        <div class="short d-lg-flex align-items-center gap-3 {{ $width }}">
            <div>
                <p class="text-nowrap m-0">Short By</p>
            </div>
            <select class="form-control mb-sm-form" wire:model.live="shortby">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="created_at">Create Date</option>
                <option value="is_published">Status</option>
            </select>
            <select class="form-control mb-sm-form" wire:model.live="short">
                <option value="ASC">Assending</option>
                <option value="DESC" selected>Dessending</option>
            </select>
            <div>
                <button wire:click="clearShort" class="btn btn-primary">Clear</button>
            </div>
        </div>
        <div class="search w-lg-25 d-flex align-items-center gap-3">
            <p class="m-0">Search</p>
            <input type="text" class="form-control" wire:model.live="search">
        </div>
    </div>
</div>