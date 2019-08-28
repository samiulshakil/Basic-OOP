<?php include 'header.php'; ?>


<form action="calculator.php" method="post">
	Number One: <input type="number" name="num" value="<?php echo $_POST['num']; ?>">
	Number Two: <input type="number" name="numt" value="<?php echo $_POST['numt']; ?>">
	<br><br><br>Submit: <input type="Submit" name="submit"><br><br>
</form>


<?php
	
	if (!empty($_POST['numt']) && !empty($_POST['num'])) {

		$num = $_POST['num'];
		$numt = $_POST['numt'];

		//oop start from here.....

		class adds{
			function add($a,$b){
			echo $a*$b;
		}
	}

		$ob = new adds;

		$ob->add($num,$numt);
	


}
?>



















<?php include 'footer.php'; ?>