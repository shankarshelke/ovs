<div class="card col-8">
    <div class="card-body">
        <form id="auth-login-form">
            <div class="form-head">
                <a href="index.html" class="logo"><img src="<?= base_url('assets/admin/main/images/logo.svg');?>" class="img-fluid" alt="logo"></a>
            </div>                                        
            <h4 class="text-primary my-4">Log in !</h4>
            <div class="form-group">
                <input type="text" class="form-control" name="identity" id="identity" value="<?= set_value('identity'); ?>" placeholder="Enter Contact here">
                <div class="text-danger"><?= isset($errors['identity']) ? $errors['identity'] : ''; ?></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password'); ?>" placeholder="Enter Password here">
                <div class="text-danger"><?= isset($errors['password']) ? $errors['password'] : ''; ?></div>
            </div>
            <div class="form-row mb-3">
                <div class="col-sm-6">
                    <div class="custom-control custom-checkbox text-left">
                      <input type="checkbox" class="custom-control-input" id="rememberme">
                      <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                    </div>                                
                </div>
                <div class="col-sm-6">
                  <div class="forgot-psw"> 
                    <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                  </div>
                </div>
            </div>                          
          <button type="button" class="btn btn-success btn-lg btn-block font-18 saveBtn" data-url="/auth/login" data-form-id="auth-login-form">Log in</button>
        </form>
        <div class="login-or">
            <h6 class="text-muted">OR</h6>
        </div>
        <div class="social-login text-center">
            <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
            <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
        </div>
        <p class="mb-0 mt-3">Don't have a account? <a href="javaScript:void();" data-url="/auth/register" class="loadPage">Sign up</a></p>
    </div>
</div>