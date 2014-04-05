<?php
        include "config.php";
        $reg_pid = $_POST ['reg_pid'];
	$reg_name = $_POST ['reg_name'];
	$reg_phone = $_POST ['reg_phone'];
        $reg_credit = $_POST ['reg_credit'];
		$query = "INSERT INTO `BankClient`.`Client` (`PID`, `Name`, `Phone`, `Credit`) VALUES ('".$reg_pid."','".$reg_name."', '".$reg_phone."', '".$reg_credit."')";
		$result = mysql_query ($query);
		if ($result){
				echo "I fine";
			}
		 else { echo "Такой ИНН уже зарегистрирован в БД"; }
	exit(); 
?>