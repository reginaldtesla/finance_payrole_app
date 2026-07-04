<head>
    <link rel="stylesheet" href="/build/assets/css/dashboard.css">
</head>
<x-layout>
  <main class="dashboard">
  <header class="header">
    <h2>Welcome, Admin! Here's what's happening today.</h2>
    <div class="actions">
      <button class="btn export"><i class="fa-solid fa-download"></i> Export</button>
      <button class="btn add"><i class="fa-solid fa-user-plus"></i> Add Employee</button>
    </div>
  </header>

  <section class="summary">
    <div class="card status">
      <h3>Current Payroll Status</h3>
      <p class="value">Ready to Run</p>
      <p class="note"><i class="fa-solid fa-arrow-up" style="color:green;"></i> +2% since last month</p>
    </div>
    <div class="card payday">
      <h3>Upcoming Payday</h3>
      <p class="value">5 Days</p>
      <p class="note">on June 30, 2024</p>
    </div>
    <div class="card employees">
      <h3>Total Employees</h3>
      <p class="value">124</p>
      <p class="note">3 new hires this week</p>
    </div>
  </section>

  <section class="activity">
    <h3>Recent Activity</h3>
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Action</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Olivia Martin</td>
          <td>Payroll Run #1023</td>
          <td>June 15, 2024</td>
          <td><span class="status completed">Completed</span></td>
        </tr>
        <tr>
          <td>Jackson Lee</td>
          <td>Added to system</td>
          <td>June 14, 2024</td>
          <td><span class="status new">New Hire</span></td>
        </tr>
        <tr>
          <td>Sophia Hernandez</td>
          <td>Tax Form W-4 Updated</td>
          <td>June 13, 2024</td>
          <td><span class="status pending">Pending Review</span></td>
        </tr>
        <tr>
          <td>Liam Garcia</td>
          <td>Time-off Request</td>
          <td>June 12, 2024</td>
          <td><span class="status approved">Approved</span></td>
        </tr>
      </tbody>
    </table>
  </section>
</main>

</x-layout>
