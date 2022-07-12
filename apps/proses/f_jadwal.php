<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['jadwal'])) 
	or 	(empty($_POST['dosen']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$j = $_POST['jadwal'];
		$d= $_POST['dosen'];
		$qp = $mysqli->query("select * from f_jadwal where id_postjadwal='$j' and id_dosen='$d'");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into f_jadwal values('','$j','$d')");
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