<?php include 'header.php'; ?>





<?php

	abstract class info{
		public $name = "shakil";

		function details (){
			echo $this->name;
		}
		//abstract function start
		abstract public function shakil();

	}

	class info2 extends info{
		function name (){
			echo $this->details();
		}
		//abstract function override from here
		function shakil(){
			echo "my name is shakil";
		}
	}

	$ob = new info2;

	$ob->name();
	$ob->shakil();

?>

























<?php include 'footer.php'; ?>