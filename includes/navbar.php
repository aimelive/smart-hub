    <?php
    session_start();

    if (isset($_SESSION['user_details'][1])) {
      $userDetails = $_SESSION['user_details'][1];
      // Access individual details like $userDetails['id'], $userDetails['fullName'], etc.
      //  echo "<a href='logout.php' class='active'>Sign Out</a>";
    } else {
      // echo "<a href='login.php' class='active'>Sign In</a>";
    }
    ?>
    <nav class="navbar py-5">
      <div class="logo">
        <a href="index.php">
          <h1>SH</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#teachers">Featured Teachers</a></li>
        <li><a href="#courses">Most Courses</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li>
          <?php
          if ($userDetails) {
            echo "<a href='profile.php' class='active'>Profile</a>";
          } else {
            echo "<a href='login.php' class='active'>Sign In</a>";
          }
          ?>
        </li>
      </ul>
    </nav>