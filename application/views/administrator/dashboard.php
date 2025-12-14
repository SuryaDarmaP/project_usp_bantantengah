<div class="container-fluid">
    <div class="alert alert-info" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard <?php echo $level; ?>
    </div>
    <div  class="alert alert-info" role="alert">
        <center><h4 class="alert-heading">Selamat Datang!</h4></center>
        <center><p>Selamat Datang <strong><?php echo $username;?></strong> di Website USP Desa Bantan Tengah, Anda login sebagai <strong> <?php echo $level; ?></strong></p></center>
        <hr>
        <center> <img class="img-profile " src="<?php echo base_url() ?>assets/img/usp.png" width="20%" ></center>
        <p>
        <hr>
    
        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                                   </div>

                <!-- Start Modal Body -->
                <div class="modal-body">
                    <!-- Menu Baris 1 -->
                    <div class="row">
                        <!-- Sub-menu Control Panel -->
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">USER</p></a>
                            <i class="fas fa-3x fa-user graduate"></i>
                        </div>
                        <!-- Sub menu Control Panel -->
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">TAHUN AKADEMIK</p></a>
                            <i class="fas fa-3x fa-calendar-alt"></i>
                        </div>
                        <!-- Sub menu Control Panel -->
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">KRS</p></a>
                            <i class="fas fa-3x fa-edit"></i>
                        </div>
                        <!-- Sub menu Control Panel -->
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">KHS</p></a>
                            <i class="fas fa-3x fa-file-alt"></i>
                        </div>
                    </div>
                    <hr>
                    <!-- menu baris 2 -->
                    <div class="row">
                    <!-- Sub-menu Control Panel-->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small text-info">INPUT NILAI</p></a>
                        <i class="fas fa-3x fa-sort-numeric-down"></i>
                    </div>
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small text-info">CETAK TRANSKIP</p></a>
                        <i class="fas fa-3x fa-print"></i>
                    </div>
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small text-info">KATEGORI</p></a>
                        <i class="fas fa-3x fa-list-ul"></i>
                    </div>
                     <!-- Sub-menu Control Panel -->
                     <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small text-info">INFO KAMPUS</p></a>
                        <i class="fas fa-3x fa-bullhorn"></i>
                    </div>
                    </div>
                    <hr>
                    <!-- menu baris 3 -->
                    <div class="row">
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small-text-info">IDENTITAS</p></a>
                        <i class="fas fa-3x fa-id-card-alt"></i>
                    </div>
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small-text-info">TENTANG KAMPUS</p></a>
                        <i class="fas fa-3x fa-info-circle"></i>
                    </div>
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small-text-info">FASILITAS</p></a>
                        <i class="fas fa-3x fa-laptop"></i>
                    </div>
                    <!-- Sub-menu Control Panel -->
                    <div class="col-md-3 text-info text-center">
                        <a href="<?php echo base_url()?>"><p class="nav-link small-text-info">GALERI</p></a>
                        <i class="fas fa-3x fa-images"></i>
                    </div>
                    </div>
                </div>
                <!-- End Modal Body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>