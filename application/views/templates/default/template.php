<!DOCTYPE html>
<html>
  <?php require('config/database.php'); ?>
  <?php include('header.php'); ?>
  
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <?php include('topbar.php'); ?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include('sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php 

        /*if(!empty($_GET['module'])) {

          $module=$_GET['module'];
          include('module/'.$module.'.php');
        } else {

          include('module/dashboard.php');
        }*/
            include(ROOT . DS . 'application' . DS . 'views' . DS . $controller . DS . $action . '.php');       
        ?>
        <!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include('footer.php'); ?>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php include('script.php'); ?>
  </body>
</html>
