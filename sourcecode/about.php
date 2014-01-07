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
   background-attachment: fixed;
	}
}
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

<div class="row-fluid">
<div class="hero-unit" style="background-color:#444444;color:white;">
<h1 align="center">iAlert Mobile App</h1>
<hr/>
<p>iAlert is an invitation for you to be a part of NTV's coverage of the stories you care about and an opportunity to be a part
 of a global community of men and women who are as passionate about the news as you are. 
 At NTV we believe that looking at the news from different angles gives us a deeper understanding of what's going on.
  We also know that the world is an amazing place filled with interesting people doing fascinating things that don't always make the news.
That's why iAlert is full of tools to help you tell your stories and discuss the issues that are important to you. Since everyone's interests are different, we've also built new tools to help you customize your
 iAlert experience – if you're into politics, travel and sports, you'll see different stories than fans of tech, health and food stories. We've also created groups so you can hang out and even collaborate with iReporters with similar interests.
Everything you see on iAlert starts with someone in the NTV audience. The stories here are not edited fact-checked or screened before they post. 
NTV's producers will check out some of the most compelling, important and urgent iAlert and, 
once they're cleared for NTV, make them a part of NTV's news coverage. (Look for the red "NTV iAlertt" stamp to see which stories have been vetted for NTV.) More on how iReport works »
Together, NTv and iAlert can paint a more complete picture of the news. We'd love for you to join us. Jump on in,
 tell your story and see how it connects with someone on the other side of the world. Here are some resources to get started:</p>
</div>
<div class="hero-unit" style="background-color:#444444;color:white;">
<h2 align="center">Our Team</h2>
<hr/>
 <div class="row-fluid">
            <div class="span4">
              <h2>Obia William</h2>
              <img  src="img/william.jpg" >
             <p><strong>Web  and mobile apps developer</strong></p>
    <a target="_blank"  href="https://www.facebook.com/williamz.miller1"class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a  target="_blank" href="https://plus.google.com/u/0/101566608241599284142/posts" class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
            <div class="span4">
              <h2>Ejumu Emmanuel</h2>
              <img  src="img/emma.jpg">

             <p><strong>Secretary and mobile developer</strong></p>
    <a target="_blank" href="https://www.facebook.com/ejumu.emmanuel" class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a target="_blank"href="https://twitter.com/EjumuEmmanuel" class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a target="_blank" href="https://plus.google.com/u/0/111269215608481097620/posts" class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
            <div class="span4">
              <h2>Kimera Gidion</h2>
              <img  src="img/doc.jpg" >

             <p><strong>Job title</strong>small description</p>
    <a target="_blank"class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a target="_blank"class="btn  btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a target="_blank"class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
          </div><!--/row-->

          
          <div class="row-fluid">
            <div class="span4">
              <h2>Mulondo Ali Waiswa</h2>
              <img  src="img/doc.jpg" >

             <p><strong>Job title</strong>small description</p>
    <a target="_blank"class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a target="_blank"class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a target="_blank" class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
            <div class="span4">
              <h2>Kato Damian</h2>
              <img  src="img/doc.jpg" >

             <p><strong>Mobile developer</strong></p>
    <a target="_blank"class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a target="_blank" class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a target="_blank" class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
        <div class="span4">
        <h2>kiyingi Ivan</h2>
        <img  src="img/ivan.jpg" >
             <p><strong>Project Manager and mobile apps developer</strong></p>
    <a target="_blank" href="https://www.facebook.com/kiyingi.ivan.332" class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a target="_blank" class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a target="_blank" href="https://plus.google.com/u/0/" class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
            </div><!--/span-->
          </div><!--/row-->
</div>
</div>
</div>
<div id="push"></div>

</div><!--main-container-->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id="footer">
    <div class="container">
     <p>© Copyright 2013  All Rights Reserved | privacy rights</p>
<a class="btn  btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
      </div>
    </div>
</body>

</html>
