<?php
 session_start();
include_once('./main.php');
include($main .'connectie.php');

$tekst=$_POST['myTxt'];

$query="UPDATE paginas SET inhoud='" .$tekst. "' WHERE id='1'";

mysql_query($query);
?>