<?php 
session_start();
error_reporting(E_ALL);
include_once('config/config.php');
include_once('lib/inc.php');
include_once('lib/Core.php');
$apps = new Core();
?>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=absensi.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
?>
<table width="884" border="1" class="BODYTABLE">
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
  $xy=$_GET['k'];
    $no = 1;
    $qu ="select * from absens where kelas='$xy'";
    $limit = 25;
    $que = $apps->set_paging($mysqli, $qu, $limit);
    while ($data = $que->fetch_object())
    {
        $no+1;
    ?>
  <tr>
    <td class="tabel_laporan"><?php echo $no++ ; ?></td>
    <td class="tabel_laporan"><?php echo $data->tanggal; ?></td>
    <td class="tabel_laporan"><?php echo $data->hari; ?></td>
    <td class="tabel_laporan"><?php echo $data->jam; ?></td>
    <td class="tabel_laporan"><?php echo $data->nim_a; ?></td>
    <td class="tabel_laporan"><?php echo $data->nama_a; ?></td>
    <td class="tabel_laporan"><?php echo $data->keterangan; ?></td>
    <td class="tabel_laporan"><?php echo $data->d_pjr; ?></td>
  </tr><?php } ?>
 </table>
 <?php echo "<script>window.print();</script>"; ?>