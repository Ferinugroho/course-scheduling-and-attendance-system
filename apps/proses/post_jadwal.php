<?php
if (isset($_POST['proses']))
{	
	if (
	(empty($_POST['HJ'])) 
	or 	(empty($_POST['MKK']))
) 
            {
        		echo "<script>alert('salah satu data belum di isi!!'); history.go(-1);</script>";
        	}
            else 
            {
		$HJ = $_POST['HJ'];
		$MK= $_POST['MKK'];
		$qp = $mysqli->query("select * from post_jadwal where id_jadwalhari='$HJ' and id_jadwalkelas='$MK' ");
        $a=$qp->num_rows;
		if($a==0)
		{		
		$insert = $mysqli->query("insert into post_jadwal values('','$HJ','$MK')");
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