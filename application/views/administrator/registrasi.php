<body class="bg-gradient-#ffa831">
<div class="container"><br><br><br>
<center> <img class="img-profile" src="<?php echo base_url() ?>assets/home/images/index.png" width="330px" height="120px" ><br>
</center>
<!-- Outer Row -->
<div class="row justify-content-center">
<div class="col-xl-5 col-lg-6 col-md-5">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">

<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg-12">
<div class="p-5">
<div class="text-center">
<h2 class="h4 text-gray-900 mb-4">Registrasi</h2> 
<?php echo $this->session->flashdata('pesan')?>
</div>
<!--tambahkan method post dan action arahkan kepada lokasi folder administrator/auth -->
<form method="post" action="<?php echo base_url('administrator/auth/aksi_upload')?>" enctype="multipart/form-data" class="user">
<div class="form-group">
<input type="text" class="form-control form-controluser" id="exampleInputEmail" ariadescribedby="emailHelp" placeholder="Username Anda" name="username">
<?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="password" class="form-control form-controluser" id="exampleInputPassword" placeholder="Password Anda" name="password">
<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="email" class="form-control form-controluser" id="exampleInputPassword" placeholder="Email Anda" name="email">
<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="text" class="form-control form-controluser" id="exampleInputPassword" placeholder="Jenis Kelamin" name="kelamin">
<?php echo form_error('kelamin','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="text" class="form-control form-controluser" id="exampleInputPassword" placeholder="No Hp Anda" name="no_hp">
<?php echo form_error('no_hp','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="text" class="form-control form-controluser" id="exampleInputPassword" placeholder="NIK" name="nik">
<?php echo form_error('nik','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="file" class="form-control form-controluser" id="exampleInputPassword" placeholder="KTP" name="ktp">
<?php echo form_error('ktp','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="text" class="form-control form-controluser" id="exampleInputPassword" placeholder="Alamat Anda" name="alamat">
<?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
</div>
<input type="hidden" name="level" value="Pegawai">
<input type="hidden" name="blokir" value="N">

<button style="background-color:#33cc00;" class="btn btn-success btn-user btn-block form-controluser">Daftar</button>
</p>
<a href="<?php echo base_url('')?>" class="btn btn-primary btn-primary" > HALAMAN UTAMA </a>
</p> Sudah punya akun ?
<a href="<?php echo base_url('administrator/auth')?>" class="btn btn-primary btn-warning" > Login  </a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>