<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Register Page</title>
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
      <h2>Register</h2>
      <form class="login-form" action="submit-register.php" method="post" name="register">
        <div class="input-container">
          <label for="fullName">Full name</label>

          <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" class="input" required={true} />
        </div>
        <div class="input-container">
          <label for="email">Email</label>

          <input type="email" id="email" name="email" placeholder="Enter your email" class="input" required={true} />
        </div>
        <div class="input-container">
          <label for="role">Register As</label>

          <select value="" class="input" required={true} name="role" id="role">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
          </select>
        </div>

        <div class="input-container">
          <label for="password">Password</label>

          <input type="password" id="password" name="password" placeholder="Enter your password" class="input" required={true} />
        </div>
        <div class="login-button">
          <button class="login-btn">Register</button>
        </div>
        <p>
          Already have an account?
          <a href="login.php" class="register-link">Login</a>
        </p>
      </form>
    </div>
  </section>
  <!-- Footer -->
  <?php include('includes/footer.php'); ?>
</body>

</html>