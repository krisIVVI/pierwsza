<?php 
session_start();

// require "../../scripts/database_connection.php";

$questionB = "Oceń swoje zdolności muzyczne w skali od 1 - 5";

echo $questionB;

$answerB = 3;
$_SESSION['answerB']=$answerB;

echo "</br>";

echo "odpowiedź B: ".$answerB;

?>
			<form action="results.php" method="POST">
				<br/>
				<fieldset class="center">
					<input type="submit" value="Rozpocznij test"/>
				</fieldset>
			</form>
			
<?php
?>