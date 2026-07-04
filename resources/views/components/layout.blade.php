<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance Payroll App</title>
    <link rel="stylesheet" href="/build/assets/css/layouts.css">
    <script src="/build/assets/js/layout.js" crossorigin="anonymous"></script>
</head>
<body>
<aside class="sidebar">
    <div class="brand">
        <img src="build/assets/image/vra.png"  alt="vra_logo" class="logo-img">
      <h3 class="brand-name">PayRoll Inc.</h3>
    </div>

    <nav class="nav">
      <button class="nav-item active" href="#" data-section="dashboard">
        <i class="fa-solid fa-chart-line"></i>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
      </button>
      <button class="nav-item" data-section="run-payroll">
        <i class="fa-solid fa-money-check-dollar"></i>
        <a href="{{ url('/run_payroll') }}">Run Payroll</a>
      </button>
      <button class="nav-item" data-section="employees">
        <i class="fa-solid fa-users"></i>
        <a href="{{ url('/employees') }}">Users</a>
      </button>
      <button class="nav-item" data-section="reports">
        <i class="fa-solid fa-file-lines"></i>
        <a href="{{ url('/reports') }}">Reports</a>
      </button>
      <button class="nav-item" data-section="settings">
        <i class="fa-solid fa-gear"></i>
        <a href="{{ url('/settings') }}">Settings</a>
      </button>
      <button class="nav-item" data-section="support">
        <i class="fa-solid fa-circle-info"></i>
        <a href="{{ url('/userManagement') }}">Employees</a>
      </button>
    </nav>

    <div class="logout">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="logout-btn" data-section="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
            </button>
        </form>
    </div>

  </aside>

  <main class="content">
    {{ $slot }}
  </main>
</body>
</html>
