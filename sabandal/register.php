<!doctype html>  
<html>  
<head>  
<title>Register</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>  
<body class="w3-container w3-blue">  
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<center><h1>Welcome Guest!</h1>
</br> 
<hr>

<form action="" method="POST">  
    <legend>  
    <fieldset>  
<p></p>
New Username: <input type="text" name="user">
</br>   <p></p>
New Password: <input type="password" name="pass"> 
</br>   
|<input class="w3-button" type="submit" value="Register" name="submit" />|
              
        </fieldset>  
        </legend>  
</form>  
</div>
</center>

 <p><a href="login.php">Existing User? Login here!</a></p>  

<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con, 'logins') or die("cannot select DB");  
  
    $query=mysqli_query($con, "SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con, $sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   