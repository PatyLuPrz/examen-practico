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

    $fecha1 = new DateTime($FECHA_INGRESO . " " . $HORA_INGRESO);//fecha inicial
    $fecha2 = new DateTime($FECHA_EGRESO . " " . $HORA_EGRESO);//fecha de cierre

    $intervalo = $fecha1->diff($fecha2);

    echo "Fecha incial: " . $fecha1->format('Y-m-d H:i:s') . "<br>";
    echo "Fecha final: " . $fecha2->format('Y-m-d H:i:s') . "<br>";

    echo $intervalo->format('%Y años %m meses %d days %H horas %i minutos %s segundos');
    echo "<br>";

    
    $intervalo_años = $intervalo->y;
    $intervalo_meses = $intervalo->m;
    $intervalo_dias = $intervalo->d;
    $intervalo_horas = $intervalo->h;
    $intervalo_minutos = $intervalo->i;
    $intervalo_segundos = $intervalo->s;

    $ingreso_año = $fecha1->format('Y');
    $ingreso_mes = $fecha1->format('m');
    $ingreso_dia = $fecha1->format('d');
    $ingreso_hora = $fecha1->format('H');
    $ingreso_minuto = $fecha1->format('i');
    $ingreso_segundo = $fecha1->format('s');

    $egreso_año = $fecha2->format('Y');
    $egreso_mes = $fecha2->format('m');
    $egreso_dia = $fecha2->format('d');
    $egreso_hora = $fecha2->format('H');
    $egreso_minuto = $fecha2->format('i');
    $egreso_segundo = $fecha2->format('s');

    
    
    

    
    // $TOTAL = 15.0;
    
    // $delete = "DELETE FROM ingresos WHERE ID = '$ID_INGRESO';";
    // if(mysqli_query($conection,$delete)){
    //     $sql = "INSERT INTO egresos(PLACA,NOMBRE,TELEFONO,FECHA_EGRESO,HORA_EGRESO,TOTAL) VALUES ('$PLACA','$NOMBRE','$TELEFONO','$FECHA_EGRESO','$HORA_EGRESO','$TOTAL');";
    //     if(mysqli_query($conection,$sql)){
    //         echo "todo bien, todo correcto";
    //     }else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    //     }   
    // }
    // mysqli_close($conection);
?>