<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Input Data Mata Kuliah</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<body><br/>
<center><strong>Input Data Mata Kuliah</strong></center>
<hr />
<form name="form1" action="<?php echo set_link('proses/in_matkul'); ?>" method="post">
<table width="360" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="21">&nbsp;</td>
    <td width="153">Mata Kuliah </td>
    <td width="144"><input name="nama_matkul" type="text" id="nama_matkul"></td>
    <td width="24">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode Mata Kuliah </td>
    <td><input name="kd_matkul" type="text" id="kd_matkul"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Semester</td>
    <td><select name="semester" id="semester">
      <option value="ganjil">GANJIL</option>
      <option value="genap">GENAP</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jumlah Sks </td>
    <td><input name="sks" type="text" id="sks"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="proses" type="submit" class="tombol" id="proses" value="Simpan"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
