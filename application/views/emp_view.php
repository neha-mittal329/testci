<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function chk_data(){
	
	if(document.form1.emp_name.value==''){
		alert("Enter the Emp Name");
		document.form1.emp_name.focus();
		return false;
	}
	if(document.form1.emp_email.value==''){
		alert("Enter the Emp Email");
		document.form1.emp_email.focus();
		return false;
	}
	if(document.form1.emp_desig.value==''){
		alert("Enter the Emp Designation");
		document.form1.emp_desig.focus();
		return false;
	}
	if(document.form1.emp_bg.value==''){
		alert("Enter the Emp Back ground");
		document.form1.emp_bg.focus();
		return false;
	}
	if(document.form1.emp_contact.value==''){
		alert("Enter the Emp Contact");
		document.form1.emp_contact.focus();
		return false;
	}
}
</script>

</head>
<body>
	<div id='login_form'>
    	<form method="post" action="<?php echo base_url();?>Employee/saveEmpData" name="form1" id="form1" onsubmit="return chk_data();">
        <table cellpadding="1" cellspacing="0" border="1">
        <h2>Employee Login</h2><br />
        <tr>
        <td>Employee Name</td>
        <td><input name="emp_name" type="text" id="emp_name" /></td>
        </tr>
        
        <tr>
        <td>Employee Email</td>
        <td><input type="text" name="emp_email" id="emp_email" /></td>
        </tr>
        
        <tr>
        <td>Emp Designation</td>
        <td><input type="text" name="emp_desig" id="emp_desig" /></td>
        </tr>
        
        <tr>
        <td>Emp Contact</td>
        <td><input type="text" name="emp_contact" id="emp_contact" maxlength="10" /></td>
        </tr>
        
        <tr>
        <td>Emp Blood Group</td>
        <td><input name="emp_bg" id="emp_bg" type="text" /></td>
        </tr>
        
        <tr>
        <td rowspan="4"><input type="submit" value="submit" /></td>
        </tr>
        
        
        </table>
        </form>
    
    </div>

</body>
</html>