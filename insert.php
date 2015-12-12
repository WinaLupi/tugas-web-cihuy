<?php
	include('config.php');
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$no_hp = $_POST['no_hp'];
	
	$query = mysql_query("insert into user values(' ','$nama','$alamat','$jenis_kelamin','$agama','$no_hp')") or die (mysql_error());
	
	if($query){
		echo "Success";
		}
	else {
		echo "Failed";
	}
	
?>
<script language="javascript">
				alert("Isi form pendidikan");
				document.location="pendidikan.php";
			</script>

