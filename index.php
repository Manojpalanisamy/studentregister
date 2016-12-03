<html>

<head>

<title>Student Registration Page</title>


</head>

<body>


<form method="POST" action="index.php" > 

<table width='600' border='5' align='center' bgcolor="#E6E6FA">

<tr>
<td colspan='5' align='center'><h1>MCM Student Registration Form</h1></td>
</tr>

<tr>
<td align='center'>Student Id:</td>
<td><input type='number' name='id' /></td>
</tr>

<tr>
<td align='center'>Student Name:</td>
<td><input type='text' name='name' /></td>
</tr>

<tr>
<td align='center'>Address:</td>
<td><input type='text' name='address' /></td>
</tr>

<tr>
<td align='center'>Email:</td>
<td><input type='text' name='email' /></td>
</tr>

<tr>
<td align='center'>Contact Number:</td>
<td><input type='text' name='contact' /></td>
</tr>

<tr>

<td colspan='5' align='center'><input type='submit' name='submit' value='Register'/></td>
</tr>

</table>

</form>

</body>

</html>

<?php

$con=mysqli_connect("localhost","root","","registration");

	if(isset($_POST['submit']))
	{
		$user_id=$_POST['id'];
		$user_name=$_POST['name'];
		$user_address=$_POST['address'];
		$user_email=$_POST['email'];
		$user_contact=$_POST['contact'];
		
	if($user_id=='')
	{
		echo "<script>alert('Please enter valid id')</script>";
		exit();
	}
	
	if($user_name=='')
	{
		echo "<script>alert('Please enter valid name')</script>";
		exit();
	}
	
	if($user_address=='')
	{
		echo "<script>alert('Please enter valid address')</script>";
		exit();
	}
	
	if($user_email=='')
	{
		echo "<script>alert('Please enter valid email')</script>";
		exit();
	}
	
	if($user_contact=='')
	{
		echo "<script>alert('Please enter valid contact')</script>";
		exit();
	}
	
	$query="insert into studenttest(stu_id,stu_name,stu_address,stu_email,stu_contact) values ('$user_id','$user_name','$user_address','$user_email','$user_contact')";
	if(mysqli_query($con,$query)){
	echo "<script>alert('Registration Successful')</script>";
	}
	}
mysqli_close($con);	
?>
