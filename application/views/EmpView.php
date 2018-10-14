<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<title>CodeIgniter ajax post</title>
<link rel="stylesheet" type="text" href="<?php echo base_url(); ?>">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() 
alert("1");
	{
	$(".emp_status").click(function(event) {
		event.preventDefault();
//var emp_name = $("input#emp_name").val();
//var emp_email = $("input#emp_email").val();
//var emp_desig = $("input#emp_desig").val();
//var emp_contact = $("input#emp_contact").val();
//var emp_bg = $("input#emp_bg").val();
		var emp_status = $("input#emp_status").val();
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>" + "index.php/Employee/saveEmpData",
		dataType: 'json',
		data: {status: emp_status},
		success: function(res) {
		if (res)
			{
// Show Entered Value
			//jQuery("div#result").show();
//jQuery("div#value").html(res.emp_name);
//jQuery("div#value").html(res.emp_email);
//jQuery("div#value").html(res.emp_desig);
//jQuery("div#value").html(res.emp_contact);
//jQuery("div#value").html(res.emp_bg);
		jQuery("div#value").html(res.emp_status);
		}
}
});
});
});
</script>
</head>
<body>
<form><h2>Employee View</h2>
<?php //print_r($saveEmp);?>
	<table border="1" cellspacing="0" cellpadding="1">
    	<tr>
        <td>Employee Name</td>
        <td>Employee Email</td>
        <td>Employee Designation</td>
        <td>Employee Contact No.</td>
        <td>Employee Blood group</td>
        <td>Edit</td>
		<td>Delete</td>
        <td>Status</td>
        </tr>
        <?php foreach($saveEmp as $saveEmpAs){?>
        
        <tr>
		<td><?php echo $saveEmpAs['emp_name'];?></td>
        <td><?php echo $saveEmpAs['emp_email'];?></td>
        <td><?php echo $saveEmpAs['emp_desig'];?></td>
        <td><?php echo $saveEmpAs['emp_contact'];?></td>
        <td><?php echo $saveEmpAs['emp_bg'];?></td> 
        <td><a href="<?php echo base_url('Employee/editEmpData').'/'.$saveEmpAs['emp_id'];?>">Edit</a></td>  
        <td><a href="<?php echo base_url('Employee/delEmpData').'/'.$saveEmpAs['emp_id'];?>">Delete</a></td>
        <td><select name="emp_status" id="emp_status">
        	<option value="">Please Select</option>
        	<option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            </select></td>  
        <?php }?>
        </tr>
    </table>
</form>
</body>
</html>