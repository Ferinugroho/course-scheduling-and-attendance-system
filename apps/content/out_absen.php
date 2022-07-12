<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>
 Rekap Presensi
</strong>
</center>
<hr />
<form name="" action="" method="post">
<table width="514" border="1" class="BODYTABLE table-responsive ">
  <tr>
    <td width="4">&nbsp;</td>
    <td width="35">Kelas</td>
    <td width="70"><select name="kls">
	<option value="">--pilih--</option>
      <?php
    $q = $mysqli->query("select * from absens group by kelas");
    while ($dat = $q->fetch_object())
    {
	?><option  value="<?php echo $dat->kelas; ?>"><?php echo $dat->kelas; ?></option>
      <?php } ?>
    </select></td>
    <td width="61">&nbsp;</td>
    <td width="56">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <td width="54">&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="65"><input name="cari" type="submit" id="cari" value="cari"></td>
  </tr>
</table>
</form>
<table width="884" border="1" class="BODYTABLE table-responsive">
  <tr>
    <td width="43">No</td>
    <td width="110">Tanggal</td>
    <td width="103">Hari</td>
    <td width="103">Jam</td>
    <td width="94">Nim</td>
    <td width="177">Nama</td>
    <td width="86">Keterangan</td>
    <td width="116">Dosen Pengajar </td>
  </tr><?php
  if(isset($_POST['cari']))
  {
  $xy=$_POST['kls'];
  define('xy',$xy);
    $no = 1;
    $qu ="select * from absens where kelas='$xy'";
    $limit = 25;
    $q = $apps->set_paging($mysqli, $qu, $limit);
    while ($dataa = $q->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><?php echo $no++ ; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->tanggal; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->hari; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->jam; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->nim_a; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->nama_a; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->keterangan; ?></td>
    <td class="tabel_laporan"><?php echo $dataa->d_pjr; ?></td>
  </tr><?php } }?>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?=root;?>cetak.php?k=<?=xy;?>"  target="_blank">cetak</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="<?=root;?>download.php?k=<?=xy;?>"  target="_blank">download</a></td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
