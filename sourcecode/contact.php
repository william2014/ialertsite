<?php include("includes/config.php");?>
<?php
if(isset($_POST['submit']))
{
  $to ="weatechgroup@gmail.com";
  $from =$_POST['email'];
  $name=$_POST['fullname'];
  $subject ="Form submission";
  $Subject2 ="Copy of yout email";
  $message =$name.""."wrote the following:"."\n\n".$_POST['msg'];

   $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['msg'];

   $headers ="From:".$name;
   $headers2 ="To:".$to;

   mail($to,$Subject,$message,$headers);
   mail($from,$subject2,$message2,$headers2);
   echo 'message sent'.$name .",we appreciate your effort:";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="social-likes.css">
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
	#main-content
	{

		padding-top: 70px;
	}
	#about
	{
		padding-top: 40px;
	}
	/*#slider{
		height: 950px;
	}*/
#home
{
	padding-top: 50px;
}
/*#main-content
{
	padding-top: 70px;
}*/
.nav {
        margin-top: 28px; /* this is a faux center fix for the nav options - adjust this if you wish to change the logo height or the font of the menu items */
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
  <li><a href="index.php">Home</a></li>
  <li class="divider-vertical"></li>
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
  <li><a href="#">Download app</a></li>
  <li class="divider-vertical"></li>  
  </ul>
  </div>
  </div>
  </nav>
  </div>
</header>
<div class="row" id="main-content">
<div class="span12" id="contact">
<div class="well">
<div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Find <strong>wea group</strong></h2>
            <hr>
          </div>
          <div class="col-md-8">
            <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=0.5470573,34.0201552&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
          </div>
          <div class="col-md-4">
            <p>Phone: <strong>+256787261312,+256703744226</strong></p>
            <p>Email: <strong>weatechgroup@gmail.com</strong></p>
           <!--  <p>Address: <strong>The Plaza<br>5483 Start Bootstrap Ave.<br>Beverley Hills, CA 26829</strong></p> -->
          </div>
          <div class="clearfix"></div>

          <form align="center" method="post" action="">
            <legend>Leave a comment:</legend>
            <input type="text"  name ="fullname"placeholder="Full name">
            <input type ="email" name="email" placeholder="E-mail address">
            <br/>
            <label align="center">message</label>
            <textarea name="msg"></textarea>
            <br/>
            <input type="submit" name="submit" value="send message">
           <!--  <input type="reset" value="clear"> -->
          </form>
</div>
</div><!-- end contact section-->
<!-- <div class="span12" id="contact">
<div class="well">
<div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Contact Form</h2>
            <hr>
          </div>
          <div class="col-md-8">
            <form class="well ">
  <div class="row">
    <div class="span3">
      <label>First Name</label>
      <input type="text" class="span3" placeholder="Your First Name">
      <label>Last Name</label>
      <input type="text" class="span3" placeholder="Your Last Name">
      <label>Email Address</label>
      <input type="email" class="span3" placeholder="Your email address">
      <label>Subject
      <select id="subject" name="subject" class="span3">
        <option value="na" selected="">Choose One:</option>
        <option value="service">General Customer Service</option>
        <option value="suggestions">Suggestions</option>
        <option value="product">Product Support</option>
      </select>
      </label>
    </div>
    <div class="span5">
      <label>Message</label>
      <textarea name="message" id="message" class="input-xlarge span5" rows="5" cols="5"></textarea>
    </div>
  </div>
</form>
<a href="#" class="btn btn-primary pull-right">Send Message</a>
          </div>
          <div class="clearfix"></div>
</div>

</div> --><!-- end contact section-->

</div><!-- end main contant-->
<div id="push"></div>

</div><!--main-container-->


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id="footer">
    <div class="container">
     <p>© Copyright 2013 <a href="#">iAlert.com</a> All Rights Reserved | powered by 
      </p>
<a class="btn btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
      </div>
    </div>
</body>

</html>
