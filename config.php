<?php

$servername = "localhost";
$username = "root";
$password = NULL;
$db = "test";

//definisanje indeksa red, kolona, rezultat
if (isset($_POST['red']) && isset($_POST['red'])&& isset($_POST['red']))
{
	$red = $_POST['red'];
	$kolona = $_POST['kol'];
	$rezultat = $_POST['p'];
	echo $red, $kolona, $rezultat;
}
else{
  $red = null;
  $kolona = null;
  $rezultat = null;
}
//konekcija na SQL bazu
$conn = new mysqli($servername, $username, $password, $db);

//Provjera da li konekcija postoji
if ($conn->connect_error) {
	//f-ja "die()" prikazuje poruku i prekida izvrsavanje skripte programa 
    die("Connection failed: " . $conn->connect_error);
	} else {
		
		//SQL upit za upis podataka u bazu
		$upit = "INSERT INTO multiplicationtable (factor1, factor2, operation, result, operation_date)
		VALUES ($red, $kolona, '*', $rezultat, NOW())";
		
		//naredba koja izvrsava upit
		$query = mysqli_query($conn, $upit);
		
		//zatvaranje konekcije
		mysqli_close($conn);
		
		}
		
?>
