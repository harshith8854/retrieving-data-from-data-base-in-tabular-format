<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"da");
$query = mysqli_query($con,"select * from act6");
echo "<body style=\"background-image: url('pic1.jpg');background-repeat:no-repeat;background-size:cover;\">";
echo "<h1 style=\"text-align:center;color:green;\">CAT EXAM PROCESS</h1>
<h1 style=\"text-align:center;color:blue;\">SCOPE</h1>
<h1 style=\"text-align:center;color:blue;\">VIT VELLORE</h1>";
echo "<table style=\"width:100%;border:1px solid black;border-collapse:collapse;\"><tr>";
echo "<tr style=\"border:1px solid black;border-collapse:collapse;\"><td>coursecode</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">coursename</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">facultyid</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">regnum</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">studentid</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">facultyid</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">student branch</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">status</td>
<td style=\"border:1px solid black;border-collapse:collapse;\">course type</td></tr>";
while($res=mysqli_fetch_assoc($query))
{
  echo "<tr style=\"border:1px solid black;border-collapse:collapse;\">";
  foreach($res as $value)
   {
 	echo "<td style=\"border:1px solid black;border-collapse:collapse;\">$value</td>";
  }
  echo "</tr>";
}
echo "</table>";
echo "</body>";
?>
