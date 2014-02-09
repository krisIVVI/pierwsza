<?php 
session_start();

// require "../../scripts/database_connection.php";

$questionA = "Oceń swoje zdolności malarskie w skali od 1 - 5";

echo $questionA;

$answerA = 2;
$_SESSION['answerA']=$answerA;

echo "</br>";

echo "odpowiedź A: ".$answerA;



?>

			<form action="question2.php" method="POST">
				<br/>
				<fieldset class="center">
					<input type="submit" value="Rozpocznij test"/>
				</fieldset>
			</form>
			
<?php
?>