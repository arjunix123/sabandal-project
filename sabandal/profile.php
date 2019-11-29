<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  

<link rel="stylesheet" href="style2.css">
    <style>   
        body{  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 100px;  
    background-color: azure ;  
    font-family: verdana;  
    font-size: 100%  
background-size: 100% 100%;
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
      
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php include_once('sidebar.php');?>
<center><h1 style="color:teal;font-size:30px;">--MY PROFILE--</h1></center>  
</br>

<!DOCTYPE html>
<html>
<body background="travel1.jpg">
<?php include_once('connection.php');?>

<?php 
$user=$_SESSION['sess_user'];
$query = mysqli_query( $con,"select * from students where username='$user'") or die( mysqli_error($con));
$row=mysqli_fetch_array($query);
if($row>0)
{
?>

<center>
<table align="center" width="100%" cellspacing="0">
<tr>
 <th>Username:</th> 
	 <td><?php echo $row['username']; ?> </td>
</tr>
<tr>
 <th>Name:</th> 
	 <td><?php echo $row['student_name']; ?></td>
</tr>
<tr>
 <th>E-mail:</th> 
	 <td><?php echo $row['student_email']; ?></td>
</tr>
<tr>
 <th>Contact No:</th> 
	 <td><?php echo $row['student_contact']; ?></td>
</tr>
<tr>
 <th>Address:</th> 
	 <td><?php echo $row['student_address']; ?></td>
</tr></table>
</center>


<?php } else {?>
<?php } ?>
</body>
<center>
</html>

<?php
mysqli_close($con);

?>


<?php
}
?>
