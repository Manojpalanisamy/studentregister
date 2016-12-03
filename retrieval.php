<html>
	<head>
		<title>Student Informational Retrieval</title>	
	</head>
	<body bgcolor="#E6E6FA">
	</body>
	
</html>

<?php
		error_reporting(0);

$con=mysqli_connect("localhost","root","","registration");
 echo "<div align='center' class='resp_code'>";
 echo "<h1>MCM Student Information Retrieval Form</h1";
echo "<div align='center'>";
  echo "<form  method='post' action='retrieval.php'  id='searchform' class='frms' name='myform'> 
	      <input  type='text' id='txt' name='name' autocomplete='off'> 
	      <input  type='submit' name='submit' value='Search' id='search' onclick='check();'>
		  <input  type='submit' name='reset' value='Reset' id='reset' onclick='reset_table()'> 
	    </form> ";
 echo "</div>";
 echo "<div align='center'>";
 $search = $_POST['name'];
  if(isset($_POST['name']))
    {	
        echo "<table class='table'>
		<tr><th>Student Id</th>
		<th>Student Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Contact Number</th>
		</tr>";	    
	    $qry = 'SELECT * FROM studenttest WHERE stu_id like "%'.$search.'%" OR stu_name like "%'.$search.'%" OR stu_address like "%'.$search.'%" OR stu_email like "%'.$search.'%" OR stu_contact like "%'.$search.'%"';
	
	
		if ($result=mysqli_query($con,$qry))
		
	 $count = mysqli_num_rows($result);
		if($count>0)
		{
			  while($row=mysqli_fetch_row($result))   
			   {      
					$id = $row['stu_id'];
					$nam = $row['stu_name'];
					$addr = $row['stu_address'];  
					$email = $row['stu_email'];
					$contact = $row['stu_contact'];
					echo "<tr><td id='id'>$row[0]</td>
					<td id='nam'>$row[1]</td>
					<td id='addr'>$row[2]</td>
					<td id='email'>$row[3]</td>
					<td id='contact'>$row[4]</td>
					</tr>";
			   }    
		
	
		}
		else
		{
			$nrf = "Search Text Not Found";
		}
    }
    else
		
		
    {
	    echo "<table class='table'>
		<tr><th>Student Id</th>
		<th>Student Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Contact Number</th>
		</tr>";	  

	   // $query = mysqli_query($con,"SELECT * FROM studenttest");
	  /* while($row=mysqli_fetch_array($query))
	    {
		$id = $row['stu_id'];
		$nam = $row['stu_name'];
		$addr = $row['stu_address'];  
		$email = $row['stu_email'];
		$contact = $row['stu_contact'];
		echo "<tr><td id='id'>$row[0]</td>
		<td id='nam'>$row[1]</td>
		<td id='addr'>$row[2]</td>
		<td id='email'>$row[3]</td>
		<td id='contact'>$row[4]</td>
		</tr>";  
	    } 
		*/
		
    }
    echo "</table>";
    echo "</div>";
	echo "<div style='font-weight:bold;color:red;' align='center'>$nrf</div>";
	echo "</div>";
?>
	

