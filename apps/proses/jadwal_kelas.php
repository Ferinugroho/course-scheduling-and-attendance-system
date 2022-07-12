<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['id_matkul'])) 
	or 	(empty($_POST['kelas']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$kmk = $_POST['id_matkul'];
		$kls= $_POST['kelas'];
		$qp = $mysqli->query("select * from jadwal_kelas where id_matkul='$kmk' and kelas='$kls'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into jadwal_kelas values('','$kmk','$kls')");
		echo "<script>alert('data disimpan'); </script>";
		}
		else
		{
		echo "<script>alert('data sudah ada'); </script>"; 
		}
		 redir('content/jadwal'); 
		 }
}
?>