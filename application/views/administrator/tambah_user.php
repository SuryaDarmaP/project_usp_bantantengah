<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Input User</h6>
                                </div>
                                <div class="card-body">
<?php echo $this->session->flashdata('pesan_user') ?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/user/input_aksi')?>">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
<?php echo form_error('username','<div class="text-danger small" ml-3>')?>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
<?php echo form_error('password','<div class="text-danger small" ml-3>')?>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="Masukkan email" class="form-control">
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>
<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>
<div class="form-group">
<label>No HP</label>
<input type="text" name="no_hp" placeholder="Masukkan No hp" class="form-control">
<?php echo form_error('no_hp','<div class="text-danger small" ml-3>')?>
</div>
<div class="form-group">
<label>Level </label>
<select name="level" class="form-control" placeholder="-Pilih-">
<option value="Admin">Admin</option>
<option value="Nasabah">Nasabah</option>
<option value="Staff SAK">Staff SAK</option>
<option value="Analisis Kredit">Analisis Kredit</option>
</select>
<?php echo form_error('level','<div class="text-danger small" ml-3>')?>
</div>

<input type="hidden" name="blokir" value="N">


<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
</div>
</div> 