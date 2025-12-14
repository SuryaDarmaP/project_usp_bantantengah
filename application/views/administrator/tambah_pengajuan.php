<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Pengajuan</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/nasabah/aksi_upload')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_pengajuan" >
<input type="hidden" value="<?php echo $id ?>" name="id_user" >
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" require>
<?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tempat Tanggal Lahir</label>
<input type="text" name="ttl" placeholder="Contoh Bantan Sari, 02-10-1995" class="form-control" require>
<?php echo form_error('ttl','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Pekerjaan</label>
<input type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan" class="form-control" require>
<?php echo form_error('pekerjaan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jaminan</label>
<input type="text" name="jaminan" placeholder="Masukkan jaminan" class="form-control" require>
<?php echo form_error('jaminan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Lokasi</label>
<input type="text" name="lokasi" placeholder="Masukkan lokasi" class="form-control" require>
<?php echo form_error('lokasi','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Foto Jaminan</label>
<input type="file" name="foto_jaminan" class="form-control" placeholder="Masukkan foto_jaminan" class="form-control" require>
<?php echo form_error('foto_jaminan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tujuan</label>
<input type="text" name="tujuan" placeholder="Masukkan tujuan" class="form-control" require>
<?php echo form_error('tujuan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Anggunan</label>
<input type="text" name="anggunan" placeholder="Masukkan anggunan" class="form-control" require>
<?php echo form_error('anggunan','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tempo</label>
<input type="hidden" name="tempo" >
<select name="tempo" class="form-control">
<option value="">--Pilih-</option>
<option value="12">12 Bulan</option>
<option value="24">24 Bulan</option>
<option value="36">36 Bulan</option>
<option value="48">48 Bulan</option>
</select>
<?php echo form_error('tempo','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
</div>
</div>
