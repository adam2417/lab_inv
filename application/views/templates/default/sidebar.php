<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
            
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo BASE_PATH; ?>/default/images/avatar.png<?php //echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info"><p>Selamat datang, 
              <?php if(isset($_SESSION['username'])) { ?> <?php echo '<br/>'.$_SESSION['username']; ?><?php } else { echo "Guest"; } ?></p>
              <span class="small"><?php echo fungsi_hari().', '.date('d M Y'); ?></span>
            </div>
          </div>
            

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <?php if(isset($_SESSION["username"])) {?>
                <li><a href="<?php echo BASE_PATH; ?>/report/rptdaftarinventory"><i class="fa fa-circle-o"></i> Laporan Daftar Inventory</a></li>
                <li><a href="<?php echo BASE_PATH; ?>/report/rptpemakaianalat"><i class="fa fa-circle-o"></i> Laporan Pemakaian Alat</a></li>
                  <?php } ?>
                <li><a href="<?php echo BASE_PATH; ?>/report/rpthasilpemeriksaan"><i class="fa fa-circle-o"></i> Laporan Hasil Pemeriksaan</a></li>
              </ul>
            </li>
              <?php if(isset($_SESSION["username"])) {?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo BASE_PATH; ?>/praktikum/index"><i class="fa fa-circle-o"></i> Praktikum</a></li>
                <li><a href="<?php echo BASE_PATH; ?>/pemeriksaan/index"><i class="fa fa-circle-o"></i> Pemeriksaan</a></li>
              </ul>
            </li>
            <li class="header">ADMINISTRASI</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bed"></i>
                <span>Setup</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo BASE_PATH; ?>/pasien/index"><i class="fa fa-circle-o"></i> Pasien</a></li>
                <li><a href="<?php echo BASE_PATH; ?>/dokter/index"><i class="fa fa-circle-o"></i> Dokter</a></li>
                <li><a href="<?php echo BASE_PATH; ?>/pegawai/index"><i class="fa fa-circle-o"></i> Pegawai</a></li>
                <li><a href="<?php echo BASE_PATH; ?>/inventaris/index"><i class="fa fa-circle-o"></i> Inventaris</a></li>
              </ul>
            </li>
              <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>