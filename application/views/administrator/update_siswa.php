<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Edit Data Siswa</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($siswa as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/siswa/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_siswa" value="<?php echo $jrs->id_siswa ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NISN</label>
<input type="text" name="nisn" value="<?php echo $jrs->nisn ?>" class="form-control" require>
<?php echo form_error('nisn','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jurusan</label>
<input type="hidden" name="jurusan" >
<select name="jurusan" class="form-control">
<option value="<?php echo $jrs->jurusan ?>"><?php echo $jrs->jurusan ?></option>
<option value="X TKJ 1">X TKJ 1</option>
<option value="X TKJ 2">X TKJ 2</option>
<option value="XI TKJ 1">XI TKJ 1</option>
<option value="XI TKJ 2">XI TKJ 2</option>
<option value="XII TKJ 1">XII TKJ 1</option>
<option value="XII TKJ 2">XII TKJ 2</option>
<option value="X TAB 1">X TAB 1</option>
<option value="X TAB 2">X TAB 2</option>
<option value="XI TAB 1">XI TAB 1</option>
<option value="XI TAB 2">XI TAB 2</option>
<option value="XII TAB 1">XII TAB 1</option>
<option value="XII TAB 2">XII TAB 2</option>
<option value="X TAV">X TAV</option>
<option value="XI TAV">XI TAV</option>
<option value="XII TAV">XII TAV</option>
<option value="X TITL">X TITL</option>
<option value="XI TITL">XI TITL</option>
<option value="XII TITL">XII TITL</option>
</select>
<?php echo form_error('jurusan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Kelas</label>
<input type="hidden" name="kelas" >
<select name="kelas" class="form-control">
<option value="<?php echo $jrs->kelas ?>"><?php echo $jrs->kelas ?></option>
<option value="Kelas 1 ">Kelas 1 </option>
<option value="Kelas 2 ">Kelas 2 </option>
<option value="Kelas 3 ">Kelas 3 </option>
</select>
<?php echo form_error('kecamatan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<input type="hidden" name="kelamin" >
<select name="kelamin" class="form-control">
<option value="<?php echo $jrs->kelamin ?>"><?php echo $jrs->kelamin ?></option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<?php echo form_error('kecamatan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Agama</label>
<input type="hidden" name="agama" >
<select name="agama" class="form-control">
<option value="<?php echo $jrs->agama ?>"><?php echo $jrs->agama ?></option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select>
<?php echo form_error('agama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tanggal Lahir</label>
<input type="date" name="tgl_lahir" value="<?php echo $jrs->tgl_lahir ?>" class="form-control" require>
<?php echo form_error('tgl_lahir','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tempat Lahir</label>
<input type="text" name="tempat_lahir" value="<?php echo $jrs->tempat_lahir ?>" class="form-control" require>
<?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" value="<?php echo $jrs->alamat ?>" class="form-control" require>
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NO HP</label>
<input type="text" name="no_hp" value="<?php echo $jrs->no_hp ?>" class="form-control" require>
<?php echo form_error('no_hp','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Foto</label>
<br><?php echo $jrs->foto ?>
<input type="file" name="foto" class="form-control" value="<?php echo $jrs->foto ?>" class="form-control" require>
<?php echo form_error('tahun','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
