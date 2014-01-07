<?php include("includes/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="social-likes.css">

 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
 
<title></title>
<style type="text/css">
	
	textarea{
		width: 450px;
		height: 250px;
		max-width: 450px;
		max-height: 250px;
	}
  .form-search
{
  padding-top: 10px;
  padding-right: 20px;
}
	#main-content
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
    background-attachment: fixed;
			padding:0 !important;
			margin:0;*/
			margin-top: 125px;
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
.nav.body{
  width: 100%;
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

.hide{
	display: none !important;
}
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
      .data{
        display: none;
      }
      .center h1 {display: block; }

.center img {margin: 0 10px; vertical-align: middle;}
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
</script>
<!--lest commence searching-->
<script type="text/javascript">
$(document).ready(function(){

var term =$(this).val();

$.post('search.php',{term :term},function(data){

	$('#search_results').html(data);
});
});

</script>
</head>
<body>

<div class="container">
<header class="row">
	<div class="span12">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-inner">
		<a  href="#"class="brand"><img src="img/logo.png"></a>
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse">
		<ul class="nav">
			<li class="divider-vertical"></li>
			<li><a href="index.php">Home</a></li>
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<b class="caret"></b></a>
    <ul class="dropdown-menu">
     <li><a href="client.php">Politics</a></li>
     <li class="divider"></li> 
     <li><a href="business.php">Business</a></li>
      <li class="divider"></li>  
     <li><a href="local.php">Local news</a></li> 
      <li class="divider"></li> 
     <li><a href="international.php">Internation news</a></li> 
      <li class="divider"></li> 
     <li><a href="education.php">Education</a></li> 
      <li class="divider"></li> 
     <li><a href="health.php">Health</a></li>
      <li class="divider"></li>  
     <li><a href="entertainment.php">Entertainment</a></li> 
      <li class="divider"></li> 
     <li><a href="sports.php">Sports</a></li>
    </ul>
  </li>
			<li class="divider-vertical"></li>
			<li><a href="about.php">About</a></li>
			<li class="divider-vertical"></li>
			<li><a href="contact.php">Contact</a></li>
			<li class="divider-vertical"></li>
			<li><a href="#">Download</a></li>
			
			<li class="divider-vertical"></li>
			<li><a href="#">Help</a></li>
			<li class="divider-vertical"></li>
		</ul>
		<form method="GET" action="search.php"  class="form-search pull-right"  id ="search">
			<input type="text" class="search-query" name="term" placeholder="enter search">
		</form>
		<div id="search_results"></div>
		</div>
		</div>
		</nav>

	</div>
</header>
<div class="row" id="main-content" >

<div class="span12" >
<div class="well">

<h5 align="center"><strong> Political News</strong></h5>
<hr/>

<?Php
$sql_pol_updates="SELECT * FROM updates where category_id=2 order by id desc";
$res =mysql_query($sql_pol_updates);
if($res)
{

while($r=mysql_fetch_array($res))
{
echo '
	<ul class="media-list">
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="ialert/image_uploads/'.$r["face_image"].'" alt="IMAGE" height="100" width="250">
    </a>
    <div class="media-body">
      <h4 class="media-heading">'.$r["title"].'</h4>
      <p>'.$r["description"].'</p>
    </div>
    
  </li>
</ul> 
<a href="#" id="clickme" class="btn btn-primary">show more details</a>
<hr/>
';
}
}
?>
</div>
</div>
</div><!--end of main content-->

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
