<?php
if (isset($_POST['proses']))
{		
		$tgl= $_POST['tanggal'];
		$hr= $_POST['hari'];
		$jm = $_POST['jam'];
		$nim = $_POST['nim_a'];
		$nam = $_POST['nama_a'];
		$ket=$_POST['keterangan'];
		$d = $_POST['d_pjr'];
		$klsz= $_POST['kelas'];
		
		$qq = $mysqli->query("select * from mahasiswa where kelas='$klsz[0]'");
		$etong_baris = $qq->num_rows;
		
		for($fuji=0; $fuji<$etong_baris; $fuji++)
		{
		
		
			$insert = $mysqli->query("insert into absens values('','$tgl','$hr','$jm','$nim[$fuji]','$nam[$fuji]','$ket[$fuji]','$d','$klsz[$fuji]')");	
					
		}
		
		echo "<script>alert('data disimpan'); </script>";
        redir('content/absen');    

}
?>