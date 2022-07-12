<?php
if (isset($_POST['proses']))
{	
	if ((empty($_POST['hari'])) 
	or 	(empty($_POST['jam_k']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$hr= $_POST['hari'];
		$jm = $_POST['jam_k'];
		$qp = $mysqli->query("select * from jadwal_hari where hari='$hr' and jam_k='$jm'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into jadwal_hari values('','$hr','$jm')");
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