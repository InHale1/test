<?php
include "config.php";
$searchterm = $_POST['searchterm'];
$searchterm = trim ( $searchterm );
//if (!$searchterm)
  // die ("Не все данные введены.<br>
	//Пожалуйста, вернитесь назад и закончите ввод");
//$searchterm = addslashes ($searchterm);
$query = "SELECT * FROM `Client` WHERE `PID` " .$searchtype." like '%".$searchterm."%'";
echo $query;
$result = mysql_query ( $query );
$n = mysql_num_rows ( $result );
for ( $i=0; $i<$n; $i++ )
  {
   $row = mysql_fetch_array($result);
   echo "<p><b>".($i+1).". $row[PID]</b><br>";
   echo "Автор: $row[Name]<br>";
   echo "ISBN: $row[Credit]<br>";
  // echo "Цена: $row[price]<br>";
   echo "Количество: $row[quantity]</p>";
  }
if ( $n == 0 ) echo "Ничего не можем предложить. Извините";
?>