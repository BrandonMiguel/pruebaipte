<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacob - Premium Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #a855f7;
            --dark: #0f172a;
            --bg: #f8fafc;
            --card-bg: rgba(255, 255, 255, 0.9);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            color: #334155;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Sidebar Elegante */
        .sidebar { 
            width: 280px; 
            height: 100vh; 
            background: var(--dark); 
            color: white; 
            padding: 30px 20px; 
            position: fixed;
            box-shadow: 10px 0 30px rgba(0,0,0,0.1);
            z-index: 100;
        }

        .sidebar h2 {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 40px;
            text-align: center;
        }

        .nav-link { 
            display: flex;
            align-items: center;
            color: #94a3b8; 
            text-decoration: none; 
            padding: 14px 18px; 
            margin-bottom: 8px; 
            border-radius: 12px; 
            transition: 0.3s;
            font-weight: 500;
        }

        .nav-link:hover { 
            background: rgba(255,255,255,0.05); 
            color: white; 
            transform: translateX(5px);
        }

        .nav-link.active {
            background: var(--primary);
            color: white;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }

        .nav-link i { margin-right: 15px; font-size: 1.2rem; }

        /* Contenido Principal */
        .main { margin-left: 280px; padding: 50px; width: 100%; }

        .card { 
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.7);
            border-radius: 24px; 
            padding: 30px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.05); 
            margin-bottom: 25px; 
            transition: all 0.3s ease;
        }

        .card:hover { transform: translateY(-10px); box-shadow: 0 30px 60px rgba(0,0,0,0.1); }

        .btn { 
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white; 
            padding: 12px 24px; 
            border-radius: 12px; 
            border: none; 
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }

        .btn:hover { transform: scale(1.05); box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6); }

        /* Dark Mode */
        body.dark-mode { --bg: #020617; --card-bg: rgba(30, 41, 59, 0.8); color: #f1f5f9; }
        body.dark-mode .card { border: 1px solid rgba(255,255,255,0.05); }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2><i class="fas fa-bolt"></i> JACOB</h2>
        <a href="index.php" class="nav-link"><i class="fas fa-grid-2"></i> Dashboard</a>
        <a href="perfil.php" class="nav-link"><i class="fas fa-user-astronaut"></i> Perfil</a>
        <a href="tareas.php" class="nav-link"><i class="fas fa-rocket"></i> Tareas</a>
        <div style="position: absolute; bottom: 30px; width: calc(100% - 40px);">
            <button onclick="toggleDarkMode()" class="btn" style="width: 100%; background: #1e293b;">
                <i class="fas fa-circle-half-stroke"></i> Apariencia
            </button>
        </div>
    </div>
    <div class="main">
    <script>
        function toggleDarkMode() { document.body.classList.toggle('dark-mode'); }
    </script>