<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/menu.css" rel="stylesheet" type="text/css">

<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>
  Proses Input 3 </strong>
</center>
<hr />
<form name="form1" action="<?php echo set_link('proses/f_jadwal'); ?>" method="post">
<table width="452" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jadwal</td>
    <td><select name="jadwal" id="jadwal">
        <option value="">--pilih--</option>
        <?php
    $q ="select post_jadwal.*,jadwal_hari.*,jadwal_kelas.*,matkul.*
	from post_jadwal, jadwal_hari, jadwal_kelas, matkul
	where post_jadwal.id_jadwalhari=jadwal_hari.id_jadwalhari 
	and post_jadwal.id_jadwalkelas=jadwal_kelas.id_jadwalkelas and jadwal_kelas.id_matkul=matkul.id_matkul";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_postjadwal; ?>"><?php echo $dat->hari; echo " "; echo $dat->jam_k; echo " - "; echo $dat->nama_matkul; echo " ".$dat->kelas; ?></option>
        <?php } ?>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Dosen Pengajar </td>
    <td><select name="dosen" id="dosen">
        <option value="">--pilih--</option>
        <?php
    $q ="select * from dosen";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_dosen; ?>"><?php echo $dat->nama; ?></option>
        <?php } ?>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td><input name="proses" type="submit" class="tombol" id="proses2" value="simpan"></td>
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
