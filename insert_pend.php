<?php
	include('config.php');
	
	$sd = $_POST['sd'];
	$smp = $_POST['smp'];
	$sma = $_POST['sma'];
	$pt = $_POST['pt'];
	$jurusan = $_POST['jurusan'];
	
	$query = mysql_query("insert into pendidikan values(' ','$sd','$smp','$sma','$pt','$jurusan')") or die (mysql_error());
	
	if($query){
		echo "Success";
		}
	else {
		echo "Failed";
	}
	
?>
<script language="javascript">
				alert("Isi form pekerjaan");
				document.location="pekerjaan.php";
			</script>
