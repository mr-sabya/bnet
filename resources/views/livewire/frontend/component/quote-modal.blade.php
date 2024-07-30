<div class="modal fade" id="quoteModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">
                <h2 class="mb-5 text-center">Get Internet Connection?</h2>

                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" id="name" autocomplete="off" required>
                                <label for="name">First Name*</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="number" id="phone" autocomplete="off" required>
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="email" id="email" autocomplete="off" required>
                                <label for="email">Email*</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <select class="form-select mb-30" aria-label="Default select example">
                                    <option selected disabled>Subject</option>
                                    <option value="1">Broadband Connection</option>
                                    <option value="2">Wi-Fi Internet</option>
                                    <option value="3">Satellite TV Box</option>
                                    <option value="4">Netfix TV Box</option>
                                    <option value="5">Mobile Connection</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <textarea name="message" id="message" autocomplete="off" required></textarea>
                        <label for="message">Messages</label>
                    </div>

                    <button type="Submit" class="btn btn-primary">Send Request</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <p class="contact-form-check">
                    You will receive our confirmation in your number about our coverage area in your region.
                </p>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:navigated', (event) => {
        $('#quoteModal').modal('show');
    });
</script>