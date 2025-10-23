<?php
try {
//Conexión PDO
$pdo = new PDO('mysql:host=localhost;dbname=baseprueba',
 'Nipe7', 'mySecreto27');

 /*$pdo = new PDO('mysql:host=localhost;dbname=baseprueba',
 'root', 'demo');*/
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
 } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
 }
 //Consulta Preparada
 $smtp = $pdo->prepare("SELECT Nombre, FechaNacimiento FROM datospersonales 
 where id = :id");
 $idCurso = 2;
 //$smtp->bindParam(":id", $idCurso, PDO::PARAM_INT);
 $smtp->bindValue(':id', 2, PDO::PARAM_INT);
 $smtp->execute();
 //Recorrer los resultados
    while ($row = $smtp->fetch(PDO::FETCH_OBJ)) {
        echo $row->Nombre. ' - ' . $row->FechaNacimiento. "\n";
    }
?>