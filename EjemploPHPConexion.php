 <?PHP 

 ////Datos db
    $usuario = "usuario";
    $password = "pass";
    $servidor = "servidor";
    $basededatos = "basedatos";

    ////Crear conexion
    $conexion = mysqli_connect($servidor, $usuario, $password)
    or die("No se ha podido conectar a la base de datos");

    ////Seleccionar db
    $db = mysqli_select_db($conexion, $basededatos)
    or die("uppppss! No se ha podido conectar a la base de datos");


   $resultado = mysqli_query($conexion, $sql);
    mysql_query($sql);
    echo  "INSERT INTO Campos_CFG(Campo, Orden, Visualizar) 
         VALUES ('Dirección','$ordendireccion','$visualizardireccion'),
                                            ('CP','$ordencp','$visualizarcp'),
                                            ('Localidad','$ordenlocalidad',
                                             '$visualizarlocalidad'),
                                            ('Provincia','$ordenprovincia','$visualizarprovincia'),
                                            ('Teléfono1','$ordentlf1','$visualizartlf1'),
                                            ('Teléfono2','$ordentlf2','$visualizartlf2'),
                                            ('Imagen','$ordenimagen','$visualizarimagen'),
                                            ('Email','$ordenemail','$visualizaremail');";
    ////Cerrar conexion 
    mysqli_close($conexion);
?>