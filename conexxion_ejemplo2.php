<?PHP
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', 'demo', 'eventos');

/*$query = 'SELECT Name, District FROM datospersonales WHERE CountryCode=? ORDER BY Name LIMIT 5';*/

$query = 'SELECT Cedula, Nombre, Apellido, FechaNacimiento FROM datospersonales';
$result = $mysqli->execute_query($query);
foreach ($result as $row) {
    printf("%s (%s)\n", $row["Nombre"], $row["Apellido"]);
    echo "<br>";
}


?>