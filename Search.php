<?php
echo"dasd";
include "config.php";
trim ( $searchterm );
$query = "SELECT * FROM `Client` WHERE " .$searchtype." like '%".$searchterm."%'";
$result = mysql_query ( $query );
$n = mysql_num_rows ( $result );
for ( $i=0; $i<$n; $i++ )
  {
   $row = mysql_fetch_array($result);
   echo "<p><b>".($i+1).". $row[PID]</b><br>";
   echo "Name: $row[Name]<br>";
   echo "Credit: $row[Credit]<br>";
   echo "Количество: $row[quantity]</p>";
  }
if ( $n == 0 ) echo "Ничего не можем предложить. Извините";
?>