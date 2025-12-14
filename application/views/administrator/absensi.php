
	<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Absensi Siswa</h6>
                                </div>

                                <div class="card-body">

                                <?php echo anchor('administrator/absensi/reset','<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-trash"></i> Reset Absensi Siswa</button>')?>
                               
                                <?php echo $this->session->flashdata('pesan1')?> 
                                <br>

                                <form class="navbar-search" action="<?php echo base_url('administrator/absensi/hasil_absen')?>" action="GET">
                                <div class="input-group">
                                <input type="text" name="cari" class="form-control bg-light border-0 small" value="Search NISN..." aria-label="Search" require_once>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit" value="Cari">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                                </div>
                                </form>
                                <br>

                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Absensi</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">NO HP</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Absensi</th>
                                    </tr>
                                     <?php
                                    $no=1;
                                    foreach ($siswa as $jrs) : ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->nisn ?></td>
                                    <td><?php echo $jrs->tempat_lahir ?></td>
                                    <td><?php echo $jrs->tgl_lahir ?></td>
                                    <td><?php echo $jrs->kelamin ?></td>
                                    <td><?php echo $jrs->kelas ?></td>
                                    <td><?php echo $jrs->jurusan ?></td>
                                    <td><?php echo $jrs->status ?></td>
                                    <td><?php echo $jrs->alamat ?></td>
                                    <td><?php echo $jrs->no_hp ?></td>
                                    <td><img class="img-profile "  src="<?php echo base_url() ?>upload/siswa/<?php echo $jrs->foto; ?>" width="100px" height="100px" ></td>
                                    <td width="20px"><?php echo anchor('administrator/absensi/update/'.$jrs->id_siswa,'<div class="btn btn-sm btn-warning">Absen<i class="fa edit"></i></div>') ?></td>


                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        