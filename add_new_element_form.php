
<div class="new_client" style="float:right" >
	<form id="new_client_form", action ="add_new_element.php", action="<?php echo $_SERVER['REQUEST_URI']; ?>" method = "POST" >
	<label for = "reg_pid"> Personal identification number	</label> <br />
	<input type = "text" maxlength ="10" name ="reg_pid" id = "reg_pid" /> <br />
        <label for = "reg_name"> Name </label> <br />
	<input type = "text" name ="reg_name" id = "reg_name" /> <br />
	<label for = "reg_phone"> Phone Namber </label> <br />
        <input type = "text" maxlength ="11" name = "reg_phone" id = "reg_phone" /> <br />
        <label for = "reg_credit"> Credit Summ </label> <br />
        <input type = "text" name = "reg_credit" id = "reg_credit" /> 
	<br />
	<br />
	<br />
	<input type = "submit" id = "submit" name = "submit" style="float:right"/>
	</form>
</div>