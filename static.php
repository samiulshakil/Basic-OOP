<?php include 'header.php'; ?>





<?php

	class shakil{
		public static $name = "samiul shakil1";

		public static function name(){
			echo self::$name;
		}
	}

	//echo shakil::$name;
	//$ob = new shakil;
	//$ob->name();

	 shakil::name();

?>

























<?php include 'footer.php'; ?>