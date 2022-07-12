<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Jadwal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/menu.css" rel="stylesheet" type="text/css">

<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>
  Finishing Jadwal </strong>
</center>
<hr />
<form name="formn" action="<?php echo set_link('proses/t_jadwal'); ?>" method="post">
<table width="500" border="0" class="BODYTABLE table-responsive">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="11">&nbsp;</td>
    <td width="248">Jadwal</td>
    <td width="15">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select name="jadwal" id="jadwal">
      <option value="">--pilih--</option>
      <?php
    $q ="SELECT n_jadwal.*, f_jadwal . * , post_jadwal . * , jadwal_hari . * , jadwal_kelas . * , matkul . * , dosen . *
FROM n_jadwal, f_jadwal, post_jadwal, jadwal_hari, jadwal_kelas, matkul, dosen
WHERE n_jadwal.id_fjadwal=f_jadwal.id_fjadwal 
AND f_jadwal.id_postjadwal = post_jadwal.id_postjadwal
AND f_jadwal.id_dosen = dosen.id_dosen
AND post_jadwal.id_jadwalhari = jadwal_hari.id_jadwalhari
AND post_jadwal.id_jadwalkelas = jadwal_kelas.id_jadwalkelas
AND jadwal_kelas.id_matkul = matkul.id_matkul";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
      <option  value="<?php echo $dat->id_njadwal; ?>"><?php echo $dat->hari." ".$dat->jam_k." - ".$dat->nama_matkul." - ".$dat->kelas." - ".$dat->nama." - ".$dat->ruang;  ?></option>
      <?php } ?>
    </select></td>  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="simpan"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>
<br/>
<hr />
<br/>
<center>
  
</center>
</body>
</html>
