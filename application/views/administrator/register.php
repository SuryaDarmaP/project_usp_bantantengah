<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<!-- Mirrored from bumdes.kemendesa.go.id/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2025 08:45:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Application">
    <meta name="keywords" content="Application">
    <meta name="author" content="PIXINVENT">
    <meta content="k24adhWiHuzohO7RvKCrcCiA22cpsaOeNOLP9uet" name="csrf-token" >
    <title>USP - Bantan Tengah</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/usp.png">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/mix/login.css">
    <!-- END: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/app-assets/vendors/css/forms/select/select2.min.css">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
        <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
            <br/>
            <div class="content-body">
                <section class="row flexbox-container px-1 py-1">
                    <div class="col-lg-12 col-12 d-flex justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="d-flex justify-content-center mt-2">
                                    <img src="<?php echo base_url() ?>assets/img/usp.png" class="" width="9%" alt="branding logo">
                                </div>
                               
                                <div class="card-header justify-content-center mb-0">
                                    <h4 class="card-title">Halaman Registrasi Nasabah USP Bantan Tengah</h4> 
                                </div>
                                <div class="card-content">
                                        <div class="card-body">
                                            <form action="<?php echo base_url('administrator/auth/aksi_upload')?>" id="id-form" enctype="multipart/form-data" method="POST" class="form-btn-disabled">
                                                <input type="hidden" name="_token" value="k24adhWiHuzohO7RvKCrcCiA22cpsaOeNOLP9uet">                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12 col-12">
                                                            <div class="divider divider-left">
                                                                <div class="divider-text">
                                                                    <i class="feather icon-user-check mr-1"></i>Registrasi
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="level" value="Nasabah">
                                                            <input type="hidden" name="blokir" value="N">

                                                            <div class="form-group">
                                                                <label for="nama">Username</label>
                                                                <input type="text" name="username" id="username" class="form-control " value="" placeholder="Username anda" required autofocus autocomplete="off">
                                                                <p><?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" name="nama" id="nama" class="form-control " value="" placeholder="Nama anda" required autofocus autocomplete="off">
                                                                <p><?php echo form_error('nama','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password" id="password" class="form-control " value="" placeholder="Masukkan Password" required autofocus autocomplete="off">
                                                                <p><?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" id="email" class="form-control " value="" placeholder="Email aktif" required autofocus autocomplete="off">
                                                                <p><?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="no_hp">No Hp</label>
                                                                <input type="text" name="no_hp" id="no_hp" class="form-control " value="" placeholder="No Hp anda" required autofocus autocomplete="off">
                                                                <p><?php echo form_error('no_hp','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>KTP</label>
                                                                <input type="file" name="ktp" class="form-control" placeholder="Masukkan KTP" class="form-control" require>
                                                                <?php echo form_error('ktp','<div class="text-danger small" ml-3>')?>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <textarea name="alamat" id="alamat" class="form-control " placeholder="Alamat lengkap" required></textarea>
                                                                <p><?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?></p>
                                                            </div>
                                                        </div>

                                                        </div>
                                                        
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success mr-1 mb-1">Registrasi</button>
                                                            <a href="<?php echo base_url('')?>" class="btn btn-outline-warning mr-1 mb-1">Kembali ke login</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>

            </div>
    </div>    
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url() ?>assets/template/mix/login.js"></script>
    <script src="<?php echo base_url() ?>assets/template/custom/global.js"></script>
     <script src="../www.google.com/recaptcha/api.js"></script>
    <!-- BEGIN Vendor JS-->
    <script src="<?php echo base_url() ?>assets/template/app-assets/js/scripts/forms/select/form-select2.js"></script>


</body>
<!-- END: Body-->


<!-- Mirrored from bumdes.kemendesa.go.id/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2025 08:45:46 GMT -->
</html>
