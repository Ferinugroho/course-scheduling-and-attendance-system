<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">

</head>

<body><br/>
<center>
  <strong>PRESENSI
</strong>
</center>
<hr />
<form name="form1" action="" method="post">
<table width="497" border="0" class="BODYTABLE">
  <tr>
    <td width="9">&nbsp;</td>
    <td width="152">KELAS</td>
    <td width="10">:</td>
    <td width="152"><select name="kelas">
	<option value="">--pilih--</option>
      <?php
    $q = $mysqli->query("select * from mahasiswa group by kelas");
    while ($dat = $q->fetch_object())
    {
	?>
      <option  value="<?php echo $dat->kelas; ?>"><?php echo $dat->kelas; ?></option>
      <?php } ?>
    </select></td>
    <td width="152"><input name="lihat" type="submit" class="tombol" value="CARI"></td>
    </tr> 
</table>
</form>
<form name"" action="<?php echo set_link('proses/in_absen'); ?>" method="post">
<table width="625" border="1" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td><input name="tanggal" type="text" id="tanggal" value="<?php echo date('d-m-Y'); ?>"></td>
    <td><div align="center"></div></td>
    <td><div align="left">hari</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jam</td>
    <td><input name="jam" type="text" id="jam" value="<?php echo $jam= Date('H:i' ,time()+60*60*5); ?>"></td>
    <td>&nbsp;</td>
    <td><input name="hari" type="text" id="hari" value="<?php echo date ('l');?>"></td>
	
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20" class="tabel_laporan">No</td>
    <td width="190" class="tabel_laporan">Nim</td>
    <td width="144" class="tabel_laporan">Nama</td>
    <td width="144" class="tabel_laporan">kelas</td>
    <td width="221" class="tabel_laporan"><div align="center">Keterangan</div></td>
  </tr>
  <?php
  if(isset($_POST['lihat']))
  {
  $x = $_POST['kelas'];
    $no = 1;
    $qu ="select * from mahasiswa where kelas='$x'";
    $limit = 15;
    $quer = $apps->set_paging($mysqli, $qu, $limit);
    while ($data = $quer->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><?php echo $no++ ;?></td>
    <td class="tabel_laporan"><input name="nim_a[]" readonly="nim_a" type="text" id="nim_a" value="<?php echo $data->nim ;?>"></td>
    <td class="tabel_laporan"><input name="nama_a[]" type="text" id="nama_a" value="<?php echo $data->nama ;?>"></td>
    <td class="tabel_laporan"><input name="kelas[]" type="text" id="kelas" value="<?php echo $data->kelas ;?>"></td>
    <td class="tabel_laporan"><select name="keterangan[]" id="keterangan">
      <option value="alpa">alpa</option>
	  <option value="hadir">hadir</option>
	  <option value="izin">izin</option>
      <option value="sakit">sakit</option>
      <option value="tugas">tugas</option>
        </select></td>
  </tr> <?php } }?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Dosen Pengajar</td>
    <td><input name="d_pjr" value="<?php	echo $_SESSION['username']; ?>" type="text" class="" id="d_pjr" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="proses" type="submit" id="proses" value="SIMPAN"></td>
  </tr>
</table>
</form>
</body>
</html>
