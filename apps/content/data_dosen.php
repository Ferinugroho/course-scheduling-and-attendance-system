<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Dosen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><br/>
<STRONG> Data Dosen</STRONG>
</div>
<hr/>
<div align="center"></div>
<table width="529" border="1" class="BODYTABLE">
  <tr>
    <td width="31"><div align="center">No</div></td>
    <td width="93"><div align="center">Nip</div></td>
    <td width="187"><div align="center">Nama</div></td>
    <td width="33">Kode</td>
    <td width="151"><div align="center">Kontak</div></td>
  </tr><?php 
  	$no = 1;
    $q ="select * from dosen";
    $limit = 24;
    $que = $apps->set_paging($mysqli, $q, $limit);
    while ($dat = $que->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><?php echo  $no++ ; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->nip; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->nama; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->kd_dosen; ?></td>
    <td class="tabel_laporan"><?php echo  $dat->kontak; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
