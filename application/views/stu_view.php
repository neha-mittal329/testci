
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 

  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Jotorres Login Screen | Welcome </title>
</head>
<body>
    <div id='login_form'>
        <form action='<?php echo base_url();?>student/saveStudentData' method='post' name='process'>
            <h2>User Login</h2>
            <br />            
            <label for='fname'>First Name</label>
            <input type='text' name='fname' id='fname' size='25' /><br />
        
            <label for='lname'>Last Name</label>
            <input type='text' name='lname' id='lname' size='25' /><br />  
            
             <label for='email'>Email</label>
            <input type='text' name='email' id='email' size='25' /><br />  
            
             <label for='ssc'>SSC</label>
            <input type='text' name='ssc' id='ssc' size='25' /><br />
            
             <label for='hsc'>HSC</label>
            <input type='text' name='hsc' id='hsc' size='25' /><br />                            
        
            <input type='Submit' value='Login' /> 
                       
        </form>
        
    </div>
</body>
</html>