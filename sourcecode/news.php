<?php include("includes/config.php");
if($_SESSION["email"]=="")
{
echo'
<script> document.location.href="admin.php?fail=1";
</script>;';	
	
}
if(isset($_GET["del"]) && $_GET["del"]==1 && $_GET["id"]!="")
{
	$id=$_GET["id"];
	$sql_up="UPDATE news set check1=1 where id={$id}";
	if(mysql_query($sql_up))
	{
		
	/////////////////////////////////////////	
		
		
	   $seln="select * FROM news WHERE id=$id"; 

			
//$resx="insert into test (id ,name) values ('$var1','$var2')";
$ee=mysql_query($seln);

	    	 //$query1=msql_query("select * from news");
	    	 if (!$ee) {
				  } 
	    	    
	    	    else{
	    	    
	    	     		 $r = mysql_num_rows($ee );  //rows
	    	    	     $f = mysql_num_fields($ee); //fields
	    	    
	    	    				 
	    	    	 		$col=mysql_fetch_array($ee);
	    	     
	    	     $id=$col["id"];
	    	     $agent_id=$col["agent_id"];
	    	     $sendername=$col["sender_name"];
	    	     $face_image=$col["face_image"];
	    	     $other_attachments=$col["other_attachments"];
	    	     $sender_contact=$col["sender_contact"];
	    	     $description=$col["description"];
				 $category=$col["cat_id"];
				 $video=$col["video"];
				 $audio=$col["audio"];
				 $title=$col["title"];
				 $timendate=$col["timendate"];
	    	    		 
	    	      
	    	     
	    	    
	    	    
				
				 /*echo "</br>"."Preparing to Copy data to the Updates Table";
				 echo"</br>".$id; echo "Is being moved to id column"."</br>"; 
	    	 echo"</br>".$agent_id; echo "     :Is being moved to agent_id column"."</br>";  
	    	 echo"</br>".$sendername;  echo "	:Is being moved to Sendername column"."</br>";  
	    	 echo"</br>".$face_image;  echo "	:Is being moved to face_image column"."</br>";  
	    	 echo"</br>".$other_attachments; echo "  :Is being moved to other_attachments column"."</br>";  
	    	 echo"</br>".$sender_contact; echo "	:Is being moved to sender_contact column"."</br>";  
	    	 echo"</br><p>".$description."</p>"; echo "	  :Is being moved to Description column"."</br>"; */ 
			 
	    	    //$resx="insert into test (id ,name) values ('$var1','$var2')";
				
	    	     $insx="INSERT into updates(description,sendername,agent_id,face_image ,other_attachments,title,video,audio,category_id) values ('$description','$sendername',$agent_id,'$face_image','$other_attachments','$title','$video','$audio','$category')";
				  //$insx="INSERT into updates(id,description,sendername,agent_id,face_image,other_attachments) values ('23','fghjkjhvyvyuinnkijbubi','$james',45,'/images/thumb8.jpg','/bj/hjk' )";
				
				$res_in=mysql_query($insx); //running query to insert values into the updates table
	    	 	if (!$res_in){ echo "</br>"."News not posted please try again";}
	    	 	else{      
	    	
			$val=1;
			$updat="UPDATE news SET check1={$val} WHERE id={$criteria}";
			$res_upd=mysql_query($updat);
			if($res_upd)
			{
			echo'News Verified sucessfully';	 
			
			}
			
			else
			{
			
			}	
		
		
			}
		
			}
		
		
	/////////////////////////////	
		
	
		
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
  .form-search
{
  padding-top: 10px;
  padding-right: 20px;
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
  <li><a href="verified.php">verified news</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="contact1.php">Contact</a></li>
  <li class="divider-vertical"></li>  
  <li><a href="#">Download app</a></li>
  <li class="divider-vertical"></li>    
  <li><a href="users.php">user</a></li>  
  <li class="divider-vertical"></li> 
  </ul>
  <ul class="nav nav-pills nav-stacked">
  <li class="">
    <a href="#">
      <span class="badge pull-right">42</span>
      Notifications
    </a>
  </li>
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
 
 <div class="span12" id="unveri">
 
 <div class="well" >
  <h2 style="text-align:center;">News Alerts</h2>
  <table  class="table  table-bordered table-responsive ">
  
  <?php
  $h1="#FFFFFF";
  $h2="#FF9999";
 $sql_news="SELECT * FROM news where check1=0"; 
 $res=mysql_query($sql_news	);
 if($res)
 {
 if(mysql_num_rows($res)>=1)
 {
	 $i=0;
 echo' 
 
 
 <tr><th>Image</th><th>Title</th><th>Description</th><th>Sender Name</th><th>Sender Contact</th><th>Time Sent</th></tr>';
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
 echo'<tr class="'.$col.'" > <td ><img src="ialert/image_uploads/'.$r["face_image"].'" alt="Image" height="100" width="100" /></td><td>'.$r["title"].'</td><td>'.$r["description"].'</td><td>'.$r["sender_name"].'</td><td>'.$r["sender_contact"].'</td><td>'.$r["timendate"].'</td><td><a class="btn btn-primary"href="news.php?id='.$r[id].'">Details</td></tr>'; 
 

 if(isset($_GET["id"]) && $_GET["id"]!="" && ( $_GET["id"]==$r["id"]) && $_GET["del"]!=1 )
 {
 echo'<tr style=" background-color:FFFFFF" > <td >Sender Location</td>';	 
 echo'<tr class="'.$col.'" > <td >Latitude</td><td >'.$r["lat"].'</td>';	
 echo'<tr class="'.$col.'" ><td >Longitude</td> <td >'.$r["long1"].'</td></tr></table>';	
 
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
 
 echo'<table class="table  table-bordered ><tr class="'.$col.'"><td>Select Status</td><td><select class="selectpicker">
 <optgroup label="Status">
      <option value="1"> Verify</option>
      <option value="2">Delete</option>
      <option value="3">Archive</option>
    </optgroup>
</select></td><td>
<a href="news.php?id='.$r[id].'&del=1" class="btn btn-inverse">confirm</a></td><tr>';
	 
 }
  }
  echo'
  
  </table>';
 }
 }
  
  ?>
  </table>
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
