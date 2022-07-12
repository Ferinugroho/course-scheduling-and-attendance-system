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
  Proses Input 2 </strong>
</center>
<hr />
<form name="form1" action="<?php echo set_link('proses/post_jadwal'); ?>" method="post">
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
    <td width="145">Hari-Jam</td>
    <td width="9">:</td>
    <td width="248"><select name="HJ" id="HJ">
        <option value="">--pilih--</option>
        <?php
    $q ="select * from jadwal_hari";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_jadwalhari; ?>"><?php echo $dat->hari; echo " - "; echo $dat->jam_k; ?></option>
        
        <?php } ?>
      </select></td>
    <td width="15">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MK-Kelas</td>
    <td>:</td>
    <td>
	  <select name="MKK" id="MKK">
        <option value="">--pilih--</option>
        <?php
    $q ="select jadwal_kelas.*,matkul.* from jadwal_kelas, matkul where jadwal_kelas.id_matkul=matkul.id_matkul";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_jadwalkelas; ?>"><?php echo $dat->nama_matkul; echo " - "; echo $dat->kelas; ?></option>
        
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
<hr />
<br/>
<center>
  
</center>
</body>
</html>
