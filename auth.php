<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include "config.php";
$db_table_to_show = 'Client';
session_start(); 	
$_SESSION['name'] = $_POST['name'];
$_SESSION['pass'] = md5($_POST['pass']);
if (isset($_POST['exit_btn'])){
    session_unset();
    header("Location: http://sql-chiibip.rhcloud.com" );
} 
    if (($_SESSION['name']) && ($_SESSION['pass'])){
	session_start();
	$query = "SELECT * FROM `users` WHERE `name` = '".$_SESSION['name']."' ";
	$sql = sprintf($query,
		mysql_real_escape_string($_SESSION['name']='%s' && '%d'),
		mysql_real_escape_string($_SESSION['pass']='%s' && '%d'));
        $res = mysql_query ($query);
	$row = mysql_fetch_array ($res);
            if (($_SESSION['name'] == $row['name']) && ($_SESSION['pass'] == $row ['password'])){
                $qr_result = mysql_query("SELECT * FROM " . $db_table_to_show)
		or die(mysql_error());	
		// выводим на страницу сайта заголовки HTML-таблицы
                echo '<table border="1">';
		echo '<thead>';
		echo '<tr>';
                echo '<th>Personal identification number</th>';
		echo '<th>Name</th>';
		echo '<th>Telephone</th>';
		echo '<th>Credit Summ</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';                           
		// выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
                while($data = mysql_fetch_array($qr_result)){ 
                    echo '<tr>';
                    echo '<td>' . $data['PID'] . '</td>';
                    echo '<td>' . $data['Name'] . '</td>';
                    echo '<td>' . $data['Phone'] . '</td>';
                    echo '<td>' . $data['Credit'] . '</td>';
                    echo '</tr>';
		}	
                    echo '</tbody>';
                    echo '</table>';
            } else { echo "Неверно указано имя пользователя или пароль. Повторите попытку ешё раз."; };
    } 
?>


<div class="exit" style="float:left" >
	<form id="exit_form", action ="auth.php", method = "POST" >
	</br>
	<label for = "Exit"> </label>
	<input type="submit" value="Exit" name="exit_btn">
	</form>
</div>

