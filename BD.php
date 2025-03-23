<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","AURY_PROJECT");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$connection){
    die("Connetion failed");
}
?>