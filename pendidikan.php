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
		<form name="input_pendidikan" action="insert_pend.php" method="post">
		<table border="0" cellpadding="5" cellspacing="0"align="center" >
			<tbody>
			<tr>
				<td>SD</td>
				<td>:</td>
				<td><input type="text" name="sd" maxlength="20" required="required" /></td>
			</tr>
			<tr>
				<td>SMP</td>
				<td>:</td>
				<td><input type="text" name="smp" maxlength="20" required="required" /></td>
			</tr>
			<tr>
				<td>SMA/K</td>
				<td>:</td>
				<td><input type="text" name="sma" required="required" /></td>
			</tr>
			<tr>
			<tr>
				<td>Perguruan Tinggi</td>
				<td>:</td>
				<td><input type="text" name="pt" maxlength="14" required="required" /></td>
			</tr>
			<tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan" maxlength="14" required="required" /></td>
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