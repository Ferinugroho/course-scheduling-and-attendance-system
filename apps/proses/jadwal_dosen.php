<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['dosen']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$d = $_POST['dosen'];
		$qp = $mysqli->query("select * from jadwal_dosen where  dosen='$d'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into jadwal_dosen values('','$d')");
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