
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 

  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title></title>
</head>
<body>
            <h2>User Edit</h2>
            <form method="post" role="form" action="<?=base_url();?>Employee/updData">
            
       <input type="hidden" name="emp_id" value="<?php echo $emp_id; ?>">     <br />
       
  <label>Emp Name</label>
    <input type="text" name="emp_name" value="<?php echo $emp_name;?>"><br>
  <label>Emp Email</label>
    <input type="text" name="emp_email" value="<?php echo $emp_email;?>"><br>
  <label>Emp Designation</label>
    <input type="text" name="emp_desig" value="<?php echo $emp_desig;?>" ><br>
    <label>Emp Contact</label>
    <input type="text" name="emp_contact" value="<?php echo $emp_contact;?>" ><br>
    <label>Emp BG</label>
    <input type="text" name="emp_bg" value="<?php echo $emp_bg;?>" ><br>
    
  <input type="submit" value="update" name="submit">
</form>      
</body>
</html>