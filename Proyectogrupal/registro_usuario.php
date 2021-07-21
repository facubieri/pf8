<?php include("db.php")?>
<?php
    $nombreu = $_POST['nombre'];
    $mailu = $_POST ['mail'];
    $contrasenau = $_POST ['contrasena'];

    $query ="INSERT INTO `usuarios`(`nombre`, `mail`, `contrasena`) VALUES ('$nombreu', '$mailu', '$contrasenau')";


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