<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['jadwal']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$nj = $_POST['jadwal'];
		$qp = $mysqli->query("select * from t_jadwal where jadwal='$nj'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into t_jadwal values('','$nj')");
		echo "<script>alert('data disimpan'); </script>";
		}
		else
		{
		echo "<script>alert('data sudah ada cek halaman jadwal'); </script>"; 
		}
		 redir('content/t_jadwal'); 
		 }
}
?>