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
            <h3 class="text-center">Reportes</h3>
            <h4 class="text-center">Resultados diarios</h4>

        <!-- Gráficas -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asistencia Mensual</h5>
                        <!-- Inserta aquí el gráfico de asistencia mensual -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asistencia por Curso</h5>
                        <!-- Inserta aquí el gráfico de asistencia por curso -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido de los gráficos de asistencias -->
        <div class="mt-4">
            <h4>Reporte Específico</h4>
            <p></p>
            <p></p>
        </div>

        <!-- Calendario -->
        <div class="mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Calendario de Asistencia</h4>
            <!-- Inserta aquí el calendario interactivo donde se puedan marcar las asistencias -->
                    </div>
                </div>
            </div>
        </div>

    <!-- CONTENIDO DE "Optimización de Asistencia" -->
    <div class="container mt-4">
        <h3 class="text-center">Optimización de Asistencia</h3>

        <!-- Observaciones -->
    <div class="mt-4">
        <h4>Observaciones</h4>
        <ul>
            <!-- Lista de observaciones relacionadas con la asistencia -->
            <li>Observación 1: Descripción de la observación.</li>
            <li>Observación 2: Descripción de la observación.</li>
            <li>Observación 3: Descripción de la observación.</li>
            <!-- lista dinámicamente con base de datos -->
        </ul>
    </div>

   
    <div class="container mt-4">
                <h2>Busqueda de registros</h2>
                <div class="mb-3">
                <form action="contador.php" method="post">


                    <input type="radio" name="Contar" value="Falla" id="">Falla <br>
                    <input type="radio" name="Contar" value="Asiste" id="">Asiste <br>
                    <input type="radio" name="Contar" value="Retardo" id="">Retardo <br>
                    <input type="radio" name="Contar" value="Evasion" id="">Evasion <br>
                    <input type="radio" name="Contar" value="Justificada" id="">Falla Justificada <br> <br>
                    
                    <button type="submit" class="submit-btn">Buscar asistencia</button> 
                </form>
                </div>
                </div>

    <!-- Botones de Acción -->
    <div class="mt-4">
        <center><button type="button" class="btn btn-primary">Exportar Informe</button></center>
    </div>
</div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
