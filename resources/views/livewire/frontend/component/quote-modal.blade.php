<div class="modal fade" id="quoteModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pb-2 pt-0">
                <h2 class="mb-5 text-center">Get Internet Connection?</h2>
                
                <livewire:frontend.component.quote-form />
                <p class="mt-4 text-center">
                    You will receive our confirmation in your number about our coverage area in your region.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="javascript:void(0)" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close" class="btn-light">Don't Show Again</a>
                
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:navigated', (event) => {
        $('#quoteModal').modal('show');
    });
</script>