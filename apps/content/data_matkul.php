<html>
<head>
<title>Matakuliah</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<br/>
    <center><STRONG> Mata Kuliah </STRONG></center>
<hr/>
<div id="tabel">
<form name="" action="" method="post" >
<table width="200" border="0" class="BODYTABLE">
  <tr>
    <td>Semester</td>
    <td><select name="s">
	
      <option value="">--pilih--</option>
      <option value="genap">GENAP</option>
      <option value="ganjil">GANJIL</option>
        </select></td>
    <td><input name="cari" type="submit" id="proses" value="Lihat"></td>
  </tr>
</table>
</form>
  <br/>

  <table width="540" border="1" class="BODYTABLE">
  <tr>
    <td width="46">No</td>
    <td width="310">Mata Kuliah</td>
    <td width="60">Kode</td>
    <td width="60">sks</td>
  </tr>
  <?php
  if(isset($_POST['cari']))
  {
  $xx = $_POST['s'];
    $no = 1;
    $q ="select * from matkul where semester='$xx'";
    $limit = 15;
    $que = $apps->set_paging($mysqli, $q, $limit);
    while ($dat = $que->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><?php echo  $no++ ; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->nama_matkul; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->kd_matkul; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->sks; ?></td>
  </tr>
  <?php } }?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>

</div>
</body>
</html>