<?php include 'header.php'; ?>





<?php

	class info{
		Public $name = "samiul";
	
		public final function shakil(){
			echo $this->name;
		}
	}

class childs extends info{
	function shakil(){
		echo $this->name = "samiul shakil ";
	}
}

$ob = new childs;
$ob->shakil();

?>

























<?php include 'footer.php'; ?>