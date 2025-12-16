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
      <i class="fa-solid fa-building"></i>
      <span>PayRoll Inc.</span>
    </div>

    <nav class="nav">
      <button class="nav-item active" data-section="dashboard">
        <i class="fa-solid fa-chart-line"></i>
        <span>Dashboard</span>
      </button>
      <button class="nav-item" data-section="run-payroll">
        <i class="fa-solid fa-money-check-dollar"></i>
        <span>Run Payroll</span>
      </button>
      <button class="nav-item" data-section="employees">
        <i class="fa-solid fa-users"></i>
        <span>Employees</span>
      </button>
      <button class="nav-item" data-section="reports">
        <i class="fa-solid fa-file-lines"></i>
        <span>Reports</span>
      </button>
      <button class="nav-item" data-section="settings">
        <i class="fa-solid fa-gear"></i>
        <span>Settings</span>
      </button>
      <button class="nav-item" data-section="support">
        <i class="fa-solid fa-circle-info"></i>
        <span>Support</span>
      </button>
    </nav>

    <div class="logout">
      <button class="logout-btn" data-section="logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
      </button>
    </div>
  </aside>

  <main class="content">
    {{ $slot }}
  </main>
</body>
</html>
