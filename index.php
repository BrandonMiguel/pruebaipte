<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Géminis</title>
    <style>
        /* Un poco de CSS para que se vea genial */
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 300px; border-top: 5px solid #007bff; }
        h1 { color: #333; margin-bottom: 0.5rem; }
        p { color: #666; font-size: 0.9rem; }
        .status { display: inline-block; padding: 5px 15px; border-radius: 20px; background: #e1f5fe; color: #01579b; font-weight: bold; margin-top: 1rem; }
        .time { font-size: 0.8rem; color: #999; margin-top: 1rem; }
    </style>
</head>
<body>

    <div class="card">
        <?php
            // Definimos variables en PHP
            $nombre = "Brandon Miguel";
            $puesto = "Desarrollador en Pruebas (IPTE)";
            $proyecto = "Proyecto Géminis";
        ?>

        <h1><?php echo $nombre; ?></h1>
        <p><?php echo $puesto; ?></p>
        
        <div class="status">
             Trabajando en: <?php echo $proyecto; ?>
        </div>

        <div class="time">
            Última actualización: <?php echo date("H:i:s"); ?>
        </div>
    </div>

</body>
</html>