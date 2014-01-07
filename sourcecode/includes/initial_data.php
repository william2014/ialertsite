<?php
 $response = array();

$con = mysql_connect("localhost", "root", ""); //this is the real username and password
 mysql_select_db("ialert_db", $con);
if (!$con)
  {
      die('Could not connect: ' . mysql_error());
	  
	   // no products found
    $response["success"] = 0;
    $response["message"] = "dataase failled";
 
    // echo no users JSON
    echo json_encode($response);
  }
  else{
	  
 
 
// get all products from products table

$result = mysql_query("SELECT * FROM category") or die(mysql_error());
/*$result = mysql_query("SELECT s.categoryId,s.subcategory,c.id as currencyId,c.currencyName,l.id as listingId,l.name as listingName FROM currency c,subcategory s,listingstatus l") or die(mysql_error());
 $station = array();
        $station["categoryId"] = $row["categoryId"];
		$station["subcategory"] = $row["subcategory"];
		$station["currencyId"] = $row["currencyId"];
		$station["currencyName"] = $row["currencyName"];
		
 */
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["stations"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $station = array();
        $station["categoryId"] = $row["id"];
		$station["subcategory"] = $row["name"];
		
		
        ;
        
 
        // push single product into final response array
        array_push($response["stations"], $station);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No information found";
 
    // echo no users JSON
    echo json_encode($response);
}
  }
?>