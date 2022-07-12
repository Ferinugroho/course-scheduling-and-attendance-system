<?php
if (isset($_POST['proses']))
{		
		$nm= $_POST['nama_matkul'];
		$kd = $_POST['kd_matkul'];
		$sms= $_POST['semester'];
		$sks=$_POST['sks'];
$insert = $mysqli->query("insert into matkul values('','$nm','$kd','$sms','$sks')");
        echo "<script>alert('data disimpan'); </script>";
        redir('content/in_matkul');    

}
?>