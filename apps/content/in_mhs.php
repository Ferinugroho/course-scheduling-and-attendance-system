<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../assets/css/form.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
</head>

<body><br/>
<center><strong>Input Data Mahasiswa</strong></center>
<hr />
<form name="form1" action="<?php echo set_link('proses/in_mhs'); ?>" method="post">
<table width="356" border="0" class="BODYTABLE">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="9">&nbsp;</td>
    <td width="152">Nim</td>
    <td width="10">:</td>
    <td width="152"><input name="nim" type="text" id="nim"></td>
    </tr>
  <tr>
    <td  width="9">&nbsp;</td>
    <td  width="152">Nama</td>
    <td  width="10">:</td>
    <td  width="152"><input name="nama" type="text" id="nama"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas">
      <option value="">-PILIH-</option>
      <option value="1IA">1 IA</option>
      <option value="1IB">1 IB</option>
      <option value="1IC">1 IC</option>
      <option value="2IA">2 IA</option>
      <option value="2IB">2 IB</option>	  
      <option value="2IC">2 IC</option>
      <option value="3IA">3 IA</option>
      <option value="3IB">3 IB</option>
      <option value="3IC">3 IC</option>
      <option value="4IA">4 IA</option>
      <option value="4IB">4 IB</option>
      <option value="4IC">4 IC</option>
      <option value="5IA">5 IA</option>
      <option value="5IB">5 IB</option>
      <option value="5IC">5 IC</option>
      <option value="6IA">6 IA</option>
      <option value="6IB">6 IB</option>
      <option value="6IC">6 IC</option>
      <option value="1ID">1 ID</option>
      <option value="1IE">1 IE</option>
      <option value="1IF">1 IF</option>
	  <option value="2ID">2 ID</option>
	  <option value="2IE">2 IE</option>
	  <option value="2IF">2 IF</option>
	  <option value="3ID">3 ID</option>
	  <option value="3IE">3 IE</option>
	  <option value="3IF">3 IF</option>
	  <option value="4ID">4 ID</option>
	  <option value="4IE">4 IE</option>
	  <option value="4IF">4 IF</option>
	  <option value="5MIA">5 MIA</option>
	  <option value="5MIB">5 MIB</option>
	  <option value="5MIC">5 MIC</option>
	  <option value="6MIA">6 MIA</option>
	  <option value="6MIB">6 MIB</option>
	  <option value="6MIC">6 MIC</option>

    </select></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="proses" type="submit" class="tombol" value="Simpan"></td>
    </tr>
</table>
</form>
</body>
</html>
