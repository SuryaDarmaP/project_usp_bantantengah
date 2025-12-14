<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<!-- Mirrored from bumdes.kemendesa.go.id/login-bumdesma by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2025 08:42:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Application">
    <meta name="keywords" content="Application">
    <meta name="author" content="PIXINVENT">
    <meta content="k24adhWiHuzohO7RvKCrcCiA22cpsaOeNOLP9uet" name="csrf-token" >
    <title>USP - BANTAN TENGAH</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/usp.png">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/template/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/template/mix/login.css">
    <!-- END: Custom CSS-->
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
                        <div class="card bg-authentication rounded-lg mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block  text-center align-self-center px-1 py-0">
                                    <img src="<?= base_url() ?>/assets/template/app-assets/images/pages/login.png" class="img-fluid" alt="branding logo">
                                    
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-lg mb-0 px-2">
                                        <div class="d-flex justify-content-center mt-2">
                                            <a href="#">
                                            <img src="<?= base_url() ?>/assets/img/usp.png" class="" width="30%" alt="branding logo">
                                            </a>
                                        </div>
                                                                                <div class="card-header pb-1 mt-1">
                                            <div class="card-title">
                                                
                                                <h4 class="mb-0 success text-bold-600 font-large-1">Login USP - Bantan Tengah</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Selamat Datang, Silakan Login disini.</p>
                                        <?php echo $this->session->flashdata('pesan')?>
                                        <div class="card-content mb-3">
                                            <div class="card-body pt-1">
                                                <form action="<?php echo base_url('administrator/auth/proses_login')?>" id="id-form" method="POST" class="form-btn-disabled">
                                                    <input type="hidden" name="_token" value="k24adhWiHuzohO7RvKCrcCiA22cpsaOeNOLP9uet">                                                    <fieldset class="col-12 form-label-group form-group position-relative has-icon-left">
                                                        <div class="col-12 form-check-inline">
                                                            <input type="text" name="username" class="form-control  " value="" id="username" placeholder="Username" required autofocus autocomplete="off">
                                                            
                                                        </div>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user success"></i>
                                                        </div>
                                                        <label for="user-name">Username</label>
                                                        <div>
                                                        <?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="col-12 form-label-group position-relative has-icon-left">
                                                        <div class="col-12 form-check-inline">
                                                            <input type="password" name="password" class="form-control "  value="" id="user-password" placeholder="Password" required>
                                                        </div>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock success"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                        <?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
                                                        </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="password/reset.html" class="card-link success">Forgot Password?</a></div>
                                                    </div>
                                                    <button type="submit" id="" class="btn-disabled btn btn-success float-left btn-inline mb-50 col-sm-auto">Login</button>
                                                    <a href="<?php echo base_url('auth/registrasi')?>" class="btn btn-outline-success float-right btn-inline mb-50 col-sm-auto">Registrasi Nasabah</a>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="template/mix/login.js"></script>
    <script src="template/custom/global.js"></script>
     <script src="../www.google.com/recaptcha/api.js"></script>
    <!-- BEGIN Vendor JS-->
    <script>
    $(document).ready(function(){
        $("#username").on('change', function (){
            const matchvalue = $(this).val();
            // alert(matchvalue);
            $.ajax({
                headers : {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type  : "POST",
                url   : "https://bumdes.kemendesa.go.id/desa",
                    data  : {
                        username : matchvalue,
                    },
                success: function(data)
                {   
                    $("#nama_desa").val(data);
                    // alert(data);
                },
                error: function ()
                {
                    $("#nama_desa").val('Data tidak ditemukan');
                    // alert('Error nama desa tidak di temukan');
                }
            });
        });
    });
</script>
    

</body>
<!-- END: Body-->


<!-- Mirrored from bumdes.kemendesa.go.id/login-bumdesma by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2025 08:42:36 GMT -->
</html>
