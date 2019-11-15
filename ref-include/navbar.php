
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=base_url();?>akun">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <?php if($_SESSION['data']['role'] == 'admin'):?>
        <li>
          <a href="<?=base_url();?>akun/user">
            <i class="fa fa-users"></i> <span>Data User</span>
          </a>
        </li>
        <?php endif;?>

        <?php if($_SESSION['data']['role'] == 'admin'):?>
        <li>
          <a href="<?=base_url();?>akun/kategori">
            <i class="fa fa-file"></i> <span>Data Kategori</span>
          </a>
        </li>
        <?php endif;?>

        <?php if($_SESSION['data']['role'] == 'admin'):?>
        <li>
          <a href="<?=base_url();?>akun/voucher">
            <i class="fa fa-file"></i> <span>Data Voucher</span>
          </a>
        </li>
        <?php endif;?>

        <li>
          <a href="<?=base_url();?>akun/profile">
            <i class="fa fa-user"></i> <span>Data Pribadi</span>
          </a>
        </li>

        <!--
        <li>
          <a href="<?=base_url();?>akun/notif">
            <i class="fa fa-bell"></i> <span>Pemberitahuan</span>
          </a>
        </li>

        
        <li>
          <a href="<?=base_url();?>akun/saldo">
            <i class="fa fa-money"></i> <span>Saldo</span>
          </a>
        </li>-->

        <li>
          <a href="<?=base_url();?>akun/deposit">
            <i class="fa fa-credit-card"></i> <span>Deposit</span>
          </a>
        </li>

        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Menu</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sub Menu</a></li>
          </ul>
        </li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>