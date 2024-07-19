<?php
//logout
if(isset($_POST['logout']))
{
	header('location:adminlogout.php');
}
?>
<div align="center">
<form method="post">
<table width="1023" height="400" border="1">
  <tbody>
  
    <tr>
      <td colspan="2" bgcolor="#5D5CEC"><center><font size="+2"><strong style="color: #FFFFFF">Administrator Control Panel</strong></font></center><div align="right">
	  <a href="adminlogout.php">
	  <input type="submit" value="Logout" name="logout"></div>
	  </a>
	  </td>
    </tr>

    <tr>
      <td width="323" valign="top" bgcolor="#D9D9D9">
	  <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `name`, `username`, `classs`, `address`, `dob`, `gender`, `mob`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "hostel");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<html>
	<div id="vertical">
	   <br><br>
        <ul>
		<li><a href="backend.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>HOME</b></a></li>
		<li><a href="muser.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MANAGE USERS</b></a></li>
		<li><a href="rdetail.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM DETAIL</b></a></li>
		<li><a href="mdetail.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MESS DETAIL</b></a></li>
		<li><a href="rtype.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM TYPES</b></a></li>
		<li><a href="mtype.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MESS TYPES</b></a></li>
		</ul>
	</div>
	  
	 <center><img src="img/admin.jpg"></center>
	 <br><br>
	 <br><br>
</html>