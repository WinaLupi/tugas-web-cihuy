<?php
	include('config.php');
	
	$pekerjaan = $_POST['pekerjaan'];
	$nama_perusahaan = $_POST['nama_perusahaan'];
	
	
	$query = mysql_query("insert into pekerjaan values(' ','$pekerjaan','$nama_perusahaan')") or die (mysql_error());
	
	if($query){
		echo "Success";
		}
	else {
		echo "Failed";
	}
	
?>
<script language="javascript">
				alert("Done!");
				document.location="history.php";
			</script>
