<div class="login-logo">PRAKTIKUM MANAGEMENT SYSTEM</div><!-- /.login-logo -->
<div class="login-box-body">
    <?php if(isset($errMsg)){ ?>
    <div class="alert alert-danger"><?php echo $errMsg; ?></div>
    <?php } ?>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingat saya
            </label>
          </div>
        </div><!-- /.col -->
        <div class="col-xs-4">
          <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div><!-- /.col -->
      </div>
    </form>
</div><!-- /.login-box-body -->