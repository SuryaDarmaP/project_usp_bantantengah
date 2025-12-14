<!--<?= $this->session->flashdata('pesan'); ?>-->
<style>
/* HTML: <div class="loader"></div> */
.loader {
  width: 50px;
  aspect-ratio: 1;
  display: grid;
  border-radius: 50%;
  background:
    linear-gradient(0deg ,rgb(0 0 0/50%) 30%,#0000 0 70%,rgb(0 0 0/100%) 0) 50%/8% 100%,
    linear-gradient(90deg,rgb(0 0 0/25%) 30%,#0000 0 70%,rgb(0 0 0/75% ) 0) 50%/100% 8%;
  background-repeat: no-repeat;
  animation: l23 1s infinite steps(12);
}
.loader::before,
.loader::after {
   content: "";
   grid-area: 1/1;
   border-radius: 50%;
   background: inherit;
   opacity: 0.915;
   transform: rotate(30deg);
}
.loader::after {
   opacity: 0.83;
   transform: rotate(60deg);
}
@keyframes l23 {
  100% {transform: rotate(1turn)}
}
.currSign:before {
        content: 'Rp.';
    }
</style>

<div class="container">
<center><h2><?php echo $h_p;?></h2></center>
         <br>   

<div class="card shadow-sm border-bottom-success">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-success"><?php echo $h_p;?></h6>
</div>
    <!-- <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                   
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('users/paud_add') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data
                    </span> 
                </a>
            </div>
        </div>
    </div> -->
    <div class="table-responsive">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Tanggal Lahir</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Jaminan</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Foto Jaminan</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Anggunan</th>
                <th scope="col">Tempo</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>

                </tr>
            </thead>
            <?php if($level == "Nasabah"){ ?>
            <tbody>
                <?php
                $no = 1;
                if ($hasil_pengajuan) :
                    foreach ($hasil_pengajuan as $p) :
                        $status = $p['status'];
                        $id_user = $p['id_user'];

                        if($id_user == $id) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['ttl']; ?></td>
                            <td><?= $p['pekerjaan']; ?></td>
                            <td><?= $p['jaminan']; ?></td>
                            <td><?= $p['lokasi']; ?></td>
                            <td><?= $p['foto_jaminan']; ?></td>
                            <td><?= $p['tujuan']; ?></td>
                            <td><div class="myDIV"><?= $p['anggunan']; ?></div></td>
                            <td><?= $p['tempo']; ?></td>
                            <td>
                                <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                                <?php }else if($status=='Diterima'){ ?>

                                <?php echo anchor('administrator/nasabah/','<div class="btn btn-sm btn-primary">Pengajuan Diterima<i class="fa edit"></i></div>') ?>

                                <?php }else if($status=='Tidak Diterima'){ ?>

                                    <?php echo anchor('administrator/nasabah/','<div class="btn btn-sm btn-danger">Pengajuan Tidak Diterima<i class="fa edit"></i></div>') ?>
                                
                                <?php } ?>
                                                        
                            </td>
                            <td>
                            <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                            <?php }else if($status=='Diterima'){ ?>
                                
                            <a onclick="return confirm('Yakin Ingin Melanjutkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Lanjutkan
                            </span> 
                            </a>
                            <hr>
                            <a onclick="return confirm('Yakin Ingin Membatalkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-danger btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Batalkan
                            </span> 
                            </a>
                            <?php }else if($status=='Tidak Diterima'){ ?>
                                <center><i class="fa fa-times-circle fa-4x" style="color:red;"></i></center>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
            
        <?php } ?>

        <?php if($level == "Admin"){ ?>
            <tbody>
                <?php
                $no = 1;
                if ($hasil_pengajuan) :
                    foreach ($hasil_pengajuan as $p) :
                        $status = $p['status'];
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['ttl']; ?></td>
                            <td><?= $p['pekerjaan']; ?></td>
                            <td><?= $p['jaminan']; ?></td>
                            <td><?= $p['lokasi']; ?></td>
                            <td><?= $p['foto_jaminan']; ?></td>
                            <td><?= $p['tujuan']; ?></td>
                            <td><div class="myDIV"><?= $p['anggunan']; ?></div></td>
                            <td><?= $p['tempo']; ?></td>
                            <td>
                                <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                                <?php }else if($status=='Diterima'){ ?>

                                <?php echo anchor('administrator/admin/','<div class="btn btn-sm btn-primary">Pengajuan Diterima<i class="fa edit"></i></div>') ?>

                                <?php }else if($status=='Tidak Diterima'){ ?>

                                    <?php echo anchor('administrator/admin/','<div class="btn btn-sm btn-danger">Pengajuan Tidak Diterima<i class="fa edit"></i></div>') ?>
                                
                                <?php } ?>
                                                        
                            </td>
                            <td>
                            <?php             
                                if ($status==NULL){ ?>

                            <a onclick="return confirm('Yakin Ingin Melanjutkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Terima Pengajuan
                            </span> 
                            </a>
                            <hr>
                            <a onclick="return confirm('Yakin Ingin Membatalkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-danger btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Tolak Pengajuan
                            </span> 
                            </a>

                            <?php }else if($status=='Diterima'){ ?>
                                
                            <a  href="#" class="btn btn-sm btn-disable btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Terima Pengajuan
                            </span> 
                            </a>
                            <hr>
                            <a onclick="return confirm('Yakin Ingin Membatalkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-danger btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Tolak Pengajuan
                            </span> 
                            </a>
                            <?php }else if($status=='Tidak Diterima'){ ?>

                            <a onclick="return confirm('Yakin Ingin Melanjutkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Terima Pengajuan
                            </span> 
                            </a>
                            <hr>
                            <a  href="" class="btn btn-sm btn-disable btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Tolak Pengajuan
                            </span> 
                            </a>                            
                            
                            <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <?php } ?>

            <?php if($level == "Staff SAK"){ ?>
            <tbody>
                <?php
                $no = 1;
                if ($hasil_pengajuan) :
                    foreach ($hasil_pengajuan as $p) :
                        $status = $p['status'];
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['ttl']; ?></td>
                            <td><?= $p['pekerjaan']; ?></td>
                            <td><?= $p['jaminan']; ?></td>
                            <td><?= $p['lokasi']; ?></td>
                            <td><?= $p['foto_jaminan']; ?></td>
                            <td><?= $p['tujuan']; ?></td>
                            <td><div class="myDIV"><?= $p['anggunan']; ?></div></td>
                            <td><?= $p['tempo']; ?></td>
                            <td>
                                <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                                <?php }else if($status=='Diterima'){ ?>

                                <?php echo anchor('administrator/staff/','<div class="btn btn-sm btn-primary">Pengajuan Diterima<i class="fa edit"></i></div>') ?>

                                <?php }else if($status=='Tidak Diterima'){ ?>

                                    <?php echo anchor('administrator/staff/','<div class="btn btn-sm btn-danger">Pengajuan Tidak Diterima<i class="fa edit"></i></div>') ?>
                                
                                <?php } ?>
                                                        
                            </td>
                            <td>
                            <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                            <?php }else if($status=='Diterima'){ ?>
                                
                            <a onclick="return confirm('Yakin Ingin Melanjutkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Lanjutkan
                            </span> 
                            </a>
                            <hr>
                            <a onclick="return confirm('Yakin Ingin Membatalkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-danger btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Batalkan
                            </span> 
                            </a>
                            <?php }else if($status=='Tidak Diterima'){ ?>
                                <center><i class="fa fa-times-circle fa-4x" style="color:red;"></i></center>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <?php } ?>


            <?php if($level == "Analisis Kredit"){ ?>
            <tbody>
                <?php
                $no = 1;
                if ($hasil_pengajuan) :
                    foreach ($hasil_pengajuan as $p) :
                        $status = $p['status'];
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['ttl']; ?></td>
                            <td><?= $p['pekerjaan']; ?></td>
                            <td><?= $p['jaminan']; ?></td>
                            <td><?= $p['lokasi']; ?></td>
                            <td><?= $p['foto_jaminan']; ?></td>
                            <td><?= $p['tujuan']; ?></td>
                            <td><div class="myDIV"><?= $p['anggunan']; ?></div></td>
                            <td><?= $p['tempo']; ?></td>
                            <td>
                                <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                                <?php }else if($status=='Diterima'){ ?>

                                <?php echo anchor('administrator/analisis/','<div class="btn btn-sm btn-primary">Pengajuan Diterima<i class="fa edit"></i></div>') ?>

                                <?php }else if($status=='Tidak Diterima'){ ?>

                                    <?php echo anchor('administrator/analisis/','<div class="btn btn-sm btn-danger">Pengajuan Tidak Diterima<i class="fa edit"></i></div>') ?>
                                
                                <?php } ?>
                                                        
                            </td>
                            <td>
                            <?php             
                                if ($status==NULL){ ?>

                                <center>Peninjauan                       
                                <div class="loader"></div></center>

                            <?php }else if($status=='Diterima'){ ?>
                                
                            <a onclick="return confirm('Yakin Ingin Melanjutkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-check"></i></span>
                            <span class="text">
                                Lanjutkan
                            </span> 
                            </a>
                            <hr>
                            <a onclick="return confirm('Yakin Ingin Membatalkan?')"  href="<?= base_url('administrator/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-sm btn-danger btn-icon-split">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <span class="text">
                                Batalkan
                            </span> 
                            </a>
                            <?php }else if($status=='Tidak Diterima'){ ?>
                                <center><i class="fa fa-times-circle fa-4x" style="color:red;"></i></center>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <?php } ?>

        </table>
    </div>
</div>
<script>
    let x = document.querySelectorAll(".myDIV");
    for (let i = 0, len = x.length; i < len; i++) {
        let num = Number(x[i].innerHTML)
            .toLocaleString('en');
        x[i].innerHTML = num;
        x[i].classList.add("currSign");
    }
</script>