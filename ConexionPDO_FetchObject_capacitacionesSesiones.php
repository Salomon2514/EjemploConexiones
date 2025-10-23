<?php
try {
//Conexión PDO
$pdo = new PDO('mysql:host=localhost;dbname=baseprueba',
 'root', 'demo');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
 } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
 }
 //Consulta Preparada
 $smtp = $pdo->prepare("SELECT * FROM capacitaciones_participantes as cs
 LEFT JOIN datospersonales as d ON cs.idRegistro = d.id
 where idSesion = :idSesion");
 $idCurso = 13;
 $smtp->bindParam(":idSesion", $idCurso, PDO::PARAM_INT);
 //$smtp->bindValue(':id', 1, PDO::PARAM_INT);
 $smtp->execute();
 //Recorrer los resultados
    while ($row = $smtp->fetch(PDO::FETCH_OBJ)) {
        echo $row->idRegistro. ' - ' . $row->Nombre. "<br>";
    }
?>