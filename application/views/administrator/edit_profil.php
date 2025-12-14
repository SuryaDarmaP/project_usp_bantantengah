<div class="container-fluid">
    <div class="alert alert-info"role="alert">
        <i class="fa fa-university"></i> Edit Profil</div>
          <section id="konten">
            <?php foreach($user as $jrs) : ?>
              <form class="form" enctype="multipart/form-data" action="<?php echo base_url('administrator/user/edit_aksi')?>" method="POST">
                
                <input type="hidden" name="id" value="<?php echo $jrs->id ?>">
                
                  <div class="form-group">
                    <label>Nama</label>
                      <input type="text" name="username" class="form-control" value="<?php echo $jrs->username ?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" name="email" class="form-control" value="<?php echo $jrs->email ?>">
                  </div>
                  <div class="form-group">
                 <div class="form-group">
                    <label>Level</label>
                      <input type="text" name="level" class="form-control" value="<?php echo $jrs->level ?>">
                  </div>

                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-send"></i> Edit</button>
                  </div>

              </form>
            <?php endforeach; ?>

          </section>


</div>