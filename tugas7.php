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
	<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
	<?php  
		$a = $_POST["txt1"];
		$b = $_POST["txt2"];
		$hasil = $_POST["operasi"];
			if ($hasil == 1 ) {
				$c = $a + $b;
				}
			if ($hasil == 2 ) {
				$c = $a - $b;
				}
			if ($hasil == 3 ) {
				$c = $a / $b;
				}
			if ($hasil == 4 ) {
				$c = $a * $b;
				}
	?>
		 	<table>
		 		<tr>
		 			<td>
		 				<label>Nilai A</label>
		 			</td>
		 			<td>
		 				<input type="text" name="txt1" placeholder="" value="0"   />
		 			</td>
		 		</tr>
		 		<tr>
		 			<td>
		 				<label>Nilai B</label>
		 			</td>
		 			<td>
		 				<input type="text" name="txt2" placeholder="0" value="<?php  echo $b ?>" />
		 			</td>
		 		</tr>

		 		<tr>
		 			<td>
		 				<label>Operasi</label>
		 			</td>
		 			<td>
		 				<select id="opr" name="operasi">
					 		<option value="0">Pilih</option>
					 		<option value="1">Tambah</option>
					 		<option value="2">Kurang</option>
					 		<option value="3">Bagi</option>
					 		<option value="4">Kali</option>
					 	</select>
		 				<input type="submit" name="ok" value="OK" >
		 			</td>
		 		</tr>	 			
		 		<tr>
		 			<td>
		 				<label>Hasil 
		 				<?php 
		 					switch($hasil){
		 						case 1:
		 						echo "Tambah";
		 					}
		 					if ($hasil == 1) {
								echo "Tambah";
								}
							if ($hasil == 2) {
								echo "Kurang";
								}
							if ($hasil == 3) {
								echo "Bagi";
								}
							if ($hasil == 4) {
								echo "Kali";
								}
		 				?>
		 				</label>
		 			</td>

		 			<td>
		 				<input type="text" name="txt3" placeholder="0" value="<?php echo "$c" ?>"   />
		 			</td>
		 		</tr>
		 	</table>
	 </form>
</body>
</html>