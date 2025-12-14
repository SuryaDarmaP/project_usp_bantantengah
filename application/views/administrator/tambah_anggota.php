<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Input Data Anggota</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/anggota/aksi_upload')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_anggota" >
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NIK</label>
<input type="text" name="nik" placeholder="Masukkan NIK" class="form-control" require>
<?php echo form_error('nik','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<input type="hidden" name="kelamin" >
<select name="kelamin" class="form-control">
<option value="">--Pilih-</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<?php echo form_error('kelamin','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" require>
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NO HP</label>
<input type="text" name="no_hp" placeholder="Masukkan NO HP" class="form-control" require>
<?php echo form_error('no_hp','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>KTP</label>
<input type="file" name="ktp" class="form-control" placeholder="Masukkan KTP" class="form-control" require>
<?php echo form_error('ktp','<div class="text-danger small" ml-3>')?>
</div>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
</div>
</div>
