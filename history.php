<?php  
$page_title = 'Welcome to this Site!'; 
include ('includes/header.html'); 
?>

<?php
	include ('config.php');
	echo "<h1>History</h1>";
	echo "<br>";
	
$sqk = "select a.user_id, a.nama, a.alamat, a.jenis_kelamin, a.agama, a.no_hp, b.sd, b.smp, b.sma, b.pt, b.jurusan, c.pekerjaan, c.nama_perusahaan from user a, pendidikan b, pekerjaan c where a.user_id = b.penid and b.penid = c.pekid order by a.user_id asc";
	if(mysql_query($sqk)){
		$result = mysql_query($sqk);
		} else die ("Query error".mysql_error());
		
	if(mysql_num_rows($result) >0)
	{
		echo "<table width=800px height=20px align='left' border =5 bgcolor='#ffcc77' cellpadding=5>";
		echo "<tr border=3>";
		echo "<th>ID</th>";
		echo "<th border=5 height=50px>Nama</th>";
		echo "<th>Alamat</th>";
		echo "<th>Jns Kelamin</th>";
		echo "<th>Agama</th>";
		echo "<th>No. Telp</th>";
		echo "<th>SD</th>";
		echo "<th>SMP</th>";
		echo "<th>SMA/K</th>";
		echo "<th>Perguruan Tinggi</th>";
		echo "<th>Jurusan</th>";
		echo "<th>Pekerjaan</th>";
		echo "<th>Nm Perusahaan</th>";
		echo "</tr>";
		
		//menampilkan hasil query
		while($row = mysql_fetch_array($result)){
			echo "<tr bgcolor='white'>";
			echo "<td>".$row["user_id"]."</td>";
			echo "<td>".$row["nama"]."</td>";
			echo "<td>".$row["alamat"]."</td>";
			echo "<td>".$row["jenis_kelamin"]."</td>";
			echo "<td>".$row["agama"]."</td>";
			echo "<td>".$row["no_hp"]."</td>";
			echo "<td>".$row["sd"]."</td>";
			echo "<td>".$row["smp"]."</td>";
			echo "<td>".$row["sma"]."</td>";
			echo "<td>".$row["pt"]."</td>";
			echo "<td>".$row["jurusan"]."</td>";
			echo "<td>".$row["pekerjaan"]."</td>";
			echo "<td>".$row["nama_perusahaan"]."</td>";
			echo "</tr>";
			}
			echo "</table>";
			}
			else echo "There is no recoed in with";
?>
<?php 
include ('includes/footer.html'); 
?> 