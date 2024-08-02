<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="m-2">
                    <div class="d-flex justify-content-center mt-3">
                        <div class="text-center logo">
                            <img alt="logo" class="img-fluid" src="{{ url('assets/backend/images/logo/logo-fold.png') }}" style="height: 70px;">
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="fw-bolder">Sign In</h3>
                        <p class="text-muted">Sign in your account to continue</p>
                    </div>
                    <form wire:submit.prevent="login">
                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" wire:model="email" />
                            @if($email == '')
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex justify-content-between">
                                <span>Password</span>
                                <a href="#" class="text-primary font">Forget Password?</a>
                            </label>
                            <div class="form-group input-affix flex-column">
                                <label class="d-none">Password</label>
                                <input formcontrolname="password" class="form-control" type="password" wire:model="password">
                                <i class="suffix-icon feather cursor-pointer text-dark icon-eye" ng-reflect-ng-class="icon-eye"></i>
                            </div>
                            @if($password == '')
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                            @endif
                        </div>

                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                            <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input me-2" id="rememberme" wire:model="remember">
                                <label class="form-check-label" for="rememberme"> Remember me</label>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary w-100">Log In</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>