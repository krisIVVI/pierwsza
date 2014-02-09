<?php 
session_start();
$answerA = $_SESSION['answerA'];
$answerB = $_SESSION['answerB'];

// require "../../scripts/database_connection.php";

echo "ODPOWIEDZI:";
echo "</br>";

echo "odpowiedź A: ".$answerA;
echo "</br>";
echo "odpowiedź B: ".$answerB;
echo "</br>";

echo "</br>";

echo $questionA;

?>

			<form action="scripts/resutls.php" method="POST">
				<br/>
				<fieldset class="center">
					<input type="submit" value="Rozpocznij test"/>
				</fieldset>
			</form>
			
<?php
?>