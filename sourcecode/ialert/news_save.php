<?php
$target_path1 = "image_uploads/";

/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$iname1=date("His")."_".rand();
$path=$iname1 . '.png';
$target_path1 = $target_path1.$path;
$file=$iname1.basename( $_FILES['uploadedfile1']['name']);
if(move_uploaded_file($_FILES['uploadedfile1']['tmp_name'], $target_path1)) {
    echo "The first file ".  basename( $_FILES['uploadedfile1']['name']).
    " has been uploaded.";
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploadedfile1']['name']);
    echo "target_path: " .$target_path1;
}
 
 

 
$date_time = $_REQUEST['date_time'];
$sender = $_REQUEST['sender'];
echo "n String Parameter send from client side : " . $date_time;
echo "n String Parameter longt from client side : " . $longt;

$con = mysql_connect("localhost", "root", ""); //this is the real username and password

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("ialert_db", $con);
  
  
   $title =$_REQUEST['title'];
    $contact = $_REQUEST['contact'];
    $description = $_REQUEST['description'];
	$sender = $_REQUEST['sender'];
	$lat = $_REQUEST['lat'];
	$longt = $_REQUEST['longt'];
	echo "n String Parameter longt from client side : " . $longt;
	 
	   $imagename = $_REQUEST['imagename'];
	    $date1 = $_REQUEST['date1'];
		$categoryid = $_REQUEST['categoryid'];
  

$others="not available";

///////////////


		$position = 0;
		
		//dummy coordinates for the sender/source
		$latitude=$lat;
		$longitude=$longt;
		
		//querying the selected table from the database
		$result5 = mysql_query("select * from location");
	 if(!$result5){
		die("Database connection failed" . mysql_error());
		}	
		
		else
		{
		//constructing the journalists table
		
			while($row5 = mysql_fetch_array($result5)){
			
			
			$journs_ids[] = $row5["id"];
			
			$journs_names[] = $row5["name"];
			
			$journs_latitudes[] = $row5["latitude"];
			
			$journs_longitudes[] = $row5["longitude"];
			
			}
		
		
		//calculating the distance between the source and the various journalists
			for($j=0; $j<sizeof($journs_ids); $j++){
				$jlat = $latitude - $journs_latitudes[$j];
				
			
				$jlongt = $longitude - $journs_longitudes[$j];
				
				$fd[$j] =  sqrt(pow($jlat,2) + pow($jlongt,2));
			}
			
	//displaying the distance between the source and the various journalists
		
		
	//calculating as well as displaying the nearest journalist to the source
		 for($i=0; $i < sizeof($journs_ids); $i++)
			{
				if($fd[$i]== min($fd))
				{
					$position = $i;
					//echo $i;
					
					
				}
			}	
			
			$id=$journs_ids[$position];
			
				
				
				

                              
				
				
				
				
			
				
				
				 $result8= mysql_query("SELECT * FROM location  WHERE id={$id} ");

if (mysql_num_rows($result8) > 0) {
$myrow=mysql_fetch_array($result8);

$agent=$myrow["userid"];
	echo "the nearest user id is : " . $agent;
	}
	  }
	
//////////

 $result1 = mysql_query("SELECT * FROM image_temp WHERE datentime='{$date_time}' and  user='{$sender}' ");
$moreimage="";
if (mysql_num_rows($result1) > 0) {
    // looping through all results
    // products node
  
 
    while ($row = mysql_fetch_array($result1)) {
        // temp user array
		
      
				//$inames = $inames . ",".$row["iname"];
				$moreimage =$row["filename"].",".$moreimage;
				
       
    }
	}
	
	
	////////////
	
	$result2 = mysql_query("SELECT * FROM audio_temp WHERE datentime='{$date_time}' and  user='{$sender}' ");
$moreaudio="";
if (mysql_num_rows($result2) > 0) {
    // looping through all results
    // products node
  
 
    while ($row2 = mysql_fetch_array($result2)) {
        // temp user array
		
      
				//$inames = $inames . ",".$row["iname"];
	$moreaudio =$row2["filename"];
				
       
    }
	}


$result3 = mysql_query("SELECT * FROM video_temp WHERE datentime='{$date_time}' and  user='{$sender}' ");
$morevideo="";
if (mysql_num_rows($result3) > 0) {
    // looping through all results
    // products node
  
 
    while ($row3 = mysql_fetch_array($result3)) {
        // temp user array
		
      
				//$inames = $inames . ",".$row["iname"];
	$morevideo =$row3["filename"];
				
       
    }
	}
//$lat=2;
//$longt=5;

  
$ck=0; 

 
  /*
 $result = mysql_query("INSERT INTO news (lat,long1,agent_id, sender_name, timendate, face_image, other_attachments, sender_contact,description,cat_id,audio,video,title,check1) VALUES($lat, $longt, $agent, '$sender','$date1','$path','$moreimage','$contact','$description', $categoryid ,'$moreaudio','$morevideo','$title',$ck)");
 
  */
  $result = mysql_query("INSERT INTO news (lat,long1,agent_id, sender_name, timendate, face_image, other_attachments, sender_contact,description,cat_id,audio,video,title,check1) VALUES($lat, $longt, $agent, '$sender','$date1','$path','$moreimage','$contact','$description', $categoryid ,'$moreaudio','$morevideo','$title',$ck)");
 
  
  
 
    // check if row inserted or not
    if ($result) {
	
	
	
$result7 = mysql_query("SELECT * FROM news WHERE timendate='{$date1}' and  sender_name='{$sender}' and lat={$lat} ");

if (mysql_num_rows($result7) > 0) {	
	$row7 = mysql_fetch_array($result7);
	$theid=$row7["id"];
$result8 = mysql_query("INSERT INTO notification_temp (news_id,sender,agent_id) values ($theid,'$sender',$agent )");

if (mysql_num_rows($result8) > 0) {	
		
	
	}
	
	
	
	}
	
	
	
	
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "updates saved.";
		
		
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurredDDDDDDD.";
		//$result3 = mysql_query("DELETE FROM imagetemp") or die(mysql_error());
 
        // echoing JSON response
        echo json_encode($response);
    }


?>