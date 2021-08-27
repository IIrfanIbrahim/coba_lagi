<!DOCTYPE html>
<html>
<head>
	<title>Tugas 7</title>
	<style type="text/css">
		body{
		 font-family: Arial ;
		}
		table{
			margin: auto ;
		}
	</style>
</head>
<body>
	<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php  
		$a = $_POST["angka1"];
		$b = $_POST["angka2"];
		$jumlah = $_POST["jumlah"];
			if ($jumlah == 1 ) {
				$c = $a + $b;
				}
			if ($jumlah == "kurang") {
				$c = $a - $b;
				}
			if ($jumlah == "bagi") {
				$c = $a / $b;
				}
			if ($jumlah == "kali") {
				$c = $a * $b;
				}
	?>
		 	<table border="2px"> 
		 		<tr>
		 			<td>
		 				<label>Nilai A</label>
		 			</td>
		 			<td>
		 				<input type="text" name="angka1" placeholder="Masukkan Nilai"  value="<?php echo $a ?>"  />
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
		 				<select id="opr" name="jumlah">
					 		<option value="0">Pilih</option>
					 		<option value="1">Tambah</option>
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
		 					 if ($jumlah == 1) {
								echo "Tambah";
								}
							if ($jumlah == "kurang") {
								echo "Kurang";
								}
							if ($jumlah == "bagi") {
								echo "Bagi";
								}
							if ($jumlah == "kali") {
								echo "Kali";
								}
								
		 				?>
		 				</label>
		 			</td>
		 			<td>
		 				<input type="text" name="angka3" placeholder="0" value="<?php echo $c ?>" />
		 			</td>
		 		</tr>
		 	</table>
	 </form>
</body>
</html>