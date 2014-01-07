<?php session_start();?>

<?php

  // $con = mysql_connect("localhost", "alimul_ialert", "ialert2014");
    //this is the real username and password
$con=mysql_connect("localhost","root","");

if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }
 // mysql_select_db("alimul_ialert", $con);
  mysql_select_db("ialert_db",$con);

?>