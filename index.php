<!DOCTYPE html>
<html lang="en">

<head>
  <title>Smart Hub - Online Tutoring Platform</title>
  <?php include('includes/header.php'); ?>
</head>

<body>
  <!-- Top Navigation Bar -->
  <?php include('includes/navbar.php'); ?>


  <!-- Welcome Section -->
  <section class="welcome-section max-w-6xl mx-auto" id="home">
    <div class="welcome-text">
      <div class="flex flex-col gap-4">
        <span>
          <?php
          $name = $userDetails['fullName'];
          echo "<span class='text-sm font-normal'>Hello, $name 👋</span><br/>"
          ?>
        </span>
        <h1 class="font-bold leading-2 text-5xl text-primary">
          Welcome to SmartHub<br />online tutoring platform</h1>
        <p>
          Get access to professional teachers and ease your courses.<br />You
          will enjoy and like our tutoring way at high.
        </p>
      </div>

      <?php
      if ($userDetails) {
        echo '<a href="courses.php" class="join-button">View Courses</a>';
      } else {
        echo '<a href="login.php" class="join-button">Join Now</a>';
      }
      ?>

    </div>
    <div class="featured-image">
      <img src="https://ejournal.1001tutorial.com/public/site/images/admin/anim-1-1.gif" alt="Featured Image" />
    </div>

  </section>


  <!-- Featured Teachers Section -->
  <section class="featured-teachers" id="teachers">
    <h2>Featured Highly Rated Teachers</h2>
    <div class="grid grid-cols-3 gap-8 max-w-6xl mx-auto">
      <?php
      include('includes/config.php');

      $sql = "SELECT * FROM users where role ='teacher'";
      $result = mysqli_query($conn, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $fullName = $row['fullName'];
          $email = $row['email'];
          $role = $row['role'];
          $bio = $row['bio'];

          echo '<div class="shadow p-4 py-8 rounded-lg flex flex-col items-center gap-2">
      <img src="image2.jfif" alt="Teacher 1" class="w-20 h-20 rounded-full" />
      <h3 class="font-semibold">' . $fullName . '</h3>
      <p>' . $bio . '</p>
      <p>23+ students</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
      <a href="book-teacher.php?id=' . $id . '&name=' . $fullName . '" class="bg-primary p-2 text-white px-6" id="myBtn">Book Now</a>
    </div>';
        }
      } else {
        echo 'No teachers found.';
      }
      ?>
    </div>
  </section>

  <!-- Most Courses Section -->
  <section class="most-courses" id="courses">
    <h2>Recommended Courses</h2>
    <div class="grid grid-cols-3 gap-8 p-5">
      <?php
      $sql = "SELECT * FROM courses";
      $result = mysqli_query($conn, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $title = $row['title'];
          $code = $row['code'];
          $module_name = $row['module_name'];

          echo '<div class="flex gap-2 shadow p-5 rounded-xl items-center">
          <div><div class="bg-blue-50 p-2 font-extrabold text-5xl w-28 h-28 text-primary rounded-full flex flex-col justify-center items-center"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div></div>
          <div class="flex flex-col items-start">
          
          <p class="text-lg font-semibold">' . $title . '</p>
          <p>' . $code . '</p>
          <p>' . $module_name . '</p>
          <p class="text-gray-500">34+ Students</p>
          </div>
          </div>';

          $i++;
        }
      } else {
        echo '<p>No courses found. stay in touch.</p>';
      }
      ?>
    </div>


  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <script src="js/index.js"></script>
</body>

</html>