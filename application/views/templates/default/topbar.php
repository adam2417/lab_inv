<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">&nbsp;</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">&nbsp;</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="#" class="navbar-brand">
            <b><?php echo $config['config_value']; ?></b>  
            <!--<span class="small"><?php echo $config['config_value']; ?></span>-->
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo BASE_PATH; ?>/default/images/avatar.png<?php //echo $_SESSION['images']; ?>" class="user-image" alt="User Image" />
                  <?php if(isset($_SESSION["username"])) { ?><span class="hidden-xs"><?php echo $_SESSION['username']; ?></span><?php } ?>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                    
                  <li class="user-header">
                    <img src="<?php echo BASE_PATH; ?>/default/images/avatar.png<?php //echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
                    <p><?php if(isset($_SESSION['username'])) { ?>
                      <?php echo $_SESSION['username']; ?>
                      <small><?php echo $_SESSION['golongan']; ?></small>  <?php } ?>    
                    </p>
                  </li>         
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!--<div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>-->
                    <div class="pull-right">
                        <?php if(isset($_SESSION["username"])) {?>
                      <a href="<?php echo BASE_PATH; ?>/login/logout" class="btn btn-default btn-flat">LogOut</a>
                        <?php } else { ?>
                        <a href="<?php echo BASE_PATH; ?>/login/index" class="btn btn-default btn-flat">LogIn</a>
                        <?php } ?>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>