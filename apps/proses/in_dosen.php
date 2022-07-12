<?php
if (isset($_POST['proses']))
{		
		$kd_d= $_POST['kd_dosen'];
		$nip= $_POST['nip'];
		$nm = $_POST['nama'];
		$kn = $_POST['kontak'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$level='dosen';
		
$insert = $mysqli->query("insert into user values('','$user','$pass','$nip','$level')");	
$insert2 = $mysqli->query("insert into dosen values('','$nm','$nip','$kn','$kd_d')");
        echo "<script>alert('data disimpan'); </script>";
        redir('content/in_dosen');    

}
?>