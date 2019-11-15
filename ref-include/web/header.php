
<!DOCTYPE html>
<html>
<head>
	<title>QCELL Pulsa | Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="<?=base_url();?>ref-assets/web/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="<?=base_url();?>ref-assets/web/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?=base_url();?>ref-assets/web/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="<?=base_url();?>ref-assets/web/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url();?>ref-assets/web/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<header>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="<?=base_url();?>">QCELL<span><i class="fab fa-mobile"></i></span>pulsa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#about">Daftar Harga</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#about">Hubungi Kami</a>
      </li>
    </ul>
    <?php if(empty($_SESSION['data'])):?>
    <div class="navbar-text float-right">
    <a href="<?=base_url('register');?>"><p class="right-p"><button class="btn btn-primary"><i class="fas fa-user" aria-hidden="true"></i> Sign Up</button></p></a>
    </div>
    <div class="navbar-text float-right">
     <a href="<?=base_url('login');?>"><p class="right-p"><button class="btn btn-primary"><i class="fas fa-key" aria-hidden="true"></i>Sign In</p></button></a>
    </div>
    <?php else:?>
      <div class="navbar-text float-right">
      <a href="<?=base_url('auth/logout');?>"><p class="right-p"><button class="btn btn-primary"><i class="fas fa-log-out" aria-hidden="true"></i> Log Out</button></p></a>
    </div>
    <?php endif;?>
  </div>
</nav>
		</div>
</header>