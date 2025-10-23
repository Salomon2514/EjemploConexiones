<?PHP

//Estilo orientado a objetos
//$mysqli = new mysqli("localhost", "my_user", "my_password", "world");
$mysqli = new mysqli('localhost', 'root', 'demo', 'baseprueba');


/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

/* Crear una tabla que no devuelve un conjunto de resultados
if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Se creó con éxtio la tabla myCity.\n");
}//fin del if  
*/




/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = $mysqli->query("SELECT  Nombre, FechaNacimiento FROM datospersonales")) {
    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
    $resultado->close();
}


$mysqli->close();
?>

