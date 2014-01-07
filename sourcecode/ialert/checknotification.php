<?php
 
/*
 * select a row in kcca database
 * All login details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_GET['myid'])) {
 
    $myid = $_GET['myid'];
    
   
 
    // include db connect class
    //require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    //$db = new DB_CONNECT();
 $con = mysql_connect("localhost", "root", "");   //this is the real username and password

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("ialert_db", $con);

   
	//$result = mysql_query("SELECT * FROM user WHERE emailAddress=$username AND password=$password");
$result = mysql_query("select * from notification_temp where agent_id={$myid}") or die(mysql_error());
 // 
    // check if the query returns a row
    if (mysql_num_rows($result) > 0) {
		$response["station"] = array();
		
 while ($row = mysql_fetch_array($result)) {
		
        // temp user array
        $station = array();
		
        $station["name"] = $row["sender"];
		$station["nid"] = $row["news_id"];
		
		$uid=$row["id"];
		
        // push single product into final response array
        array_push($response["station"], $station);
    }
		$result2 = mysql_query("delete from notification_temp where agent_id={$myid} and id={$uid}") or die(mysql_error());
        if($result2)
		{
		
		}
        // successfully logged in
        $response["success"] = 1;
        $response["message"] = "message notification success received";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to fetchmessagges
        $response["success"] = 0;
        $response["message"] = "Oops!notification check An error occurred.";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>