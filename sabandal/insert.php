<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
 <link rel="stylesheet" href="style2.css">
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    font-family: verdana;  
    font-size: 100%  
      
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
              
          
    </style>  
</head>  
<body>  
<?php include_once('sidebar.php');?>
<center><h1 style="color:blue;font-size:30px;">MY PROFILE</h1>
</center>  


<!DOCTYPE html>
<html>
<center>

<head>
<link href="insert.css" rel="stylesheet">
</head>
<body>
<form action="insert.php" method="post">
<h2>Please complete the information below:</h2>
<label>Username:</label>
<input class="input" name="username" type="text" value="">
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>Contact:</label>
<input class="input" name="contact" type="text" value="">
<label>Address:</label>
<textarea cols="25" name="address" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Update my Profile">
</form>
</div>
</div>
</body>
<center>
</html>

<?php
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con, 'logins') or die("cannot select DB");  

$user=$_SESSION['sess_user'];
$sql = "delete from students where username='$user'";
if(mysqli_query($con, $sql)){ 
    echo "Old profile was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($link); 
} 

if(isset($_POST['submit'])){ 
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !=''){

$query = mysqli_query($con, "insert into students(username, student_name, student_email, student_contact, student_address) values ('$username', '$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Done updating your profile!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($con);
?>
<?php
}
?>