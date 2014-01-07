<?php include("includes/config.php");
if($_SESSION["email"]=="")
{
echo'
<script> document.location.href="admin.php";
</script>;';	
	
}
if(isset($_GET["d"]) && $_GET["d"]==1 && $_GET["id"]!="")
{
	$id=$_GET["id"];
	//$sql_up="delete from users where id={$id}";
	if(mysql_query($sql_up))
	{
	echo'Users deleted sucessfully';	
		
	}
	
	
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

 <!-- <link rel="stylesheet" type="text/css" href="css/social-buttons.css">
 <link rel="stylesheet" type="text/css" href="social-buttons-3.css"> -->

 <link rel="stylesheet" href="social-likes.css">
<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
<!--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
<title></title>
<style type="text/css">
	}
	textarea{
		width: 450px;
		height: 250px;
		max-width: 450px;
		max-height: 250px;
	}
	#news
	{

		padding-top: 70px;
	}
	#about
	{
		padding-top: 40px;
	}
#unveri
{
	padding-top: 70px;
}

.social-likes
{
	float: right;
	padding-top: 0;
	margin-top: 0;
}
.footer{
    height: 100px; 
    width:100%;
    position: absolute;
    left: 0;
    bottom: 0; 
}
	body{
		 padding-top: 100px; 
      	 background-repeat:no-repeat;
      	 background-size:100%;
		height: 100%;
		display: block;
			padding:0 !important;
			margin:0;*/
	min-height: 100%;
	min-height:100%;
font:14psx/1.3 'Segoe UI',Arial, sans-serif;
background:url(img/bg.jpg);
  font-family:Arial, Helvetica, sans-serif;
  color:000;
  font-size:12px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
	}

body.element{
	position: absolute;
	bottom: 0;
}
body >.element{
	position: fixed;
}
</style>

<!--modal window script-->
	<style type="text/css">
/*style*/
  .modalDialog {
    position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
/*functionality*/
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}
/*close*/
.Close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

