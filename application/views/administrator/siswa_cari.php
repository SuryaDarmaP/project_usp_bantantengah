
	<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Data Siswa</h6>
                                </div>

                                <div class="card-body">

            <div class="box-body box-profile">
            <?php
                if(count($cari)>0)
                {
                  foreach ($cari as $jrs) { ?>   
              <center> <p>Data Ini Terdapat Pada Tabel Siswa Kolom Ke <?php echo $jrs->id_siswa ?></p> <img class="img-profile rounded-circle" src="<?php echo base_url() ?>upload/siswa/<?php echo $jrs->foto ?>" width="150px" height="150px" ></center>

              <h3 class="profile-username text-center"><?php echo $jrs->nama ?></h3>

              <p class="text-muted text-center"><?php echo $jrs->nisn ?></p>
            <center>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jurusan :</b> <a class="pull-right"> <?php echo $jrs->jurusan ?></a>
                </li>
                <li class="list-group-item">
                  <b>Kelas :</b> <a class="pull-right"> <?php echo $jrs->kelas ?></a>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin :</b> <a class="pull-right"> <?php echo $jrs->kelamin ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir :</b> <a class="pull-right"> <?php echo $jrs->tgl_lahir ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Lahir :</b> <a class="pull-right"> <?php echo $jrs->tempat_lahir ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat :</b> <a class="pull-right"> <?php echo $jrs->alamat ?></a>
                </li>
                <li class="list-group-item">
                  <b>No HP :</b> <a class="pull-right"> <?php echo $jrs->no_hp ?></a>
                </li>
             </ul>
                </center>
              <br>
              <?php 
                
              }
            }
              else
              {
                echo "<center><li class='list-group-item'> <h4>Data tidak ditemukan</h4> </li></center><br>";
              }
            
              ?>
              <a href="<?php echo base_url('administrator/siswa') ?>" class="btn btn-success btn-block"><b>Kembali</b></a>
           
            </div>
           
            <!-- /.box-body -->
          </div>
          </div>