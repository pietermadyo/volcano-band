<?php
ini_set("display_errors","off");

$con = mysql_connect("localhost","root","");
$con2 = mysql_select_db("volcano");

if(! $con )
{
  die('Could not connect server: ' . mysql_error());
}
if(! $con2 )
{
  die('Could not connect db: ' . mysql_error());
}
?>