<?php 
    $usuario = "Brandon Miguel";
    
    // Simulamos una lista de datos (esto vendría de una base de datos)
    $proyectos = [
        ["nombre" => "Control de Inventarios", "fecha" => "2026-05-10", "estado" => "Completado"],
        ["nombre" => "Sistema de Tickets", "fecha" => "2026-05-12", "estado" => "En progreso"],
        ["nombre" => "Módulo de Reportes", "fecha" => "2026-05-14", "estado" => "Pendiente"],
    ];
?>

<?php include 'includes/header.php'; ?>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
        <div class="card" style="border-left: 5px solid #1cbb8c;">
            <h4 style="margin:0; color:#666;">Proyectos Totales</h4>
            <h2 style="margin:10px 0;"><?php echo count($proyectos); ?></h2>
        </div>
        <div class="card" style="border-left: 5px solid #4e73df;">
            <h4 style="margin:0; color:#666;">Horas Trabajadas</h4>
            <h2 style="margin:10px 0;">42 hrs</h2>
        </div>
        <div class="card" style="border-left: 5px solid #f6c23e;">
            <h4 style="margin:0; color:#666;">Alertas</h4>
            <h2 style="margin:10px 0;">2</h2>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-list"></i> Listado de Proyectos</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="text-align: left; border-bottom: 2px solid #eee;">
                    <th style="padding: 12px;">Nombre</th>
                    <th style="padding: 12px;">Fecha</th>
                    <th style="padding: 12px;">Estado</th>
                    <th style="padding: 12px;">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $p): ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;"><?php echo $p['nombre']; ?></td>
                    <td style="padding: 12px;"><?php echo $p['fecha']; ?></td>
                    <td style="padding: 12px;">
                        <span style="padding: 4px 8px; border-radius: 5px; font-size: 12px; background: #eee;">
                            <?php echo $p['estado']; ?>
                        </span>
                    </td>
                    <td style="padding: 12px;"><button class="btn" style="padding: 5px 10px;">Ver</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php include 'includes/footer.php'; ?>