<link href="../css/bootstrap.css" rel="stylesheet">

<?php

$database_lokatie     = 'localhost';
$database_naam        = 'rijschooleasydrive';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO leden (`id`,`voornaam`, `achternaam`, `email`, `telefoon`, `leeftijd`, `opmerkingen`, `wachtwoord`) VALUES ('$_GET[id]','$_GET[voornaam]','$_GET[achternaam]','$_GET[email]','$_GET[tel]','$_GET[leeftijd]','$_GET[opmerkingen]','$_GET[ww]' )  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<h1>Bedankt voor je aanmelding!</h1>
<a href="..\index.php" class="btn btn-light">Terug naar overzicht</a>