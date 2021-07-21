<?php

include("../db.php")

    $detalle = $_POST['detalle'];
    $OptionValue =mysqli_escape_string ($conexion ,$_POST['1']);

    $query ="INSERT INTO `cursos`( `detalle`) VALUES ('$detalle')";


    $ejecutar = mysqli_query($conn, $query);

    
    if($ejecutar){
        echo '
        <script>
            alert("Curso subscripto correctamente");
            window.location = "../proyecto.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, hubo un problema con la informacion");
            window.location = "../proyecto.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>