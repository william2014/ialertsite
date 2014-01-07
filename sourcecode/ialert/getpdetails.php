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
$result = mysql_query("select * from p_updates where day_id={$myid}") or die(mysql_error());
 // 
    // check if the query returns a row
    if (mysql_num_rows($result) > 0) {
		$response["station"] = array();
		
 while ($row = mysql_fetch_array($result)) {
		
        // temp user array
        $station = array();
		
        $station["program"] = $row["program"];
		$station["time"] = $row["time"];
		
		
		
        // push single product into final response array
        array_push($response["station"], $station);
    }
		
        // successfully logged in
        $response["success"] = 1;
        $response["message"] = "message received";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to fetchmessagges
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
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