<?php include 'header.php'; ?>





<?php
class parents{
	public $name = "shakil";
	public $age = 20;
	public $year;

	function name(){
		echo $this->name;
	}

	function __construct($year){
		echo $this->year = $year;
	}

}

// $ob1 = new parents;
// $ob1->name();

class childs extends parents{
	function age(){
		echo $this->age;
	}

	function __construct($address){
		echo $address;
		parent::__construct(123);
	}

}

$ob2 = new childs("Dhaka,Bangladesh");
$ob2->year;

//$ob2->age();

?>

























<?php include 'footer.php'; ?>