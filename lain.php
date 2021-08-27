<?php
$result = "";
class calculator
{
 var $a;
 var $b;
 function checkopration($oprator)
 {
 switch($oprator)
 {
 case '+':
 return $this->a + $this->b;
 break;
 case '-':
 return $this->a - $this->b;
 break;
 case '*':
 return $this->a * $this->b;
 break;
 case '/':
 return $this->a / $this->b;
 break;
 default:
 return "Salah";
 }
 }
 function getresult($a, $b, $c)
 {
 $this->a = $a;
 $this->b = $b;
 return $this->checkopration($c);
 }
}
$cal = new calculator();
if(isset($_POST['submit']))
{
 $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<form method="post">
<table align="center">
 <tr>
 <td><strong><strong></td>
 </tr>
 <tr>
 <td>Nilai A</td>
 <td><input type="text" name="n1"></td>
 </tr>
 <tr>
 <td>Nilai B</td>
 <td><input type="text" name="n2"></td>
 </tr>
 <tr>
 <td>Operasi</td>
 <td><select name="op">
 <option value="+">Tambah</option>
 <option value="-">Kurang</option>
 <option value="*">Kali</option>
 <option value="/">Bagi</option>
 </select>
 <input type="submit" name="submit" value="OK">
 </td>
 </tr>
 <tr>
 <td>Hasil</td>
 <td><input type="text" id="txt3" value='<?php echo $result; ?>'></td>
 </tr>
</table>
</form>
