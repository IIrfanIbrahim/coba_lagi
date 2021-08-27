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
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<?php 
			$a = $_POST["txt"];
				$b = $_POST["txt2"];
		 ?>
		 	<table>
		 		<tr>
		 			<td>
		 				<label>Nilai A</label>
		 			</td>
		 			<td>
		 				<input type="text" name="txt" placeholder="0" value="<?php echo "$a" ?>" />
		 			</td>
		 		</tr>
		 		<tr>
		 			<td>
		 				<label>Nilai B</label>
		 			</td>
		 			<td>
		 				<input type="text" name="txt2" placeholder="0" value="<?php echo $b ?>" />
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

			
			$opsi = $_POST["operasi"];
			if ($opsi == 1) {
				$a = $_POST["txt"];
				$b = $_POST["txt2"];
				$c = $a + $b;
				}
			elseif ($opsi == 2) {
				$c = $a - $b;
				}
			elseif ($opsi == 3) {
				$c = $a / $b;
				}
			elseif ($opsi == 4) {
				$c = $a * $b;
				}
		
			 				switch($opsi) {
				 				case 1:
				 					echo "Tambah";
				 					break;
				 				case 2:
				 					echo "Kurang";
				 					break;
				 				case 3:
				 					echo "Bagi";
				 					break;
				 				case 4:
				 					echo "Kali";
				 					break;
		 					}
		 				?>
		 				</label>
		 			</td>
		 			<td>
		 				<input type="text" name="txt3" placeholder="0" value=" <?php echo "$c" ?> "  />
		 			</td>
		 		</tr>
		 	</table>
	 </form>
</body>
</html>
