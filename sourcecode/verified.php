<?php include("includes/config.php");
if($_SESSION["email"]=="")
{
echo'
<script> document.location.href="admin.php";
</script>;';	
	
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
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

 <!-- <link rel="stylesheet" type="text/css" href="css/social-buttons.css">
 <link rel="stylesheet" type="text/css" href="social-buttons-3.css"> -->

 <link rel="stylesheet" href="social-likes.css">
<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
<!--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
<title></title>
<style type="text/css">
	
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
	.form-search
{
  padding-top: 10px;
  padding-right: 20px;
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
background:url(img/bg.jpg);/*(http://images.all-free-download.com/images/graphiclarge/colorful_abstract_background_vector_art_148608.jpg);*/
  font-family:Arial, Helvetica, sans-serif;
  color:000;
  font-size:12px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
	}
/*ul.a:hover{
	text-decoration:blue;
}*/

/*html,body{
	height: 100%;
	overflow: auto;
	bottom: 0;
}*/
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
/*#news
{
	height: 750px;
	overflow: auto;
}*/
/*#tabscontent
{
	height: 700px;
	overflow: auto;
}*/

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
         text-align: center;
      
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
  <li><a href="about1.php">About</a></li>  
  <li class="divider-vertical"></li>  
  <li><a href="news.php">News</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="contact1.php">Contact</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="#">Download app</a></li>
  <li class="divider-vertical"></li>      
  <li><a href="users.php">users</a></li> 
  </ul>
  <form method="GET" action="#"  class="form-search pull-right"  id ="search">
      <input type="text" class="search-query" name="term" placeholder="enter search">
    </form>
  </div>
  </div>
  </nav>
  </div>
</header>
<div class="row" id="main-content">
<div class="span12" id ="news">

<div class="well" id ="tabscontent">

  <h4 style="text-align:center;">Verified News Alerts</h4>
<div class="tabbable tabs-top">

<?php
if(isset($_GET["tab"])&& $_GET["tab"]!="")
{
	$tab=$_GET["tab"];
	if($tab==1)
	{
		echo'<ul class= "nav nav-pills">
<li class="active"><a href="#Politics " data-toggle="tab">Politics</a></li>
<li class=""><a href="#sports" data-toggle="tab">Sports</a></li>
<li class=""><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li class=""><a href="#Biz" data-toggle="tab">Business</a></li>
<li class=""><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==2)
	{
		echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li class="active"><a href="#sports" data-toggle="tab">Sports</a></li>
<li class=""><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li class=""><a href="#Biz" data-toggle="tab">Business</a></li>
<li class=""><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==3)
	{
		echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li class="active" ><a href="#local" data-toggle="tab">Local News</a></li>
<li ><a href="#inter" data-toggle="tab">International News</a></li>
<li class=""><a href="#Biz" data-toggle="tab">Business</a></li>
<li class=""><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==4)
	{
		echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li ><a href="#local" data-toggle="tab">Local News</a></li>
<li class="active"><a href="#inter" data-toggle="tab">International News</a></li>
<li ><a href="#Biz" data-toggle="tab">Business</a></li>
<li class=""><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==5)
	{
				echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li ><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li class="active"><a href="#Biz" data-toggle="tab">Business</a></li>
<li ><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==6)
	{
						echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li ><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li ><a href="#Biz" data-toggle="tab">Business</a></li>
<li  class="active"><a href="#health" data-toggle="tab">Health</a></li>
<li><a href="#education" data-toggle="tab">Education</a></li>

<li class=""><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==7)
	{
								echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li ><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li ><a href="#Biz" data-toggle="tab">Business</a></li>
<li ><a href="#health" data-toggle="tab">Health</a></li>
<li class="active"><a href="#education" data-toggle="tab">Education</a></li>

<li ><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	elseif($tab==8)
	{
		echo'<ul class= "nav nav-pills">
<li ><a href="#Politics " data-toggle="tab">Politics</a></li>
<li><a href="#sports" data-toggle="tab">Sports</a></li>
<li ><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li ><a href="#Biz" data-toggle="tab">Business</a></li>
<li ><a href="#health" data-toggle="tab">Health</a></li>
<li ><a href="#education" data-toggle="tab">Education</a></li>

<li  class="active"><a href="#ent" data-toggle="tab">Entertainment</a></li>

</ul>';
	}
	
}
else
{
echo'<ul class= "nav nav-pills">
<li class=""><a href="#Politics " data-toggle="tab">Politics</a></li>
<li class=""><a href="#sports" data-toggle="tab">Sports</a></li>
<li class=""><a href="#local" data-toggle="tab">Local News</a></li>
<li class=""><a href="#inter" data-toggle="tab">International News</a></li>
<li class=""><a href="#Biz" data-toggle="tab">Business</a></li>
<li class=""><a href="#health" data-toggle="tab">Health</a></li>
<li class=""><a href="#education" data-toggle="tab">Education</a></li>
<li class="active" ><a href="#ent" data-toggle="tab">Entertainment</a></li>
</ul>';
}
?>

<div class="tab-content">

<div class="tab-pane active" id="Politics">


<?php
$tab=1;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=2 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==1 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>';

	
		
	}
	
	
}


