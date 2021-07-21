<?php include("../db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Avanzado</title>
    <link rel="stylesheet" href="estilo2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!--header - top-->
    <header>
        <div class="header-content">
            <div class="logo" href="index.php">
                <h1>Aust<b>Flex</b></h1>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../proyecto.php">Cursos</a></li>
                        <li><a href="../institucional.php">Institución</a></li>
                        <li><a href="../contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container-register-abm">
        <div class="abm-box">
            <form action="save_task.php" method="POST" class="formulario-abm">
                <h3>(detalles en contrucción)</h3>
                <h2>Elija el Curso</h2>
                <select name="detalle" required="">
                    <option value="1">Curso Inicial</option>
                    <option value="2">Curso Intermedio</option>
                    <option value="3">Curso Avanzado</option>
                </select>
                <button>suscribirse</button>
            </form>
        </div>
    </div>
</body>
</html>