<?php include 'header.php'; ?>





<?php
 interface shakil{
 	function name();
 }
  interface age{
 	function age();
 }

 class samiul implements shakil , age{
 	function name(){
 		echo "samiul siddique shakil";
 	}
 	function age(){
 		echo 20;
 	}
 }
$ob = new samiul;
$ob->name();
$ob->age();
?>

























<?php include 'footer.php'; ?>