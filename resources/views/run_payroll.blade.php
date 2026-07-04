<head>
<link rel="stylesheet" href="/build/assets/css/run-payrole.css">
<script src="/build/assets/js/run-payrole.js"></script>
</head>
<x-layout>
<section class="run-payroll">
  <header class="rp-header">
    <h1>Run Payroll</h1>
    <p>Initiate, review, and finalize employee payments with this guided process.</p>
  </header>

  <nav class="rp-steps" aria-label="Payroll steps">
    <button class="rp-step active" data-step="setup">
      <span class="rp-step-num">1</span>
      <span class="rp-step-label">Setup</span>
    </button>
    <div class="rp-step-divider" aria-hidden="true"></div>
    <button class="rp-step" data-step="review">
      <span class="rp-step-num">2</span>
      <span class="rp-step-label">Review</span>
    </button>
    <div class="rp-step-divider" aria-hidden="true"></div>
    <button class="rp-step" data-step="finalize">
      <span class="rp-step-num">3</span>
      <span class="rp-step-label">Finalize</span>
    </button>
  </nav>
</section>
<section class="payroll-setup">
  <h2>Step 1: Setup Payroll Run</h2>

  <div class="setup-grid">
    <!-- Left Column -->
    <div class="setup-left">
      <div class="field-group">
        <label>Pay Period</label>
        <div class="date-range">
          <input type="date" value="2023-12-01" />
          <span>to</span>
          <input type="date" value="2023-12-15" />
        </div>
      </div>

      <div class="field-group">
        <label>Calculate Payroll For</label>
        <div class="staff-options">
          <button class="staff-type active">All Staff</button>
          <button class="staff-type">Permanent</button>
          <button class="staff-type">Temporal</button>
          <button class="staff-type">Specific Staff</button>
        </div>
      </div>

      <div class="field-group">
        <label>Selected Employees</label>
        <div class="selected-list">
          <span>Dr. Emily Carter (EMP456)</span>
          <span>Group: Night Shift Nurses</span>
        </div>
      </div>

      <div class="form-actions">
        <button class="btn btn-reset" type="button" id="resetBtn">Reset</button>
        <button class="btn btn-primary" type="button" id="calcBtn">Calculate Payroll</button>
      </div>
    </div>

    <!-- Right Column -->
    <div class="setup-right">
      <h3>Payroll Summary</h3>
      <ul class="summary-list">
        <li><strong>Gross Pay:</strong> $0.00</li>
        <li><strong>Deductions:</strong> $0.00</li>
        <li><strong>Taxes:</strong> $0.00</li>
        <li><strong>Total Net Payroll:</strong> $0.00</li>
      </ul>
      <p class="note">Summary will update after calculating payroll.</p>
    </div>
  </div>

  <div class="warning-box">
    <strong>Action Required:</strong> Some employees have missing bank details. Payroll cannot be processed for them until this information is updated.
  </div>
</section>
</x-layout>
