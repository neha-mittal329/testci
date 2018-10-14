
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 

  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Jotorres Login Screen | Welcome </title>
</head>
<body>
<?php //echo "<pre>"; print_r($studentData);?>
            <h2>User Login</h2>
           <table border="1" cellspacing="0" cellpadding="1">
           <tr>
           <td>First Name</td>
           <td>Last Name</td>
           <td>Email</td>
           <td>SSC</td>
           <td>HSC</td>
           <td>Edit</td>
           </tr>
          <?php foreach($studentData as $studentDataAs){?>
          
         <tr>
         <td><?php echo $studentDataAs['qwq'];?></td>
          <td><?php echo $studentDataAs['lname'];?></td>
          <td><?php echo $studentDataAs['email'];?></td>
          <td><?php echo $studentDataAs['ssc'];?></td>
          <td><?php echo $studentDataAs['hsc'];?></td>
         <td><a href="<?php echo base_url('student/editStudentData').'/'.$studentDataAs['id'];?>">Link</a></td>
         
         </tr>
		  <?php }?>
		             
           </table>           
</body>
</html>