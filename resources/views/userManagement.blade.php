<head>
    <link rel="stylesheet" href="/build/assets/css/user-management.css">
    <script src="/build/assets/js/user-management.js" crossorigin="anonymous"></script>
</head>
<x-layout>
    <section class="user-management">
  <header class="user-header">
    <h2>User Management</h2>
    <div class="controls">
      <input type="text" placeholder="Search users..." class="search-input" />
      <div class="filters">
        <button class="filter active">All</button>
        <button class="filter">Admin</button>
        <button class="filter">Staff</button>
      </div>
      <button class="add-user"><i class="fa-solid fa-user-plus"></i> Add New User</button>
    </div>
  </header>

  <table class="user-table">
    <thead>
      <tr>
        <th>User</th>
        <th>Role</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alice Johnson <span class="emp-id">(EMP-001)</span></td>
        <td>Staff</td>
        <td>ajohnson</td>
        <td>••••••••••</td>
        <td><i class="fa-solid fa-eye"></i> <i class="fa-solid fa-trash"></i></td>
      </tr>
      <tr>
        <td>Bob Williams <span class="emp-id">(EMP-002)</span></td>
        <td>Admin</td>
        <td>bwilliams</td>
        <td>••••••••••</td>
        <td><i class="fa-solid fa-eye"></i> <i class="fa-solid fa-trash"></i></td>
      </tr>
      <tr>
        <td>Charlie Brown <span class="emp-id">(EMP-003)</span></td>
        <td>Staff</td>
        <td>cbrown</td>
        <td>••••••••••</td>
        <td><i class="fa-solid fa-eye"></i> <i class="fa-solid fa-trash"></i></td>
      </tr>
      <tr>
        <td>Diana Miller <span class="emp-id">(EMP-004)</span></td>
        <td>Staff</td>
        <td>dmiller</td>
        <td>••••••••••</td>
        <td><i class="fa-solid fa-eye"></i> <i class="fa-solid fa-trash"></i></td>
      </tr>
      <tr>
        <td>Ethan Davis <span class="emp-id">(EMP-005)</span></td>
        <td>Staff</td>
        <td>edavis</td>
        <td>••••••••••</td>
        <td><i class="fa-solid fa-eye"></i> <i class="fa-solid fa-trash"></i></td>
      </tr>
    </tbody>
  </table>

  <footer class="pagination-footer">
    <span>Showing 1 to 5 of 50 users</span>
    <div class="pagination">
      <button class="page active">1</button>
      <button class="page">2</button>
      <button class="page">3</button>
      <span>...</span>
      <button class="page">10</button>
      <button class="page">&gt;</button>
    </div>
  </footer>
</section>
</x-layout>
