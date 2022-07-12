<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Kelas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><br/>
<STRONG> Data Kelas Mahasiswa </STRONG></div>
<hr/>
<form name"" action="" method="post">
<table width="200" border="1" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td><select name="kls">
	<option value="">--pilih--</option>
     <?php
    $q = $mysqli->query("select * from mahasiswa group by kelas");
    while ($datak = $q->fetch_object())
    {
	?>
	?><option  value="<?php echo $datak->kelas; ?>"><?php echo $datak->kelas; ?></option>
      <?php } ?>
    </select></td>
    <td><input name="lihat" type="submit" id="lihat" value="Cari"></td>
  </tr>
</table>
</form>
<table width="605" border="1" class="BODYTABLE">
  <tr>
    <td width="46"><div align="center">No</div></td>
    <td width="278"><div align="center">Nim</div></td>
    <td width="259"><div align="center">Nama</div></td>
  </tr><?php
  if(isset($_POST['lihat']))
  {
  $xy=$_POST['kls'];
    $no = 1;
    $qu ="select * from mahasiswa where kelas='$xy'";
    $limit = 27;
    $quer = $apps->set_paging($mysqli, $qu, $limit);
    while ($dat = $quer->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><CENTER><?php echo $no++ ; ?></CENTER></td>
    <td class="tabel_laporan"><?php echo  $dat->nim ; ?></td>
    <td class="tabel_laporan"><?php echo $dat->nama ;?></td>
  </tr>
  <?php }} ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
