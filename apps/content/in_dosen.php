<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Dosen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center>
  <strong>Input Data Dosen </strong>
</center>
<hr />
<form name="form" action="<?php echo set_link('proses/in_dosen'); ?>" method="post">
<table width="344" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>Kode Dosen</td>
    <td>&nbsp;</td>
    <td><input name="kd_dosen" type="text" id="kd_dosen"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="5">&nbsp;</td>
    <td width="145">Nip</td>
    <td width="9">:</td>
    <td width="159"><input name="nip" type="text" id="nip"></td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nama </td>
    <td>:</td>
    <td><input name="nama" type="text" id="nama"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kontak</td>
    <td>:</td>
    <td><input name="kontak" type="text" id="kontak"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Username</td>
    <td>:</td>
    <td>
    <input name="username" type="text" id="username">
</td>
    <td><span class="tabel_laporan">
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td>:</td>
    <td>
    <input name="password" type="text" id="password">
</td>
    <td>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="Submit"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
