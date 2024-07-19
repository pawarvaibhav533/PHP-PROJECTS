<?php
//connectivity
require('config.php');
	 
?>
	  <h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
	   <div id="vertical">
        <ul>
		<li><a href="profile.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>HOME</b></a></li>
		
		<li><a href="profile.php?option=rfees" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM FEES</b></a></li>
		<li><a href="profile.php?option=mfees" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MESS FEES</b></a></li>
		<li><a href="profile.php?option=ravailable" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>BOOK ROOM</b></a></li>
		</ul>
	  </div>
<body style="background-color:#E5E5E5">
<div align="center">
<form method="post" enctype="multipart/form-data">
	<fieldset style="display: inline-flex; background-color: #D8D8D8;">
	<legend><font size="+2"><strong>Book Mess</strong></font></legend><br>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		margin-right: 5%;
		margin-left: 5%;
		float: center;
		background-color: #D8D8D8;
		
	}

	</style>
	

     
</head>

<body>
<?php
include('include/config.php');
session_start();
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$messtype=$_POST['field_1'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$mess_nos=$_POST['mess_nos'];
$amount=$_POST['messprice'];

$checkmess= "select count(*) from messdetail where mess_type='".$messtype."' ";
$check=mysqli_query($con,$checkmess);
$messcount=mysqli_fetch_array($check,MYSQLI_NUM);
 $checkcount=$messcount[0];
if($checkcount>=10)
{
?> <script>alert("Sorry Seats Are not Available :( please try another Option !!");</script>
<?php }
else{
$s1="INSERT INTO messdetail (username,checkin_date,checkout_date,mess_type,no_of_seats,amount)VALUES('".$username."','".$startdate."','".$enddate."','".$messype."','".$mess_nos."','".$amount."')";
mysqli_query($con,$s1);
header("location:maccount.php");
}
}
?>

<div id="contenar">

	<div id="r">
	<form action="maccount.php" method="POST">
	<h2 align="center" id="h"></h2>

	<?php if(isset($_GET['success'])){
		echo '<h4> Your Seats Booked successfully, You will be Contacted Soon !!!</h4>';
	}?>
        <table >
		
          <tr>
            <td width="113">Check in Date</td>
            <td width="215">
				&nbsp;&nbsp;&nbsp;&nbsp;<input name="startdate1" type="date"  value="<?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?>" /></td>
          </tr>
          <tr>
            <td>Check out Date</td>
            <td>
				&nbsp;&nbsp;&nbsp;&nbsp;<input name="enddate1" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?>" onchange='this.form.submit()' /></td>
          </tr>
			
       </table>
		</form>
		<form action="maccount.php" method="POST">
        <table >
		
          <tr>
            <td width="113"></td>
            <td width="215">
              <input name="startdate" type="hidden" value=" <?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?> " /></td>
          </tr>
          <tr>
            <td></td>
            <td><input name="username" type="hidden" value=" <?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>"  />
              <input name="enddate" type="hidden" value=" <?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?> "  /></td>
          </tr>
		  <tr>
            <td>Mess Type </td>
            <td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="text_select" id="field_1" name="field_1" >  
<option value="00">- Select -</option>   
<?php if(isset($_POST['startdate1'])){
$paymentDate = $_POST['startdate1'];
$contractDateBegin = '2020-01-20';
$contractDateEnd ='2020-02-25';

if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd))
{
 $s2="select * from messtype where mess_seson ='high season' ";
$s3=mysqli_query($con,$s2);
}
else
{
$s2="select * from messtype where mess_seson='low season' ";
$s3=mysqli_query($con,$s2);
}


?>
<?php while($catdata=mysqli_fetch_array($s3,MYSQLI_ASSOC)) { ?>  <option value="<?php echo $catdata['mess_price']; ?>"><?php echo $catdata['mess_type']; ?></option>
           <?php } ?>
		   <?php } ?>
           </select></td>
          </tr>
		  <tr>
            <td>Price per Seat</td>
            <td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="a1"  ></span>&nbsp;₨
           </td>
          </tr>
		  <tr>
            <td>No. of Seats </td>
            <td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="mess_nos" id="mess_nos" type="text " size="10" onChange="gettotal1()" /></td>
          </tr>
		  <tr>
            <td>Total Amount To Pay</td>
            <td>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="messprice" id="total1"  size="10px" readonly="" />
           </td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Pay & Book" />
			<input type="reset" name="reset" value="Reset"  />
			</td>
            </tr>
			
       </table>
		</form>
		
		<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;




}
notEmpty()
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('mess_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }
			</script>
 
		
	</div>
</div>
</body>
</html>
