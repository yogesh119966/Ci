
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <center>
  <h1>Student Information</h1>
<?php
//print_r($res);
echo "<table border='1'><tr><th>Rno</th><th>Sname</th><th>Branch</th><th>Fees</th></tr>";
foreach($res as $k)
{
 echo "<tr>";
 foreach ($k as $v) {
  echo "<td>$v"."</td>";
 }
 echo "</tr>";
}
echo "</table>";
?>
</center>
</body>
</html>