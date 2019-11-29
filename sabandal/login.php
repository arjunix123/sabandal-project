<!doctype html>  
<html>  
<head>  
<title>Login</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>  
<body class="w3-container w3-teal">  
<div class="w3-content" style="max-width:2000px;margin-top:46px">
 <center><h1>Welcome Guest !</h1>
</br> 
<hr>
</br> 
<form action="" method="POST">  
    <legend>  
    <fieldset> 
</br> 
Username: <input type="text" name="user" value="default" onfocus="this.value=''"><br />  
<p></p>
Password: <input type="password" name="pass" value="default" onfocus="this.value=''"><br />   
<br /><br />
|<input class="w3-button" type="submit" value="Login Now" name="submit" />|
    </legend>  
    </fieldset>  
</form>  
</div>
   <p><a href="register.php">New User? Register here!</a></p>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con, 'logins') or die("cannot select DB");  
  
    $query=mysqli_query($con, "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</center>  
</body>  
</html>   