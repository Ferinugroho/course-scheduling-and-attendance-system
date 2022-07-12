<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Jadwal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>
  Jadwal
</strong>
</center>
<hr />
<table border="0" class="table">
  <tr>
    <th>No</td>
    <th><div align="center">Hari</div></th>
    <th><div align="center">Jam</div></th>
    <th><div align="center">Matakuliah</div></th>
    <th><div align="center">Kelas</div></th>
    <th><div align="center">Dosen</div></th>
    <th><div align="center">Ruang</div></th>
  </tr> 
  <?php
  $no = 1;
    $qu ="SELECT t_jadwal.*,n_jadwal.*, f_jadwal . * , post_jadwal . * , jadwal_hari . * , jadwal_kelas . * , matkul . * , dosen . *
FROM t_jadwal,n_jadwal, f_jadwal, post_jadwal, jadwal_hari, jadwal_kelas, matkul, dosen
WHERE t_jadwal.id_njadwal=n_jadwal.id_njadwal 
AND n_jadwal.id_fjadwal=f_jadwal.id_fjadwal 
AND f_jadwal.id_postjadwal = post_jadwal.id_postjadwal
AND f_jadwal.id_dosen = dosen.id_dosen
AND post_jadwal.id_jadwalhari = jadwal_hari.id_jadwalhari
AND post_jadwal.id_jadwalkelas = jadwal_kelas.id_jadwalkelas
AND jadwal_kelas.id_matkul = matkul.id_matkul";
    $limit = 146;
    $quer = $apps->set_paging($mysqli, $qu, $limit);
    while ($dataj = $quer->fetch_object())

    {
        $no+1;
    ?>
  <tr>
    <td><?php echo $no++ ; ?></td>
    <td><div align="center"><?php echo $dataj->hari; ?></div></td>
    <td><div align="center"><?php echo $dataj->jam_k; ?></div></td>
    <td><div align="center"><?php echo $dataj->nama_matkul; ?></div></td>
    <td><div align="center"><?php echo $dataj->kelas; ?></div></td>
    <td><div align="center"><?php echo $dataj->nama; ?></div></td>
    <td><div align="center"><?php echo $dataj->ruang; ?></div></td>
  </tr>
<?php  }?>  
</table>
</body>
</html>
