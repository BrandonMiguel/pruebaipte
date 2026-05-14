/* Transición suave */
body, .card, .sidebar { transition: all 0.3s ease; }

/* Estilos Modo Oscuro */
body.dark-mode { background: #1a1a1a; color: white; }
body.dark-mode .card { background: #2d2d2d; color: white; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
body.dark-mode .sidebar { background: #000; }
body.dark-mode h1, body.dark-mode h3 { color: #fff; }

/* Efecto Hover en las cards */
.card:hover { transform: translateY(-5px); }