<?php
if (isset($_POST['proses']))
{		
		$nim = $_POST['nim'];
		$nama= $_POST['nama'];
		$kls = $_POST['kelas'];
$insert = $mysqli->query("insert into mahasiswa values('','$nim','$nama','$kls')");
        echo "<script>alert('data disimpan'); </script>";
        redir('content/in_mhs');    

}
?>