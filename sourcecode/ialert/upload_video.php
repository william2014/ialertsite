<?php
$target_path1 = "video_uploads/";

/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$iname1=date("His")."_".rand();
$nm=basename( $_FILES['uploadedfile1']['name']);

$new_string=str_replace(" ","_",$nm);


$target_path1 = $target_path1.$iname1.$new_string;
$file=$iname1.$new_string;
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
echo "n String Parameter send from client side : " . $sender;

$con = mysql_connect("localhost", "root", ""); //this is the real username and password

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("ialert_db", $con);
  $result = mysql_query("INSERT INTO video_temp (user,filename,datentime) VALUES('$sender' , '$file', '$date_time')");
 
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


?>