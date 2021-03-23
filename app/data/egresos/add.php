<?php 
    include '../conection.php';

    $ID_INGRESO = $_POST['ID_INGRESO'];
    $PLACA = $_POST['PLACA'];
    $NOMBRE = $_POST['NOMBRE'];
    $TELEFONO = $_POST['TELEFONO'];
    $FECHA_INGRESO = $_POST['FECHA_INGRESO'];
    $HORA_INGRESO = $_POST['HORA_INGRESO'];
    $FECHA_EGRESO = $_POST['FECHA_EGRESO'];
    $HORA_EGRESO = $_POST['HORA_EGRESO'];

    $TOTAL = 15.0;
    
    $delete = "DELETE FROM ingresos WHERE ID = '$ID_INGRESO';";
    if(mysqli_query($conection,$delete)){
        $sql = "INSERT INTO egresos(PLACA,NOMBRE,TELEFONO,FECHA_EGRESO,HORA_EGRESO,TOTAL) VALUES ('$PLACA','$NOMBRE','$TELEFONO','$FECHA_EGRESO','$HORA_EGRESO','$TOTAL');";
        if(mysqli_query($conection,$sql)){
            echo "todo bien, todo correcto";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conection);
        }   
    }
    mysqli_close($conection);
?>