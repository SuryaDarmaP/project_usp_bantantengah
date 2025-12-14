<!--<?= $this->session->flashdata('pesan'); ?>-->
<style>
    .currSign:before {
        content: 'Rp.';
    }
</style>

<div class="container">
<center><h2><?php echo $pe;?></h2></center>
         <br>   

<div class="card shadow-sm border-bottom-success">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-success"><?php echo $pe;?></h6>
</div>
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                   
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('administrator/nasabah/input') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Form Pengajuan
                    </span> 
                </a>
            </div>
        </div>
    </div>
    <?php echo $this->session->flashdata('pesan1')?>
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
                <th scope="col">Aksi</th>

                </tr>
            </thead>

            <?php if($level == "Nasabah"){ ?>
            <tbody>
                <?php
                $no = 1;
                if ($pengajuan) :
                    foreach ($pengajuan as $p) :
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
                                <a href="<?= base_url('users/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a> <hr>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('administrator/nasabah/delete/') . $p['id_pengajuan'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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
                if ($pengajuan) :
                    foreach ($pengajuan as $p) :
                        
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
                                <a href="<?= base_url('users/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a> <hr>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('administrator/nasabah/delete/') . $p['id_pengajuan'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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
                if ($pengajuan) :
                    foreach ($pengajuan as $p) :
                        
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
                                <a href="<?= base_url('users/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a> <hr>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('administrator/nasabah/delete/') . $p['id_pengajuan'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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
                if ($pengajuan) :
                    foreach ($pengajuan as $p) :
                        
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
                                <a href="<?= base_url('users/paud_edit') . $p['id_pengajuan'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a> <hr>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('administrator/nasabah/delete/') . $p['id_pengajuan'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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