#hel
{
	height: 500px;
	overflow: auto;
}
#push,
  #footer {
    height: 60px;
      }
       .container {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }
      #footer {
        background-color: #f5f5f5;
        background:url(img/footer.png);
        color: white;
      
      }
       @media (max-width: 767px) {
        
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
</style>

<script type="text/javascript">
	$(document).ready(function () {
    $('.toggle1').hide();
    $('a.togglelink1').on('click', function (e) {
        e.preventDefault();
        var elem = $(this).next('.toggle1')
        $('.toggle1').not(elem).hide('slow');
        elem.toggle('slow');
    });
});
$(document).ready(function(){
	$('.carousel').carousel(
	{
		interval:5000
	})

});
// alert("Welcome to iAlert site:")

</script>
</head>
<body>
<div class="container">

<header class="row">
  <div class="span12">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-inner">
  <a href="#" class="brand"><img src="img/logo.png" class="img-circle"></a>
  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>  
  </a>
  <div class="nav-collapse collapse">
  <ul class="nav">
  <li class="divider-vertical"></li>  
 <li><a href="admin.php?lg=1">Logout</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="about.php">About</a></li>  
  <li class="divider-vertical"></li>  
  <li><a href="#">News</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="contact.php">Contact</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="#">Download app</a></li>
  <li class="divider-vertical"></li>    
  <li><a href="#">users</a></li>  
  <li class="divider-vertical"></li>  
   <form class="form-search pull-right" style="padding-top:10px;">
  <div class="input-append">
   <input type="text" placeholder="enter search">
  </div>
</form>   
  </ul>
  </div>
  </div>
  </nav>
  </div>
</header>

<div class="row" id="main-content">
 
 <div class="span12" id="unveri">
 
 <div class="well" >
  <h2 style="text-align:center;">i-alert Application Users</h2>
  <table  class="table  table-bordered ">
  
  <?php
  
  if(isset($_GET["edit"]) && $_GET["edit"]==1 && $_GET["id"]!="")
{
	$id=$_GET["id"];
$sq="select * from users where id=$id";
$res=mysql_query($sq);
$rw=mysql_fetch_array($res);




$query="select * from jobs";
$result=mysql_query($query);

echo'    <form method="POST" action="users.php">
    <input name="first" type="text"class="inputs-level" value="'.$rw["fname"].'"> 	
    <input name="last" type="text"class="input-level" value="'.$rw["lname"].'">	
    <input name="email" type="text" class="input-level" value="'.$rw["email"].'">	
     <select name="jobs" class="selectpicker">
 <optgroup label="Select Job">
 ';
 while($row=mysql_fetch_array($result))
 {
	 
echo '<option value="'.$row[id].'"> '.$row[name].'</option>';	 
 }
     
   echo' </optgroup>
</select>
   
   <input  name="myid" type ="hidden" class="inputs-level" value="'.$id.'"> 	
   <!--  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" >cancel</button> -->
    <button  name="submit" type="submit" class="btn btn-large btn btn-primary" >Update</button>

    </form>';
	
	
	
	
}
elseif(isset($_POST["submit"]) && isset($_POST["myid"]) && $_POST["myid"]!="" )
{
$fname=	$_POST["first"];
$lname=	$_POST["last"];
$email=	$_POST["email"];
$id=	$_POST["myid"];
$job=	$_POST["jobs"];

$qr="update users set fname='{$fname}',
                      lname='{$lname}',
					  email='{$email}',
					  job={$job}
					  where id={$id}";
$rs=mysql_query($qr);
if($rs)
{
	echo'<br/><p align="center"> User updated Thank you</p>';
}
else
{
	echo'<br/><p align="center"> User not updated  Please try again</p>';
}
	
}
elseif(isset($_POST["submit1"]) && isset($_POST["email"]) && $_POST["submit1"]!="" )
{
$fname=	$_POST["first"];
$lname=	$_POST["last"];
$email=	$_POST["email"];
$id=	$_POST["myid"];
$job=	$_POST["jobs"];
if($job==2)
{
$pass="admin";	
	
}
else
{
	$pass="user";
}

$pass=
$qr="insert into users(fname,lname,email,job,password) values('{$fname}','{$lname}', '{$email}', {$job},'{$pass}')";
$rs=mysql_query($qr);
if($rs)
{
	echo'<br/><p align="center"> User Added sucessfully</p>';
}
else
{
	echo'<br/><p align="center"> User not Added  Please try again</p>';
}
	
}
elseif(isset($_GET["add"]) && $_GET["add"]!="" )
{
	
  echo'<form method="POST" action="users.php">
    <input name="first" type="text"class="inputs-level" value="" placeholder="Firstname"> 	
    <input name="last" type="text"class="input-level" value="" placeholder="Lastname">	
    <input name="email" type="text" class="input-level" value="" placeholder="Email">	
     <select name="jobs" class="selectpicker">
 <optgroup label="Select Job">
 ';
 $query="select * from jobs";
$result=mysql_query($query);
 while($row=mysql_fetch_array($result))
 {
	 
echo '<option value="'.$row[id].'"> '.$row[name].'</option>';	 
 }
     
   echo' </optgroup>
</select>
   
   	
   <!--  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" >cancel</button> -->
    <button  name="submit1" type="submit" value="adduser" class="btn btn-large btn btn-primary" >Register</button>

    </form>';
		
	
	
}
else {
  $h1="#FFFFFF";
  $h2="#FF9999";
 $sql_news="SELECT u.fname,u.lname,u.email,u.id As uid,j.name FROM users u inner join jobs j on(u.job=j.id)"; 
 $res=mysql_query($sql_news	);
 if($res)
 {
 if(mysql_num_rows($res)>=1)
 {
	 $i=0;
 echo' 
 
 
 <tr><th>Picture</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Position</th></tr>';
  while($r=mysql_fetch_array($res))
  {
	  
	  
	  $i=$i+1;
	  if($i%2==0)
	  {
		  $col="warning";
	  }
	  else
	  {
		$col="success";  
	  }
 echo'<tr class="'.$col.'" > <td ><img src="img/contacts-icon.png" alt="Image" height="100" width="100" /></td><td>'.$r["fname"].'</td><td>'.$r["lname"].'</td><td>'.$r["email"].'</td><td>'.$r["name"].'</td><td><a href="users.php?id='.$r[uid].'&edit=1">Edit</td><td><a href="users.php?id='.$r["uid"].'&d=1">Delete</td></tr>'; 

  }
  echo'
  
  </table>';
  
 
  
 }
 }
}
  ?>
  </table>
  <p align="center"> <a  style="" href="users.php?add=1">Add User</a></p>
</div>
 </div>

</div><!-- end main contant-->
   <div id="push"></div>

</div><!--main-container-->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id="footer">
    <div class="container">
     <p>© Copyright 2013 <a href="#">iAlert.com</a> All Rights Reserved | powered by 
      </p>
<a class="btn btn-primary btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a class="btn  btn-primary btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a class="btn btn-social-icon btn-danger btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
      </div>
    </div>
</body>

</html>
