<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['n_jadwal']))
	or 	(empty($_POST['ruang'])) 
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$nj = $_POST['n_jadwal'];
		$r = $_POST['ruang'];
		$qp = $mysqli->query("select * from n_of_jadwal where n_jadwal='$nj'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into n_of_jadwal values('','$nj','$r')");
		echo "<script>alert('data disimpan'); </script>";
		}
		else
		{
		echo "<script>alert('data sudah ada cek halaman jadwal'); </script>"; 
		}
		 redir('content/end_jadwal'); 
		 }
}
?>