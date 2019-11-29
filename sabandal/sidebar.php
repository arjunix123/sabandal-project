

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="member.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="insert.php">Edit Profile</a>
  <a href="http://localhost/hard%20code/gallery.php">Gallery</a>
<a href="logout.php">Logout</a></h2>  
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#17;&#17; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>