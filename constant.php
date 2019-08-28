<?php include 'header.php'; ?>





<?php
class shakil{
	 const samiul = "samiul siddique shakil";

	 public function con(){
	 	echo self::samiul;
	 }
} 

//echo shakil::samiul;

 $ob = new shakil;

 $ob->con();




?>

























<?php include 'footer.php'; ?>