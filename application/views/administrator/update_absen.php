<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Absensi Siswa</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($siswa as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/absensi/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_siswa" value="<?php echo $jrs->id_siswa ?>">
<div class="form-group">
<label><?php echo $jrs->nama ?></label>
</div>

<div class="form-group">
<label><?php echo $jrs->nisn ?></label>
</div>

<div class="form-group">
<label>Absen</label>
<input type="hidden" name="status" >
<select name="status" class="form-control">
<option value="<?php echo $jrs->status ?>"><?php echo $jrs->status ?></option>
<option value="Hadir">Hadir</option>
<option value="Tidak Hadir">Tidak Hadir</option>
</select>
<?php echo form_error('jurusan','<div class="text-danger small" ml-3>')?>
</div>



<button type="submit" class="btn btn-success">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
