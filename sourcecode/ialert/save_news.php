<?php
 
/*
 * Following code will create a new row in noise database
 * All noiset details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();



 
// check for required fields
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['imagename']) && isset($_POST['lat']) && isset($_POST['longt']) && isset($_POST['sender']) && isset($_POST['contact']) && isset($_POST['categoryid'])) {
 
    $title = $_POST['title'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];
	$sender = $_POST['sender'];
	$lat = $_POST['lat'];
	$longt = $_POST['longt'];
	
	  $imagedata = $_POST['image'];
	   $imagename = $_POST['imagename'];
	    $date1 = $_POST['date1'];
		$categoryid = $_POST['categoryid'];
	
	//include_once("functionsDerrick.php");
	
	$pin="";
	$str = "0123456789";
	for($i=0;$i<5;$i++){
	   $pin .=$str[rand(0,strlen($str)-1)];
	}
	 
	 $thefile = base64_decode($imagedata);  
$img = imagecreatefromstring($thefile);  
if($img !== false)  
{
	
	$iname1=date("His")."_".rand();
	$face=$iname1.$imagename;
	//$target="uploads2/$face";
$target="image_uploads/$face";
    header('Content-Type: image/jpg'); 
	imagesavealpha($img, true); 
    imagepng($img,$target);  
    imagedestroy($img);   
}
    // include db connect class
    //require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    //$db = new DB_CONNECT();
// $con = mysql_connect("localhost", "gongauser", "gongaafrica"); 
$con = mysql_connect("localhost", "root", ""); //this is the real username and password

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("ialert_db", $con);
 /*   $result = mysql_query("INSERT INTO try(fname,lname)VALUES('$fname','$lname')");*/
  // mysql inserting a new row

 
$agent=2;
$others="not available";

//$lat=2;
//$longt=5;
$date1=date('d/m/Y');
//$date1="date";
$result = mysql_query("INSERT INTO news (lat,long1,agent_id, sender_name, timendate, face_image, other_attachments, sender_contact,description,cat_id) VALUES($lat, $longt, $agent, '$sender','$date1','$face','$others','$contact','$description', $categoryid)");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "updates saved.";
		
		
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
		//$result3 = mysql_query("DELETE FROM imagetemp") or die(mysql_error());
 
        // echoing JSON response
        echo json_encode($response);
    }


} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "  Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>