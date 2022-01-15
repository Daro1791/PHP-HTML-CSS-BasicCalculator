<style>
	
.result{
	color: #6c2eb9;
	position: center;
    text-align: center;
	font-weight: 10;
	font-size: 50px;
	font-family: 'Neonderthaw', cursive;
	background: #000;
}

</style>

<?php

	if (isset($_POST["button"])) {

		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$ope = $_POST["operation"];

		calc($ope);
		
	}	

	function calc($ope){
		if(!strcmp($ope, "Addition")){

			global $num1;
			global $num2;

			$Tot = $num1 + $num2 ;

			echo "<body class='result'>The result is $Tot</body>";
		}elseif(!strcmp($ope, "Subtraction")){

			global $num1;
			global $num2;

			$Tot = $num1 - $num2 ;

			echo "<body class='result'>The result is $Tot</body>";
		}elseif(!strcmp($ope, "Multiplication")){

			global $num1;
			global $num2;

			$Tot = $num1 * $num2 ;

			echo "<body class='result'>The result is $Tot</body>";
		}elseif(!strcmp($ope, "Division")){

			global $num1;
			global $num2;

			$Tot = $num1 / $num2 ;

			echo "<body class='result'>The result is $Tot</body>";
		}
	}

?>