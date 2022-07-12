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
  Proses Input 4 </strong>
</center>
<hr />
<form name="form1" action="<?php echo set_link('proses/end_jadwal'); ?>" method="post">
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
    <td><select name="fjadwal" id="fjadwal">
        <option value="">--pilih--</option>
        <?php
    $q ="SELECT f_jadwal . * , post_jadwal . * , jadwal_hari . * , jadwal_kelas . * , matkul . * , dosen . *
FROM f_jadwal, post_jadwal, jadwal_hari, jadwal_kelas, matkul, dosen
WHERE f_jadwal.id_postjadwal = post_jadwal.id_postjadwal
AND f_jadwal.id_dosen = dosen.id_dosen
AND post_jadwal.id_jadwalhari = jadwal_hari.id_jadwalhari
AND post_jadwal.id_jadwalkelas = jadwal_kelas.id_jadwalkelas
AND jadwal_kelas.id_matkul = matkul.id_matkul";
  
    $que = $apps->set_paging($mysqli, $q);
    while ($dat = $que->fetch_object())
    {
	?>
        <option  value="<?php echo $dat->id_fjadwal; ?>"><?php echo $dat->hari." ".$dat->jam_k." - ".$dat->nama_matkul." - ".$dat->nama;?></option>
        <?php } ?>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Ruang</td>
    <td><select name="ruang" id="ruang">
      <option value="">--pilih--</option>
      <option value="LABI">LAB I</option>
      <option value="LABII">LAB II</option>
      <option value="LABIII">LAB III</option>
      <option value="LABIV">LAB IV</option>
      <option value="LABV">LAB V</option>
      <option value="LABVI">LAB VI</option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
        
        </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="simpan"></td>
    <td></td>
  </tr>
  <tr>
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
