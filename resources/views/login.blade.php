<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/build/assets/css/login.css">

</head>
<body>
    <section class="login-wrapper">
  <div class="login-box">
    <!-- Left Branding Panel -->
    <div class="login-left">
      <div class="branding">
        <h1>PayRoll L inc.</h1>
      </div>
    </div>

    <!-- Right Login Form -->
    <div class="login-right">
      <h2>VRA Hospital Payroll</h2>
      <p class="welcome-text">Welcome Back<br>Please enter your details to login.</p>

      <form class="login-form" method="POST" action="/dashboard">
        @csrf
        <label for="emp-id">Employee Name</label>
        <input type="text" id="emp-id" placeholder="Enter your employee name" name="loginname" />

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" name="loginpassword" />

        <div class="form-options">
          <a href="#" class="forgot-link">Forgot your password?</a>
        </div>

        <button type="submit" class="btn-login">Sign In</button>
      </form>
      <p class="access-note">
        Access is restricted to authorized personnel only. If you require access, please contact a hospital administrator.
      </p>
    </div>
  </div>
</section>
{{-- <script src="/build/assets/js/login.js"></script> --}}
</body>
</html>
