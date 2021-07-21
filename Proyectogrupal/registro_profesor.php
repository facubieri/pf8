<?php include("db.php")?>
<?php
    $nombrep = $_POST['nombre'];
    $mailp = $_POST ['mail'];
    $contrasenap = $_POST ['contrasena'];

    $query ="INSERT INTO `profesores`(`nombre`, `mail`, `contrasena`) VALUES ('$nombrep', '$mailp', '$contrasenap')";


    $ejecutar = mysqli_query($conn, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>