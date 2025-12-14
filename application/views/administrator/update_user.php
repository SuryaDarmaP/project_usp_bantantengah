<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Update User</h6>
                                </div>
                                <div class="card-body">

<div class="alert alert-info" role="alert">
<i class="fa fa-university"></i> Form Update User
</div>
<?php foreach($user as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/user/update_aksi');?>">

<input type="hidden" name="id" value="<?php echo $jrs->id ?>">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" value="<?php echo $jrs->username ?>">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" value="<?php echo $jrs->password ?>">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $jrs->email ?>">
</div>

<div class="form-group">
<label>Level </label>
<!-- input id_text tidak perlu kita tampilkan, karena nanti id nya akan otomatis ter upda
te karena menggunakan fungsi auto incremen -->
<input type="hidden" name="level" value="<?php echo $jrs->level ?>">
<select name="level" class="form-control" value="<?php echo $jrs->level ?>">
<option value="<?php echo $jrs->level ?>">-<?php echo $jrs->level ?>-</option>
<option value="Admin">Admin</option>
<option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
<option value="Guru BK">Guru BK</option>
</select>
</div>

<div class="form-group">
<label>Blokir </label>
<input type="hidden" name="blokir" value="<?php echo $jrs->blokir ?>">
<select name="blokir" class="form-control" placeholder="-Pilih-">
<option value="N">NO</option>
<option value="Y Desa">YES</option>
</select>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
<?php endforeach; ?>
</div>
</div>