<?php
$target_path1 = "gps/";

/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$iname1=date("His")."_".rand();
$target_path1 = $target_path1.$iname1 . basename( $_FILES['uploadedfile1']['name']);
$file=$iname1.basename( $_FILES['uploadedfile1']['name']);
if(move_uploaded_file($_FILES['uploadedfile1']['tmp_name'], $target_path1)) {
    echo "The first file ".  basename( $_FILES['uploadedfile1']['name']).
    " has been uploaded.";
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploadedfile1']['name']);
    echo "target_path: " .$target_path1;
}
 
 

 
$id = $_REQUEST['id'];
$job= $_REQUEST['job'];
$longt = $_REQUEST['longt'];
$lat = $_REQUEST['lat'];

echo "n String Parameter send from client side : " . $longt;


$con = mysql_connect("localhost", "root", ""); //this is the real username and password

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("ialert_db", $con);
  
   $result1 = mysql_query("select * from location where userid={$id}");
   
   $rows=mysql_num_rows($result1);
   if($rows>=1)
   {

    $result2 = mysql_query("UPDATE location set
	                         latitude={$lat},
							 longitude={$longt}
							 where userid={$id}");
						
	echo"wahooooo";						 
		
 
	
	 if ($result2) {
	 }
 
   }
   else
   {
  
    $result11 = mysql_query("select * from users where id={$id}");
   
   $rows1=mysql_num_rows($result11);
   $r=mysql_fetch_array($result11);
   if($rows1>=1)
   
   {
  
  $j=$r["job"];
  
  
 echo "n jojojobbbbbe : " .$j; 
  
  
  if($j==3)
  {
  
  
  $result = mysql_query("INSERT INTO location (userid,latitude,longitude) VALUES($id , $lat, $longt)");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "loc inserted.";
		
		
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred in update.";
		//$result3 = mysql_query("DELETE FROM imagetemp") or die(mysql_error());
 
        // echoing JSON response
        echo json_encode($response);
    }
	}
	}
}

?>