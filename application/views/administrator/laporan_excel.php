<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<center><h3>DATA SISWA TIDAK HADIR DI SMK NEGERI 1 MINAS</h3></center>
<br>

<table border="1" width="100%">

<thead>

<tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">NO HP</th>
                                    <th scope="col">Absensi</th>

 </tr>

</thead>

<tbody>

<?php $no=1; foreach($siswa as $jrs) { ?>

<tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td>NISN-<?php echo $jrs->nisn ?></td>
                                    <td><?php echo $jrs->tempat_lahir ?></td>
                                    <td><?php echo $jrs->tgl_lahir ?></td>
                                    <td><?php echo $jrs->kelamin ?></td>
                                    <td><?php echo $jrs->agama ?></td>
                                    <td><?php echo $jrs->kelas ?></td>
                                    <td><?php echo $jrs->jurusan ?></td>
                                    <td><?php echo $jrs->alamat ?></td>
                                    <td><?php echo $jrs->no_hp ?></td>
                                    <td><?php echo $jrs->status ?></td>

 </tr>

<?php } ?>

</tbody>

</table>