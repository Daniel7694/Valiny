<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- METADATOS -->
        <meta charset="UTF-8">
        <meta name="author" content="Deviu System">
        <meta name="descripcion" content="Aplicativo web Valiny">
        <meta name="keywords" content="HTML, CSS, JavaScript, React">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- TITULO -->
        <title>Aplicativo web | Valiny</title>
    
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="../../images/codigo-qr.png">
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
        <!-- CSS -->
        <link rel="stylesheet" href="../../css/style.css">
    </head>
<body>
    <!-- NAVEGACION -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">

                <ul class="navbar-nav">
                <!-- INICIO -->
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
                <!-- REPORTES -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Optimizacion_Asistencia.php"><i class="bi bi-gear"></i> Optimización de Asistencia</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Escolar.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Escolar</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Comedor.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Comedor</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Justificada.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Justificada</a></li>
                    </ul>
                </li>
                <!-- REPORTES DE CURSOS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes de Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Registro_Curso.php"><i class="bi bi-file-earmark-text"></i> Registro de Cursos</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Justificada.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Justificada</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Aulas.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Aulas</a></li>
                    </ul>
                </li>
                <!-- SALIR -->
                <li class="nav-item">
                    <a class="nav-link" href="Ingreso.php"><i class="bi bi-door-open"></i> Salir</a>
                </li>
                </ul>
            <!-- Contenedor para la información del administrador -->

        </div>
    </div>
</nav>

    <!--TITULO DEL ADMINISTRADOR-->
    <div class="container mt-4">
        <h3 class="text-center">Lectura Código QR</h3>
        <h4 class="text-center">Entrada Comedor Escolar</h4>

    <!--FORMULARIO DE ESTUDIANTE-->
        <div class="container mt-4">
            <form action="Buscar.php" method="post">

                <div class="mb-3">
                    <label for="codigoEstudiante" class="form-label">Código del Estudiante</label>
                    <input type="text" class="form-control" id="codigoEstudiante" placeholder="Ingrese el código del estudiante" name="ID_Estudiante">
                </div>
                
                <button type="submit" class="submit-btn">Verificar</button>
            </form>
        </div>
    </div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>