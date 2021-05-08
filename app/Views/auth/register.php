<div class="card col-8">
    <div class="card-body">
        <form id="register-form">
            <div class="form-head">
                <a href="index.html" class="logo"><img src="<?= base_url('assets/admin/main/images/logo.svg'); ?>" class="img-fluid" alt="logo"></a>
            </div>
            <h4 class="text-primary my-4">Sign Up !</h4>
            <div class="row">
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="firstname" name="first_name" placeholder="Enter first name here">
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Enter Last name here">
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="inputmask-email" name="email" placeholder="Enter Email: _@_._">
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="inputmask-phone" name="phone" placeholder="Enter Contact: (__) ___-___-____">
            </div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password here">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="re-password" name="password_confirm" placeholder="Re-Type Password">
            </div>
            <div class="form-row mb-3">
                <div class="col-sm-12">
                    <div class="custom-control custom-checkbox text-left">
                        <input type="checkbox" class="custom-control-input" id="terms">
                        <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Orbiter</label>
                    </div>
                </div>
            </div>
            <button type="button" data-form-id="register-form" data-url="/auth/create_user" class="btn btn-success btn-lg btn-block font-18 saveBtn">Register</button>
        </form>
        <p class="mb-0 mt-3">Already have an account? <a href="javaScript:void();" data-url="/auth/login" class="loadPage">Log in</a></p>

    </div>
</div>