?>


</div>
 


<div class="tab-pane" id="sports">

<?php
$tab=2;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=3 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==2 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>

</div><!--end of sports
************************************************-->
<div class="tab-pane" id="local">
<?php
$tab=3;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=5 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==3 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div><!--end of local news
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div class="tab-pane" id="inter">
<?php
$tab=4;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=7 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==4 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div><!--end of international
'''''''''''''''''''''''''''''''''''''''''''''-->
<div class="tab-pane " id="education">

<?php
$tab=5;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=6 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==5 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div>
<!--bis section-->
<div class="tab-pane" id="Biz">

<?php
$tab=6;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=4 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==6 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div>
<!--helth section-->
<div class="tab-pane" id="health">
<?php
$tab=7;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=8 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==7 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div>
<!-- Enttertainment-->
<div class="tab-pane" id="ent">
<?php
$tab=8;
$sql_pol="SELECT * FROM news where check1=1 and cat_id=1 ";
$result=mysql_query($sql_pol);
if($result)
{
	while($r=mysql_fetch_array($result))
	{
		// <img  src="ialert/image_uploads/$r[face_image]0" class="pull-left">
	echo ' <div class="col-sm-6 col-md-4">
      
        <h6 style="text-align:left">'.$r["title"].'</h6>
		<h6><hr style=" background-color:#FF9900" /> </h6>
		
		   <div class="thumbnail clearfix">
     <img  src="ialert/image_uploads/'.$r["face_image"].'"  height="100" width="100"class="pull-left">
      <div class="caption">
		
       <p style="text-align:left;">
        '.$r["description"].'.</p>
      </div>

    </div>';
	
	if(isset($_GET["tab"])&& isset($_GET["id"]) && $_GET["id"]!="" && $_GET["tab"]==8 && $_GET["id"]==$r["id"])
	{
		
		if($r["video"]!="")
 {
	 
	 
	 
	  $name=$r["video"];
	    $path="ialert/video_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   ';
	 
	 
	 
 }
 
 elseif($r["video"]=="" && $r["audio"]!="" )
 {
	  $name=$r["audio"];
	  $path="ialert/audio_uploads/$name";
 echo'
   <table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>
    
   '; 
	 
 }
		
		
		
	}
	
	else{
	
 
echo'<a class="btn btn-primary" href="verified.php?id='.$r[id].'&tab='.$tab.'">   More</a>';
	}
	


  echo'</div>
';

	
		
	}
	
	
}

?>
</div>
</div><!--tab content-->
</div><!--END OF TABS SECTION-->

</div>
</div><!-- end of news section-->



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
