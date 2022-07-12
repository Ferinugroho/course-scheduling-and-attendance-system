<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['fjadwal']) or empty($_POST['ruang'])) 
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$nj = $_POST['fjadwal'];
		$r= $_POST['ruang'];
		$qp = $mysqli->query("select * from n_jadwal where id_fjadwal='$nj' ");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into n_jadwal values('','$nj','$r')");
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