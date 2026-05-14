<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Profesional</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root { --primary: #4e73df; --dark: #222e3c; --light: #f5f7fb; }
        body { font-family: 'Inter', sans-serif; background: var(--light); margin: 0; display: flex; }
        .sidebar { width: 250px; height: 100vh; background: var(--dark); color: white; padding: 20px; position: fixed; }
        .main { margin-left: 250px; padding: 40px; width: 100%; }
        .card { background: white; border-radius: 10px; padding: 25px; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075); border: none; }
        .btn { background: var(--primary); color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; transition: 0.3s; }
        .btn:hover { opacity: 0.8; }
        .stats { color: #1cbb8c; font-weight: bold; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2><i class="fas fa-gem"></i> Géminis</h2>
        <hr style="opacity: 0.1">
        <p><i class="fas fa-home"></i> Dashboard</p>
        <p><i class="fas fa-user"></i> Perfil</p>
        <p><i class="fas fa-cog"></i> Ajustes</p>
    </div>
    <div class="main">