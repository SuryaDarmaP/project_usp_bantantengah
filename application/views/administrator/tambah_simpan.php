<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Form Input Simpanan</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/simpanan/input_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_simpanan" >

<div class="form-group">
<label>Tanggal Simpanan</label>
<input type="date" name="tanggal" placeholder="Masukkan Tanggal" class="form-control" require>
<?php echo form_error('tanggal','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Nama Anggota</label>
<input type="hidden" name="nama" >
<select name="nama" class="form-control">
<option value="">- Pilih Anggota -</option>
<?php
$no=1;
foreach ($anggota as $jrs) : ?>
<option value="<?php echo $jrs->nama ?>"><?php echo $jrs->nama ?></option>
<?php endforeach;?>

</select>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tipe Simpanan</label>
<input type="hidden" name="jenis" >
<select name="jenis" class="form-control">
<option value="">- Pilih Tipe Simpanan -</option>
<option value="Pokok">Pokok</option>
<option value="Sukarela">Sukarela</option>
</select>
<?php echo form_error('jenis','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jumlah (Rp)</label>
<input type="text" name="jumlah" placeholder="Masukkan Jumlah Simpanan" class="form-control" require>
<?php echo form_error('jumlah','<div class="text-danger small" ml-3>')?>
</div>


<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
</div>
</div> 
