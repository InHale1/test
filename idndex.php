
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="autorization" style="float:left" >
	<form id="autorization_form", action ="auth.php", action="<?php echo $_SERVER['REQUEST_URI']; ?>" method = "POST" >
	<label for = "name"> Login </label> </br>
        <input type = "text" name = "name" id = "name" /> </br>
	<label for = "pass"> Password </label> </br>
	<input type = "password" name = "pass" id = "pass" /> 
	<br />
	<!--<img src="captcha_auth.php?sid=<?php echo rand(10000, 99999); ?>" width="120" height="20" alt="" style="float:right"/> <br />
	<br />
	<input type="text" name="captcha_auth" id = "captcha_auth" style="float:right"/><br />
	!--><br />
	<input type = "submit" id = "submit" name = "submit" style="float:right"/>
	</form> 
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="Search" style="float:left" >
<form aсtion="Search.php" method = "POST">
    Search:<br>
    <select name="searchtype" size=1>
    <option value="PID" selected>PID
    </select> <br>
    Что ищем?:<br> 
    <input name="searchterm"> <br>
    <input type=submit value="Поиск">
</form>
</div>
