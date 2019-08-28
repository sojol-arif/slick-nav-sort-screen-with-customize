<?php include('header.php'); ?>
<style>

    .ic-modal{
        display:none;
    }
    .ic-register-login-page.ic-modal.modal{
        display:block;
        z-index: 1;
    }
    @media (max-width: 576px){
        .modal.ic-modal .modal-dialog{
            margin: 140px auto 65px;
        }
    }
</style>

<!-- login modal -->
<div class="modal-bg"></div>
<div class="modal fade ic-modal show ic-register-login-page" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="content-top text-center">
            <img src="images/home/modal-logo.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor 
            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <form action="">
            <div class="reg-log-right">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="User Name or Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="log into my account" class="form-control ic-form-btn mb-0">
                </div>
                <div class="text">
                    <p class="forget-password"><a href="">Forgot your password?</a></p>
                    <h2>Don't have a free account yet?</h2>
                    <p class="create-account"><a href="register.php" class="ic-form-btn">Crearte An account</a></p>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
