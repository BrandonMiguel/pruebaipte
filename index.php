<?php 
    $usuario = "Brandon Miguel";
    $proyectos = [
        ["nombre" => "Control de Inventarios", "progreso" => 100, "color" => "#1cbb8c"],
        ["nombre" => "Sistema de Tickets", "progreso" => 65, "color" => "#4e73df"],
        ["nombre" => "Módulo de Reportes", "progreso" => 20, "color" => "#f6c23e"],
    ];
?>

<?php include 'includes/header.php'; ?>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1>Panel de Control <small style="font-size: 0.5em; color: #888;">v2.0</small></h1>
        <button onclick="toggleDarkMode()" class="btn" style="background: #333;">
            <i class="fas fa-moon"></i> Cambiar Modo
        </button>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 25px;">
        <div class="card">
            <h3><i class="fas fa-chart-line"></i> Rendimiento Semanal</h3>
            <canvas id="myChart" height="150"></canvas>
        </div>

        <div class="card">
            <h3><i class="fas fa-tasks"></i> Progreso Real</h3>
            <?php foreach($proyectos as $p): ?>
                <div style="margin-bottom: 15px;">
                    <div style="display: flex; justify-content: space-between; font-size: 0.8em; margin-bottom: 5px;">
                        <span><?php echo $p['nombre']; ?></span>
                        <span><?php echo $p['progreso']; ?>%</span>
                    </div>
                    <div style="background: #eee; border-radius: 10px; height: 8px;">
                        <div style="background: <?php echo $p['color']; ?>; width: <?php echo $p['progreso']; ?>%; height: 100%; border-radius: 10px;"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                datasets: [{
                    label: 'Commits realizados',
                    data: [12, 19, 3, 5, 2, 3],
                    borderColor: '#4e73df',
                    tension: 0.4,
                    fill: true,
                    backgroundColor: 'rgba(78, 115, 223, 0.1)'
                }]
            }
        });

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>

<?php include 'includes/footer.php'; ?>