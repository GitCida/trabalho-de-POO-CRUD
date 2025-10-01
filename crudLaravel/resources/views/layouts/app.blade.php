<!doctype html>

<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('DS Eventos', 'Dashboard')</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --lux-1: #F1F4F4;
      --lux-2: #361D3E;
      --lux-3: #8a679bff;
      --lux-4: #DBCBC1;
      --lux-5: #391C2F;

      --muted: rgba(55,40,60,0.6);
      --shadow: 0 6px 18px rgba(23,10,30,0.28);
      --radius: 12px;
    }

    * { box-sizing: border-box; }
    html, body { height: 100%; margin: 0; }
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(180deg, var(--lux-1) 0%, #EFEFEF 100%);
      color: var(--lux-2);
      padding: 28px;
    }

    .links {
      color: white;
      background-color: var(--lux-2);
      text-decoration: none;
      padding: 5px;
      border-radius: 5px;
    }

    .links:hover {
      background-color: var(--lux-3);
    }

    .inputs {
      border-color: var(--lux-2);
      padding: 7px 25px 10px 0;
      border-radius: 5px;
      font-family: 'Inter', sans-serif;
    }

    .buttons {
      color: white;
      background-color: var(--lux-2);
      padding: 8px;
      border-radius: 5px;
      border: none;
      font-family: 'Inter', sans-serif;
    }

    .buttons:hover {
      background-color: var(--lux-3);
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
      border-radius: var(--radius);
      padding: 20px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(54,28,61,0.06);
      position: sticky;
      top: 28px;
      height: calc(100vh - 56px);
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
      background: linear-gradient(135deg, var(--lux-3), var(--lux-2));
      color: var(--lux-1);
      font-weight: 700;
    }
    .brand h1 { font-size: 16px; margin: 0; color: var(--lux-5); }

    .nav { margin-top: 8px; }
    .nav a {
      display: block;
      padding: 10px 12px;
      border-radius: 10px;
      color: var(--lux-2);
      text-decoration: none;
      font-weight: 600;
    }
    .nav a:hover { background: rgba(103,75,116,0.08); }
    .nav .active { background: var(--lux-3); color: var(--lux-1); }

    /* Main */
    .main { min-height: calc(100vh - 56px); }

    /* Topbar */
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
    }
    .search {
      display: flex;
      align-items: center;
      gap: 8px;
      background: var(--lux-1);
      padding: 10px 12px;
      border-radius: 999px;
      box-shadow: 0 3px 10px rgba(20,10,30,0.06);
      width: 420px;
      max-width: 70%;
    }
    .search input {
      border: 0;
      background: transparent;
      outline: none;
      font-size: 14px;
      color: var(--lux-5);
      width: 100%;
    }
    .profile { display: flex; align-items: center; gap: 12px; }
    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: linear-gradient(135deg,var(--lux-2),var(--lux-5));
      display: grid;
      place-items: center;
      color: var(--lux-1);
      font-weight: 700;
    }

    /* Panel/Table */
    .panel {
      background: rgba(255,255,255,0.95);
      padding: 18px;
      border-radius: 14px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(54,28,61,0.06);
    }

    h2 {
      margin: 0 0 12px 0;
      color: var(--lux-5);
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
      color: var(--muted);
      font-weight: 700;
    }

    .actions button {
      border: 0;
      padding: 8px 12px;
      border-radius: 8px;
      margin-right: 6px;
      cursor: pointer;
      font-weight: 600;
    }
    .btn-edit {
      background: transparent;
      color: var(--lux-3);
      border: 1px solid rgba(103,75,116,0.3);
    }
    .btn-delete {
      background: transparent;
      color: #dc3545;
      border: 1px solid rgba(220,53,69,0.3);
    }

    @media (max-width: 900px) {
      .app { grid-template-columns: 1fr; }
      .sidebar { position: relative; height: auto; }
      .search { width: 100%; }
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
          <div style="font-size:12px; color:var(--muted)">Painel CRUD</div>
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
        <div class="search">
          <input placeholder="Pesquisar eventos..." />
        </div>
        <div class="profile">
            @yield('create')
            <div style="text-align:right">
            <div style="font-weight:700">Maria A.</div>
            <div style="font-size:12px;color:var(--muted)">Administrador</div>
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
