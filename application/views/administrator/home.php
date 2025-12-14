<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css" />
    <link rel="icon" href="<?= base_url() ?>/assets/home/images/index.png">
    <title>Beranda &mdash; USP - BANTAN TENGAH</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide&effect=neon|outline|emboss|shadow-multiple">
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:#f1f1f1;" >
        <div class="container" >
        <img src="<?= base_url() ?>/assets/home/images/BUMDES.png" width="8%" alt="">
            <a class="navbar-brand " href="<?= base_url() ?>" style="font-family: ARIAL, Helvetica, sans-serif;font-weight: bold;">BUMDES BANTAN TENGAH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/auth/tentang')?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/auth/faq')?>">FAQ</a>
                    </li> -->
                </ul>
                <div class="ml-auto">
                    <!-- <a href="<?php echo base_url('auth/login')?>" class="btn btn-outline-espeaking" >Masuk</a> -->
                    <a href="<?php echo base_url('auth/registrasi')?>" style="background-color:#33cc00;" class="btn btn-espeaking" >Daftar Nasabah</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container-md main-content">
    
    <section>
	<!-- Hero -->
	<!-- <div class="d-flex flex-md-row flex-column mb-5">
		<div class="col-md-6 d-flex align-item-center justify-content-center flex-column order-2 order-md-1 p-0">
			<h2>Selamat Datang di BUMDES BANTAN TENGAH</h2>
			<p class="mt-2">Pelayanan Pengelolaan Simpanan di <em>BUMDES</em> Untuk Masyarakat Desa BANTAN TENGAH </p>
			<div class="mt-2">
				<a href="<?php echo base_url('administrator/auth/registrasi')?>" style="background-color:#33cc00;" class="btn btn-espeaking">Daftar Sekarang</a>
			</div>
		</div>
		<div class="col-md-6 order-1 order-md-2 p-0">
			<img src="<?= base_url() ?>/assets/home/images/Bumdes-Badan-Usaha-Milik-Desa.jpg" width="80%" alt="">
		</div>
	</div> -->
	<!-- Tentang Section -->
	<!-- FAQs Section -->
    </section>

    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN BUMDES</h1>
                    <?php echo $this->session->flashdata('pesan1') ?>
                  </div>
                  <form method="post"action="<?php echo base_url('administrator/auth/proses_login')?>"class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="username" placeholder="Masukkan Username ...">
                      <?php echo form_error('username','<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password ..." name="password">
                      <?php echo form_error('password','<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-success btn-user btn-block" style="background-color:#33cc00;">
                      Login
                    </button>                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    

    </div>
    <!-- Footer -->
    <footer style="background-color:#33cc00;" class="py-3 bg-espeaking text-center text-white">
        <span>Copyright &copy; 2025 BUMDES BANTAN TENGAH Team</span>
    </footer>

    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>