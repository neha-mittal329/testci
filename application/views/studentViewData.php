
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 

  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title></title>
</head>
<body>
            <h2>User Edit</h2>
            <form method="post" role="form" action="<?=base_url();?>student/postSaveData">
       <input type="hidden" name="id" value="<?php echo $id; ?>">     
  <label>First Name</label>
    <input type="text" name="fname" value="<?php echo $fname;?>" ><br>
  <label>Last Nmae</label>
    <input type="text" name="lname" value="<?php echo $lname;?>"><br>
  <label>Email</label>
    <input type="email" name="email" value="<?php echo $email;?>" ><br>
    <label>SSC</label>
    <input type="text" name="ssc" value="<?php echo $ssc;?>" ><br>
    <label>HSC</label>
    <input type="text" name="hsc" value="<?php echo $hsc;?>" ><br>
    
  <input type="submit" value="update" name="submit">
</form>      
</body>
</html>