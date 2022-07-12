<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Jadwal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/menu.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #009999}
-->
</style>
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>Input Waktu </strong>
</center>
<hr />
<form name="form1" action="<?php echo set_link('proses/jadwal_hari'); ?>" method="post">
<table width="452" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="11">&nbsp;</td>
    <td width="145">Hari</td>
    <td width="9">:</td>
    <td width="248"><select name="hari" id="hari">
      <option value="senin">senin</option>
      <option value="selasa">selasa</option>
      <option value="rabu">rabu</option>
      <option value="kamis">kamis</option>
      <option value="jumat">jumat</option>
      <option value="sabtu">sabtu</option>
    </select></td>
    <td width="15">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jam</td>
    <td>:</td>
    <td>
	  <select name="jam_k" id="jam_k">
      		<option value="07.00-07.50">07.00-07.50</option>
      		<option value="07.50-08.40">07.50-08.40</option>
      		<option value="08.40-09.30">08.40-09.30</option>
      		<option value="10.00-10.50">10.00-10.50</option>
	  		<option value="10.50-11.40">10.50-11.40</option>
	  		<option value="11.40-12.30">11.40-12.30</option>
	  		<option value="12.40-13.30">12.40-13.30</option>
	  		<option value="13.30-14.20">13.30-14.20</option>
	  		<option value="14.20-15.10">14.20-15.10</option>
	  		<option value="15.40-16.30">15.40-16.30</option>
	  		<option value="16.30-17.20">16.30-17.20</option>
	  		<option value="17.20-18.10">17.20-18.10</option>
	  </select>
     
      </td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="simpan"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<br/>
<center>
  <strong>Input Kelas </strong>
</center>
<hr />
<form name="form2" action="<?php echo set_link('proses/jadwal_kelas'); ?>" method="post">
<table width="452" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="11">&nbsp;</td>
    <td width="145">Kode MK</td>
    <td width="9">:</td>
    <td width="248">      <select name="id_matkul" id="id_matkul">
        <option value="">--pilih--</option>
        <?php
    $q ="select * from matkul";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_matkul; ?>"><?php echo $dat->kd_matkul; echo " - "; echo $dat->nama_matkul; ?></option>
        <?php } ?>
      </select></td>
    <td width="15">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
      <option value="">--pilih--</option>
      <?php
    $q = $mysqli->query("select * from mahasiswa group by kelas");
    while ($datak = $q->fetch_object())
    {
	?>
      <option  value="<?php echo $datak->kelas; ?>"><?php echo $datak->kelas; ?></option>
      <?php } ?>
    </select>
      </td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="simpan"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<br/>
<center>
  <strong>Input Dosen </strong>
</center>
<hr />
<form name="form3" action="<?php echo set_link('proses/jadwal_dosen'); ?>" method="post">
<table width="452" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="11">&nbsp;</td>
    <td width="145">Dosen</td>
    <td width="9">:</td>
    <td width="248"><select name="dosen" id="dosen">
        <option value="">--pilih--</option>
        <?php
    $q ="select * from dosen";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($datad = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $datad->id_dosen;?>"><?php echo $datad->nama; ?></option>
        <?php } ?>
      </select></td>
    <td width="15"><input name="proses" type="submit" class="tombol" id="proses" value="simpan"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
