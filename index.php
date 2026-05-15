<?php include 'includes/header.php'; ?>

    <header style="margin-bottom: 40px;">
        <h1 style="font-size: 2.5rem; font-weight: 800;">Hola de nuevo, <span style="color: var(--primary);">Brandon</span> </h1>
        <p style="color: #64748b;">Hola estoy trabajando con ramas y esto es una prueba para ver si se crea y funciona</p>
    </header>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div class="card" style="background: linear-gradient(135deg, #6366f1, #4f46e5); color: white;">
            <p>Proyectos Activos</p>
            <h2 style="font-size: 2.5rem;">08</h2>
        </div>
        <div class="card" style="background: linear-gradient(135deg, #a855f7, #9333ea); color: white;">
            <p>Commits de Hoy</p>
            <h2 style="font-size: 2.5rem;">24</h2>
        </div>
        <div class="card" style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white;">
            <p>Tareas Pendientes</p>
            <h2 style="font-size: 2.5rem;">12</h2>
        </div>
    </div>

    <div class="card">
        <h3><i class="fas fa-chart-area"></i> Flujo de Trabajo Semanal</h3>
        <canvas id="myChart" height="100"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'],
                datasets: [{
                    label: 'Productividad',
                    data: [30, 45, 35, 60, 55, 80, 95],
                    borderColor: '#6366f1',
                    borderWidth: 4,
                    pointRadius: 6,
                    pointBackgroundColor: '#6366f1',
                    tension: 0.4,
                    fill: true,
                    backgroundColor: 'rgba(99, 102, 241, 0.1)'
                }]
            },
            options: { plugins: { legend: { display: false } }, scales: { y: { display: false }, x: { grid: { display: false } } } }
        });
    </script>

<?php include 'includes/footer.php'; ?>