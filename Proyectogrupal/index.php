<?php include("includes/head.php")?>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="proyecto.php">Cursos</a></li>
                    <li><a href="institucional.php">Institución</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </header>
<!--portada-->
    <div class="container-cover">
        <div class="container-info-cover">
            <h1>
                Amplia tu Universo
            </h1>
            <p>
                El mundo informatico es todo tuyo, rompe tus limites.
            </p>
        </div>
    </div>
    <!--Login Register-->
    <div class="container-login-register">
        <div class="login-box">
            <form action="registro_profesor.php" method="POST" class="formulario-login">
                <h2>Profesor</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre" required="">
                <input type="text" placeholder="Correo Electrónico" name="mail" required="">
                <input type="password" placeholder="Contraseña" name="contrasena" required="">
                <button>Entrar</button>
            </form>
            <form action="registro_usuario.php" method="POST" class="formulario-register">
                <h2>Usuario</h2>
                <input type="text" placeholder="nombre" name="nombre" required="">
                <input type="text" placeholder="Correo Electrónico" name="mail" required="">
                <input type="password" placeholder="Contraseña" name="contrasena" required="">
                <button>Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>