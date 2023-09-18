<?php
session_start();

if (isset($_SESSION['user_details'][1])) {
  $userDetails = $_SESSION['user_details'][1];
  // Access individual details like $userDetails['id'], $userDetails['fullName'], etc.
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Login Page</title>
  <style>
    .login-section {
      margin: 20px;
      width: 45%;
      margin: 40px auto;
      border: 2px solid #ddd;
      padding: 50px;
      border-radius: 10px;
    }

    .register-link {
      color: var(--blue);
    }

    .register-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Top Navigation Bar -->
  <?php include('includes/navbar.php'); ?>

  <!-- Login form section -->
  <section class="login-section" id="login">
    <div class="login-container">
      <h2>Login</h2>
      <form class="login-form" method="post" action="submit-login.php" name="login">
        <div class="input-container">
          <label for="email">Email</label>

          <input type="text" id="email" name="email" placeholder="Enter your email" class="input" />
        </div>
        <div class="input-container">
          <label for="name">Password</label>

          <input type="password" id="password" name="password" placeholder="Enter your password" class="input" />
        </div>
        <div class="login-button">
          <button class="login-btn">Sign In</button>
        </div>
        <p>
          Don't have an account?
          <a href="register.php" class="register-link">Register</a>
        </p>
      </form>
    </div>
  </section>
  <!-- Footer -->
  <?php include('includes/footer.php'); ?>
</body>

</html>