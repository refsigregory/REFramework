<?php
// Default Title
if(!isset($title)) $title = ref_config("site_name"); 
// Show Header
if(!isset($header)) $header = true; 
// Show Navbar
if(!isset($navbar)) $navbar = true; 
// Show Content
if(!isset($content)) $content = true; 
// Show Footer
if(!isset($footer)) $footer = true; 
// Is Login
if(!isset($login)) $login = false; 

if($login) {
  $header = false;
  $navbar = false;
  $content = false;
  $footer = false;
}

// Send Data
if (isset($data)) {
  foreach ($data as $key => $value) {
       $data[$key] = $value; // send $data values to page content
  }
} else {
  $data['data'] = ""; 
}

header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');
header("Access-Control-Allow-Origin: *");
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url() . REF_PREFIX;?>-assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php if($login): ?>
<body class="hold-transition login-page">
<?php else: ?>
<body class="hold-transition skin-green-light sidebar-mini">
<?php endif;?>
<!-- Site wrapper -->
<div class="wrapper">
    <?php
        // Load Header
        if($header) ref_include('header');

        // Load Navbar
        if($navbar) ref_include('navbar');

        // Load Page
        ref_include('pages/' . $page, $data);

        // Load Footer
        if($footer) ref_include('footer');
    ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()


    $('#show-modal').modal('show');

  })
</script>

<!-- DataTables -->
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url() . REF_PREFIX;?>-assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#dataTable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      "language": {
                    "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
                    "sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Cari:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                    }
                }
    });
  })
</script>
</body>
</html>
