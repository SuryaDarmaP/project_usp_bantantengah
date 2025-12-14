<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<div class="container-fluid">
<div class="alert alert-info" role="alert">
<h3> Data Rekap </h3>
<hr> 
 
 <table border="1" width="100%">
 <thead>
 <tr>
                                    <th>Nama Penerima</th>
                                    <th>Jalan</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Jenis</th>
                                    <th>Jumlah Barang</th>
                                    <th>Nilai Barang</th>
                                    <th>Tahun</th>
                                    <th>Jenis Bantuan</th>
 </tr>
 </thead>
 <tbody>
 <?php $i=1; foreach($cari as $p) { ?>
 <tr>
                                    <td><?= $p->nama ?></td>
                                    <td><?= $p->alamat ?></td>
                                    <td><?= $p->rt ?></td>
                                    <td><?= $p->rw ?></td>
                                    <td><?= $p->kelurahan ?></td>
                                    <td><?= $p->kecamatan ?></td>
                                    <td><?= $p->jenis ?></td>
                                    <td><?= $p->jmlh_barang ?></td>
                                    <td><?= $p->nilai_barang ?></td>
                                    <td><?= $p->tahun ?></td>
                                    <td><?= $p->jenis_bantuan ?></td>
 </tr>
 <?php $i++; } ?>
 </tbody>
 </table>

 </div>
