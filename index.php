<?php 
    // Aquí podrías tener lógica de base de datos
    $usuario = "Arthur Morgan y John Marston";
    $rol = "Director";
    $status = "Online";
?>

<?php include 'includes/header.php'; ?>

    <div class="card">
        <h1>Bienvenido de nuevo, <?php echo $usuario; ?></h1>
        <p>Estado del servidor: <span class="stats"><i class="fas fa-circle"></i> <?php echo $status; ?></span></p>
        <hr>
        <h3>Resumen de actividad</h3>
        <p>Estás visualizando la vista profesional separada por componentes.</p>
        <a href="#" class="btn">Generar Reporte</a>
    </div>

    <?php 
    echo "ya estoy aprendiendo algo nuevo /n";
    ?>

<?php include 'includes/footer.php'; ?>