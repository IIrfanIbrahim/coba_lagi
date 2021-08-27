<!DOCTYPE html>
<html>
<head>
	<title>Tugas 7</title>
	<style type="text/css">
		body{
		 font-family: Arial ;
		}
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<form  action="" method="POST">
	<?php  
		$a = $_POST["angka1"];
		$b = $_POST["angka2"];
		$jumlah = $_POST["jumlah"];
			if ($jumlah == "tambah") {
				$c = $a + $b;
				}
			elseif ($jumlah == 2) {
				$c = $a - $b;
				}
			elseif ($jumlah == 3) {
				$c = $a / $b;
				}
			elseif ($jumlah == 4) {
				$c = $a * $b;
				}
	?>
		 	<table>
		 		<tr>
		 			<td>
		 				<label>Nilai A</label>
		 			</td>
		 			<td>
		 				<input type="text" name="angka1" placeholder="0" value="<?php echo $a ?>" />
		 			</td>
		 		</tr>
		 		<tr>
		 			<td>
		 				<label>Nilai B</label>
		 			</td>
		 			<td>
		 				<input type="text" name="angka2" placeholder="0" value="<?php  echo $b ?>" />
		 			</td>
		 		</tr>
		 		<tr>
		 			<td>
		 				<label>Operasi</label>
		 			</td>
		 			<td>
		 				<select id="opr" name="operasi">
					 		<option value="0">Pilih</option>
					 		<option value="tambah">Tambah</option>
					 		<option value="kurang">Kurang</option>
					 		<option value="bagi">Bagi</option>
					 		<option value="kali">Kali</option>
					 	</select>
		 				<input type="submit" name="ok" value="OK" >
		 			</td>
		 		</tr>	 			
		 		<tr>
		 			<td>
		 				<label>Hasil 
		 				<?php 
		 					if ($opsi == "tambah") {
								echo "Tambah";
								}
							elseif ($opsi == 2) {
								echo "Kurang";
								}
							elseif ($opsi == 3) {
								echo "Bagi";
								}
							elseif ($opsi == 4) {
								echo "Kali";
								}
		 				?>
		 				</label>
		 			</td>
		 			<td>
		 				<input type="text" name="angka3" placeholder="0" value='<?php echo "$c" ?> '   />
		 			</td>
		 		</tr>
		 	</table>
	 </form>
</body>
</html>