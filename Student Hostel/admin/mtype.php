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
      <td width="323" valign="top">
	  	<div id="vertical"><br><br>
        <ul>
		<li><a href="backend.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>HOME</b></a></li>
		<li><a href="muser.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MANAGE USERS</b></a></li>
		<li><a href="rdetail.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM DETAIL</b></a></li>
		<li><a href="mdetail.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MESS DETAIL</b></a></li>
		<li><a href="rtype.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM TYPES</b></a></li>
	
		</ul>
	  </div><h2><center>MESS TYPES</h2></center>
	  <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `messtype` WHERE CONCAT(`mess_id`, `mess_type`, `mess_price`, `mess_seson`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `messtype`";
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
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
   <body>
        
        <center><form action="backend.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br></center>
            
            <center><table>
                <tr>
                    <th>Mess Id</th>
					<th>Mess Type</th>
                    <th>Mess Price</th>
                    <th>Mess Seson</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><center><?php echo $row['mess_id'];?></center></td>
                    <td><center><?php echo $row['mess_type'];?></center></td>
					<td><center><?php echo $row['mess_price'];?></center></td>
                    <td><center><?php echo $row['mess_seson'];?></center></td>
					<td><a href='http://localhost/phpmyadmin/sql.php?server=1&db=hostel&table=messtype&pos=0'>Delete</a></td>
                </tr>
				
                <?php endwhile;?>
            </table>
           </form>
        <br><br>
		 </body>
		</html>
      </td>
    </tr>
  </tbody>
</table></center>
</form>
</div>