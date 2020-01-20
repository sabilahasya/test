<?php $this->load->view('theme/header'); ?>

<header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
      <h1 class="text-uppercase mb-0">SELAMAT DATANG</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">APLIKASI DESA DIGITAL QUICKRESPONSE</h2>
    </div>
  </header>
<center>
<div class="container">
	<br>
		<button class="btn btn-primary">
			<a href="<?php echo base_url()?>index.php/C_login/login/a" class="btn btn-primary btn-block">WARGA</a>
		</button>
		<button class="btn btn-primary">
			<a href="<?php echo base_url()?>index.php/C_login/login/b" class="btn btn-primary btn-block">KEPALA SEKSI</a>
		</button>
  </div>
  <br>
  <br>
 </center>
 <br>
 <br>
 

<?php $this->load->view('theme/footer');?>