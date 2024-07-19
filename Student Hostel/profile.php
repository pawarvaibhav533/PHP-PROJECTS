<?php
session_start();
//connectivity
require('config.php');

if($_SESSION['user']=="")
{
	header('location:index.php');
}

?>

<html>
<head>
<title>Student Hostel</title>
<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="engine/js/mootools.js"></script>
	<script type="text/javascript" src="engine/js/visualslideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#6E68FF"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF"><center>Student Hostel</center></a></font></b><marquee direction="left" height="100%">Hostel Information</marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <!--Slider-->
      <div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/banner_01.jpg" alt="" title="" id="wows1_0"/></li>
<li><img src="data1/images/highlightnews.jpg" alt="" title="" id="wows1_1"/></li>
<li><img src="data1/images/img21644.jpg" alt="" title="" id="wows1_2"/></li>
<li><img src="data1/images/url.jpg" alt="" title="" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title=""><img src="data1/tooltips/banner_01.jpg" alt=""/>1</a>
<a href="#" title=""><img src="data1/tooltips/highlightnews.jpg" alt=""/>2</a>
<a href="#" title=""><img src="data1/tooltips/img21644.jpg" alt=""/>3</a>
<a href="#" title=""><img src="data1/tooltips/url.jpg" alt=""/>4</a>
</div></div>
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <!--slider end-->
    </th>
    </tr>
	
	
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div id="horizontalmenu">
        
		<a href="index.php" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>HOME</b></a>
		<a href="profile.php?option=service" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>SERVICE</b></a>
		<a href="profile.php?option=gallery" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>GALLERY</b></a>
		
		<a href="profile.php?option=about" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ABOUT US</b></a>
		<a href="profile.php?option=contact" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>CONTACT US</b></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php" style="text-decoration:none;"><input type="submit" value="Logout" name="logout" ></a>
		</div>
	   </td>
      </tr>
	  
	  
    <tr>
    <td width="974" height="500" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
	   <div id="vertical">
        <ul>
		<li><a href="profile.php" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>HOME</b></a></li>
		
		<li><a href="profile.php?option=rfees" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>ROOM FEES</b></a></li>
		<li><a href="profile.php?option=mfees" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>MESS FEES</b></a></li>
		<li><a href="profile.php?option=ravailable" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>BOOK ROOM</b></a></li>
		<li><a href="profile.php?option=maccount" onMouseOver="this.style.color='#FF0000'" onMouseOut="this.style.color='#0000FF'" style="color:#0000FF ; text-decoration:none;"><b>BOOK MESS</b></a></li>
        </ul>
	  </div>
	  
	  <center><a href="#" title=""><img src="data1/tooltips/welcome.jpg" alt=""/></a></center>
	  <br><br>
    </html>
	
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'mfees':
		include('mfees.php');
		break;
		case 'rfees':
		include('rfees.php');
		break;
		case 'maccount':
		include('maccount.php');
		break;
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'ravailable':
		include('ravailable.php');
		break;
		case 'service':
		include ('service.php');
		break;
		case 'admission':
		include ('admission.php');
		break;
		case 'news':
		include('news.php');
		break;
		case 'sdp':
		include('sdp.php');
		break;
		case 'notice':
		include('notice.php');
		break;
	}}

	?>
	
      
      </td>
      <td width="343"  valign="top" style="background-color:#468EFF" >
	  <?php  
		$today = date("d/m/Y"); 
		echo $today;
	 ?><br></br>
	 <?php
		echo date("h:i:sa");
	 ?>
	<br></br>
      <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">Hostel Updates</div><br></b></font></center>
      	<marquee direction="up" height="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
			<center><a href="profile.php?option=news" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
			<center><a href="profile.php?option=sdp" style="text-decoration:none"><font size="+1"><b>Student Development Programme</b></font></a></center><br>
			<center><a href="profile.php?option=notice" style="text-decoration:none"><font size="+1"><b>Notice Board</b></font></a></center><br>
		</marquee>
      </td>
    </tr>
    <tr>
      <td height="40" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; 2020 Managed by Student Hostel</b></center></td>
    </tr>
  </tbody>
</table>
</html>