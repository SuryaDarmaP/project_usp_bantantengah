<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Edit Data Guru</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($guru as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/guru/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_guru" value="<?php echo $jrs->id_guru ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tempat Lahir</label>
<input type="text" name="tempat_lahir" value="<?php echo $jrs->tempat_lahir ?>" class="form-control" require>
<?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tanggal Lahir</label>
<input type="date" name="tgl_lahir" value="<?php echo $jrs->tgl_lahir ?>" class="form-control" require>
<?php echo form_error('tgl_lahir','<div class="text-danger small" ml-3>')?>
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
<label>Mata Pelajaran</label>
<input type="text" name="mapel" value="<?php echo $jrs->mapel ?>" class="form-control" require>
<?php echo form_error('mapel','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jabatan</label>
<input type="text" name="jabatan" value="<?php echo $jrs->jabatan ?>" class="form-control" require>
<?php echo form_error('jabatan','<div class="text-danger small" ml-3>')?>
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
