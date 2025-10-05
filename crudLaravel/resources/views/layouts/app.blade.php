<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MA Eventos</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    * { 
    box-sizing: border-box; 
    padding: 0;
    margin: 0;
  }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(180deg, #F1F4F4 0%, #EFEFEF 100%);
      color: #361D3E;
      padding: 28px;
      height: 100%;
    }

    .links {
      color: white;
      background-color: #361D3E;
      text-decoration: none;
      padding: 5px;
      border-radius: 10px;
    }

    .links:hover {
      background-color: #8a679b;
    }

    .inputs {
      border-color: #361D3E;
      padding: 7px 25px 10px 0;
      border-radius: 5px;
      font-family: 'Inter', sans-serif;
    }

    .buttons {
      color: white;
      background-color: #361D3E;
      padding: 8px;
      border-radius: 10px;
      border: none;
      font-family: 'Inter', sans-serif;
    }

    .buttons:hover {
      background-color: #8a679b;
      cursor: pointer;
    }

    .app {
      display: grid;
      grid-template-columns: 240px 1fr;
      gap: 24px;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Sidebar */
    .sidebar {
      background: linear-gradient(180deg, rgba(103,75,116,0.05), rgba(54,28,61,0.04));
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 6px 18px #bebbc0;
      position: sticky;
      top: 28px;
    }

    .brand {
      display: flex;
      gap: 12px;
      align-items: center;
      margin-bottom: 18px;
    }

    .logo {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, #8a679b, #361D3E);
      color: #F1F4F4;
      font-weight: 700;
    }

    .brand h1 { 
      font-size: 16px; margin: 0; color: #391C2F; 
    }

    .nav { 
      margin-top: 8px; 
    }

    .nav a {
      display: block;
      padding: 10px 12px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
    }

    .nav a:hover { background: #c5a9d3; }
    .nav .active { background: #8a679b; color: #F1F4F4; }

    /* Main */
    .main { min-height: calc(100vh - 56px); }

    /* Topbar */
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
    }

    .profile { display: flex; align-items: center; gap: 12px; }

    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: linear-gradient(135deg,#361D3E,#391C2F);
      display: grid;
      place-items: center;
      color: #F1F4F4;
      font-weight: 700;
    }

    /* Panel/Table */
    .panel {
      background: white;
      padding: 18px;
      border-radius: 14px;
      box-shadow: 0 6px 18px #bebbc0;
      border: 1px solid rgba(54,28,61,0.06);
    }

    h2 {
      margin: 0 0 12px 0;
      color: #391C2F;
    }

    p {
      padding: 5px; 
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px 10px;
      text-align: left;
      border-bottom: 1px solid rgba(56,28,47,0.06);
      font-size: 14px;
    }
    th {
      font-size: 13px;
      color: #887f8b;
      font-weight: 700;
    }
  </style>
</head>

<body>
  <div class="app">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="brand">
        <div class="logo">MA</div>
        <div>
          <h1>MA Eventos</h1>
          <div style="font-size:12px; color:#887f8b">Painel CRUD</div>
        </div>
      </div>
      <nav class="nav">
        <a href="{{ route('events.index') }}" class="active">Dashboard</a>
      </nav>
    </aside>

    <!-- Main -->
    <main class="main">
      <!-- Topbar -->
      <div class="topbar">
        <h2>MA Eventos</h2>
        <div class="profile">
            @yield('create')
            <div style="text-align:right">
            <div style="font-weight:700">Maria Aparecida</div>
            <div style="font-size:12px;color:#887f8b">Administrador</div>
            </div>
            <div class="avatar">MA</div>
        </div>
      </div>

      <!-- Table -->
      <section class="panel">
        <h2>Lista de Eventos</h2>
        @yield('content')
      </section>
    </main>
  </div>
</body>
</html>