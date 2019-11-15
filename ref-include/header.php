
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php if(isset($logo_mini)): echo $logo_mini; else: echo ref_config("site_initial"); endif;?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php if(isset($logo_lg)): echo $logo_lg; else: echo ref_config("site_name"); endif;?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('/ref-assets/img/');?>avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$_SESSION['data']['username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('/ref-assets/img/');?>avatar5.png" class="img-circle" alt="User Image">

                <p>
                <?=$_SESSION['data']['username'];?>
                  <small><?=$_SESSION['data']['role'];?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url() . "logout";?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>