<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<style>

div.r {
  text-align: right;
} 

</style>
<!doctype html>  
<html>  
<head>  
 <link rel="stylesheet" href="style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeToggle("slow");
e.preventDefault();
  });
});


</script>

</head>  
<body class="w3-container w3-teal">  

<?php include_once('sidebar.php');?>
<div class="r"><h2>Welcome, <?=$_SESSION['sess_user'];?>! </div>
<center><img src="cebu1.jpg"></center>
<div class="w3-display-container" style="margin-bottom:50px;margin-left:50px">
  <div class="w3-display-bottomleft w3-container w3-amber w3-hover-orange w3-hide-small"
   style="bottom:10%;opacity:0.7;width:53%">
  <h2><b><button>A Must Visit: The Queen City of the South</button></b></h2>

</div>
</div>
<div id="div1" class="w3-display-container w3-yellow" w3-hover-orange style="margin-bottom:50px;opacity:0.9;margin-left:50px;display:none;" >
Travel bloggers absolutely love Cebu, and with good reason. For starters, the world&#39;s 6th best island is home to a plethora of striking natural wonders, including Kawasan Falls, Casino Peak, Lantawan Cliff and a whole lot more. Drenched in culture and history, the island is also dotted with historic treasures, from colonial houses to old churches. To top it all off, there&#39;s a new attraction in Cebu that&#39;s luring travelers from all over the world &#45; Cebu Safari and Adventure Park. And, did we mention that the island has tons of mouthwatering dishes as well, like the Cebu lechon?
</br></br>
Before we travel the world, why not explore our own local province and indulge in its riches. Afterall, it does not require a lot of budget and travel time but offers the same amount of satisfaction!
</div>
</body>  
</html>  
<?php
}
?>