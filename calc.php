<?php 
include 'header.php';
include 'oopcalc.php';

 ?>




<form action="calc.php" method="post">
	Number One: <input type="number" name="num">
	Number Two: <input type="number" name="numt">
	<br><br><br>Submit: <input type="Submit" name="submit">
</form>


<?php
	
	if (!empty($_POST['numt']) && !empty($_POST['num'])) {

		$num = $_POST['num'];
		$numt = $_POST['numt'];

		
		$ob = new adds;

		$ob->add($num,$numt);
	


}
?>



















<?php include 'footer.php'; ?>