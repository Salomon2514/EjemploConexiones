<?php
//Estilo orientado a objetos
//$mysqli = new mysqli("localhost", "my_user", "my_password", "world");
$mysqli = new mysqli('localhost', 'root', 'demo', 'baseprueba');

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

//Consulta Preparada
$smtp = $mysqli->prepare("SELECT Nombre, FechaNacimiento FROM datospersonales where id = ?");
$idCurso = 1;
$smtp->bind_param("i", $idCurso);
$smtp->execute();

//Obtener resultados
$result = $smtp->get_result();
while ($row = $result->fetch_object()) {
    echo $row->Nombre . ' - ' . $row->FechaNacimiento. "\n";
}
$mysqli->close();

?>