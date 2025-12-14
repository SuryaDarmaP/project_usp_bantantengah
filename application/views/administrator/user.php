<div class="container">

<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-success">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-success">
                    Data User
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('administrator/user/input') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah User
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. telp</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($users) :
                    foreach ($users as $user) :
                        $foto1 = $user['foto'];
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <?php             
                                if ($foto1==NULL){ ?>

                                <img width="30" src="<?php echo base_url() ?>assets/img/user.png" alt="<?= $user['username']; ?>" class="img-thumbnail rounded-circle">
                                                
                                <?php }else{ ?>

                                <img width="30" src="<?php echo base_url() ?>upload/foto/<?= $user['foto']; ?>" alt="<?= $user['username']; ?>" class="img-thumbnail rounded-circle">

                                <?php }   ?>
                                
                            </td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['no_hp']; ?></td>
                            <td><?= $user['alamat']; ?></td>
                            <td><?= $user['level']; ?></td>
                            <td>
                                <a href="<?= base_url('administrator/user/edit/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                    else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
