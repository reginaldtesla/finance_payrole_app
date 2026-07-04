<head>
<link rel="stylesheet" href="/build/assets/css/reports.css">
<script src="/build/assets/js/reports.js" crossorigin="anonymous"></script>
</head>
<x-layout>
<section class="annual-summary">
  <header class="summary-header">
    <h2>Annual Payroll Summary for Tax Year 2023</h2>
    <div class="summary-controls">
      <select>
        <option>2023</option>
        <option>2022</option>
        <option>2021</option>
      </select>
      <select>
        <option>All Departments</option>
        <option>Technology</option>
        <option>Marketing</option>
        <option>HR</option>
      </select>
      <select>
        <option>All Types</option>
        <option>Permanent</option>
        <option>Temporal</option>
      </select>
      <button class="btn generate">Generate Report</button>
      <button class="btn export">Export</button>
    </div>
  </header>

  <section class="summary-totals">
    <div class="total-card"><strong>Total Gross Payroll:</strong> $4,876,321</div>
    <div class="total-card"><strong>Federal Tax:</strong> $975,264</div>
    <div class="total-card"><strong>State Tax:</strong> $243,816</div>
    <div class="total-card"><strong>Local Tax:</strong> $97,526</div>
  </section>

  <table class="summary-table">
    <thead>
      <tr>
        <th>Employee</th>
        <th>Staff Type</th>
        <th>Gross Pay</th>
        <th>Total Taxes</th>
        <th>Net Pay</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John Doe</td>
        <td>Permanent</td>
        <td>$102,000.00</td>
        <td>$20,400.00</td>
        <td>$76,500.00</td>
      </tr>
      <tr>
        <td>Jane Smith</td>
        <td>Permanent</td>
        <td>$110,400.00</td>
        <td>$22,080.00</td>
        <td>$82,800.00</td>
      </tr>
      <tr>
        <td>Mike Johnson</td>
        <td>Temporal</td>
        <td>$46,800.00</td>
        <td>$9,360.00</td>
        <td>$35,100.00</td>
      </tr>
      <tr>
        <td>Emily Davis</td>
        <td>Permanent</td>
        <td>$126,000.00</td>
        <td>$25,200.00</td>
        <td>$94,500.00</td>
      </tr>
    </tbody>
  </table>

  <footer class="summary-footer">
    <span>Showing 1 to 4 of 152 results</span>
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
