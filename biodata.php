<?php  
$page_title = 'Welcome to this Site!'; 
include ('includes/header.html'); 
?>
		<h1>Form Input data</h1>
		<?php
			if(!empty($_GET['message']) && $_GET['messsage'] == 'success'){
			echo '<h3>Success to insert data</h3>';
			}
		?>
		<form name="input_data" action="insert.php" method="post">
		<table border="0" cellpadding="5" cellspacing="0"align="center" >
			<tbody>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" maxlength="35" required="required" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" maxlength="40" required="required" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin">
						<option>-</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					  </select>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="agama" required="required" /></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td>:</td>
				<td><input type="text" name="no_hp" maxlength="14" required="required" /></td>
			</tr>
			<tr>
				<td align="right" colspan="3"><input type="submit" name="submit" value="Save" /></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
			</tbody>
			</table>
			</form>
			
		
<?php 
include ('includes/footer.html'); 
?> 