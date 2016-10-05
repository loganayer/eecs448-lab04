<?php
echo "<table > ";
for ($i = 0; $i < 101; $i++) {
   echo "<tr>";
   for ($j = 0; $j < 101; $j++) {
       echo "<td>";
       if ($i == 0) {
           echo $j;
       } else if (($i * $j) == 0){
           echo $i;
       } else {
           echo $i * $j;
       }
       echo "</td> ";
    }
    echo "</tr>";
}
echo "</table> ";
?>
