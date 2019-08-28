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
<!-- register modal -->
<div class="modal-bg"></div>
<div class="modal fade ic-modal show ic-register-login-page" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
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
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create AN Account" class="form-control ic-form-btn">
                </div>
                <p class="login">Already have an account? <a href="login.php">Log in</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>