<?php
$data['title'] = "QCELL PULSA";
$data['page'] = 'web/page-halaman_utama';
ref_function('my-function');

ref_include("web/header");
?>

<!--/banner-->
	<section class="banner-top">
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
							<h3><b>ISI PULSA</b> ONLINE MURAH</h3>
						<p>Isi pulsa dengan mudah, harga murah terjangkau.</p>						
					</div>
				</div>
		    </div>
		<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="row">
			<div class="col-lg-12 trans_load_banner_bottom_left">
				<div class="trans-load_banner_bottom_pos">
					<div class="trans_banner_bottom_pos_grid">
						<div class="col-xs-9 trans1_banner_bottom_grid_right">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="true">Pulsa Online</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#paket" role="tab" aria-controls="paket" aria-selected="false">Paket</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#token" role="tab" aria-controls="token" aria-selected="false">Token</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#emoney" role="tab" aria-controls="emoney" aria-selected="false">E-money</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lainnya" role="tab" aria-controls="lainnya" aria-selected="false">Lainnya</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
<form>
  <div class="tab-pane fade show active" id="pulsa" role="tabpanel" aria-labelledby="pulsa-tab">
		<div class="form-group">
			<input type="text" class="form-control" name="pesan" placeholder="Nomor Handphone" >
		</div>
		<div class="form-group">
			<select class="form-control" name="produk">
				<?php
					$kategori = getAllKategori();
				?>
				<?php if($kategori != ""): foreach($kategori as $row):?>
					<option value="<?=$row['id_kategori'];?>"><?=$row['nama_kategori'];?></option>
				<?php endforeach; endif;?>
			</select>
		</div>
		<div class="form-group">
			<button class="btn btn-primary">PESAN SEKARANG</button>
		</div>
  </div>
  
  <div class="tab-pane fade" id="paket" role="tabpanel" aria-labelledby="paket-tab">
  		<div class="form-group">
			<input type="text" class="form-control" name="nomor_handphone" placeholder="Nomor Handphone" >
		</div>
  </div>
  
  <div class="tab-pane fade" id="token" role="tabpanel" aria-labelledby="token-tab">
  		<div class="form-group">
			<input type="text" class="form-control" name="nomor_handphone" placeholder="Nomor Handphone" >
		</div>
  </div>
  
  <div class="tab-pane fade" id="emoney" role="tabpanel" aria-labelledby="emoney-tab">
  		<div class="form-group">
			<input type="text" class="form-control" name="nomor_handphone" placeholder="Nomor Handphone" >
		</div>
  </div>
  
  <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
  
  </div>
</form>
</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	</div>
	</section>
	<!--//banner-->

<?php if(isset($_GET['pesan']) && isset($_GET['produk'])):?> 
<!-- Modal2 -->
<div class="modal fade" id="modalVoucher" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
				<h3 class="transinfo_sign">Pilih Voucher</h3>	
						<div class="login-form">
							<form action="<?=base_url('createOrder');?>" method="post">
								<input type="hidden" name="nomor_handphone" value="<?=$_GET['pesan'];?>">
								<input type="hidden" name="id_kategori" value="<?=$_GET['produk'];?>">
								<select name="id_voucher">
									<?php
										$voucher = getAllVoucherByKategori($_GET['produk']);
									?>
									<?php if($voucher != ""): foreach($voucher as $row):?>
										<option value="<?=$row['id_voucher'];?>"><?=$row['nama_voucher'];?> (Rp. <?=number_format($row['harga_jual']);?>)</option>
									<?php endforeach; endif;?>
								</select>
								<select name="id_pembayaran">
									<?php
										$pembayaran = getAllPembayaran();
									?>
									<?php if($pembayaran != ""): foreach($pembayaran as $row):?>
										<option value="<?=$row['id_pembayaran'];?>" <?=($row['akses_pembayaran'] == "close" && empty($_SESSION['data'])) ? 'disabled="disabled"' : '';?>><?=$row['nama_pembayaran'];?> <?=($row['akses_pembayaran'] == "close") ? '(Hanya Member)' : '';?></option>
									<?php endforeach; endif;?>
								</select>
								<input type="submit" value="PESAN SEKARANG">
							</form>
						</div>
						<p></p>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal2 -->	
<?php endif;?>

<?php
ref_include("web/footer");
?>
