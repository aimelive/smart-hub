<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="icon" type="image/x-icon" href="/img/logo.png" />
    <title>Smart Hub - Online Tutoring Platform</title>
    <!-- <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"
    ></script> -->
  </head>
  <body>
    <!-- Top Navigation Bar -->
    	<?php include('includes/header.php');?>


    <!-- Welcome Section -->
    <section class="welcome-section" id="home">
      <div class="welcome-text">
        <h1 class="font-semibold leading-2">
          <?php 
          $name = $userDetails['fullName'];
          echo "<span class='text-sm font-normal'>Hello, $name 👋</span><br/>" 
          ?>
          Welcome to SmartHub<br />online tutoring platform</h1>
        <p>
          Get access to professional teachers and ease your courses.<br />You
          will enjoy and like our tutoring way at high.
        </p>
        <?php
        if($userDetails){
          echo '<a href="courses.php" class="join-button">View Courses</a>';
        } else {
           echo '<a href="login.php" class="join-button">Join Now</a>';
        }
        ?>
        
      </div>
      <div class="featured-image">
        <img
          src="https://ejournal.1001tutorial.com/public/site/images/admin/anim-1-1.gif"
          alt="Featured Image"
        />
      </div>
    
    </section>

    <?php
          // Assuming you have already established a database connection
          include('includes/config.php');

          // Fetch all users from the database
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);

          if ($result && mysqli_num_rows($result) > 0) {
              // Start a container div
              echo '<div>';

              while ($row = mysqli_fetch_assoc($result)) {
                  // Generate HTML for each user
                  $id = $row['id'];
                  $fullName = $row['fullName'];
                  $email = $row['email'];
                  $role = $row['role'];

                  echo '<div class="user">';
                  echo '<h2>User Details</h2>';
                  echo "<p>ID: $id</p>";
                  echo "<p>Full Name: $fullName</p>";
                  echo "<p>Email: $email</p>";
                  echo "<p>Role: $role</p>";
                  echo '</div>';
              }

              // Close the container div
              echo '</div>';
          } else {
              echo 'No users found.';
          }

          // Close the database connection if needed
          mysqli_close($conn);
    ?>


    <!-- Featured Teachers Section -->
    <section class="featured-teachers" id="teachers">
      <h2>Featured Highly Rated Teachers</h2>
      <div class="teacher-card">
        <img src="image2.jfif" alt="Teacher 1" />
        <h3>Dufitumukiza Ephrem</h3>
        <p>Professional Mathematics<br />Expert</p>
        <p>23+ students</p>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <button class="find-button" id="myBtn">Book Now</button>
      </div>
      <div class="teacher-card">
        <img src="image2.jfif" alt="Teacher 1" />
        <h3>Dufitumukiza Ephrem</h3>
        <p>Professional Mathematics<br />Expert</p>
        <p>23+ students</p>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <button class="find-button" id="myBtn">Book Now</button>
      </div>
      <div class="teacher-card">
        <img src="image2.jfif" alt="Teacher 1" />
        <h3>Dufitumukiza Ephrem</h3>
        <p>Professional Mathematics<br />Expert</p>
        <p>23+ students</p>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <button class="find-button" id="myBtn">Book Now</button>
      </div>
      <!-- Add more teacher cards here -->
    </section>

    <!-- Most Courses Section -->
    <section class="most-courses" id="courses">
      <h2>Most Courses Available</h2>
      <!-- Add course cards here -->
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
      <h2>Testimonials</h2>
      <!-- Add testimonial cards here -->
    </section>

    <!-- Footer -->
     	<?php include('includes/footer.php');?>
    <!-- Book a session with teacher modal -->
    <div class="modal" id="myModal">
      <article class="modal-container">
        <header class="modal-container-header">
          <h1 class="modal-container-title">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              aria-hidden="true"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                fill="currentColor"
                d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z"
              />
            </svg>
            Book session with Dufitumukiza
          </h1>
          <button class="icon-button" id="closeModal">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                fill="currentColor"
                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
              />
            </svg>
          </button>
        </header>
        <section class="modal-container-body rtf">
          <!-- <h2>
            Enter your informations below to continue booking Dufitumukiza
            Ephrem.
          </h2> -->
          <div class="input-container">
            <label for="name">Your full name</label>

            <input
              type="text"
              id="name"
              name="name"
              placeholder="Enter your name..."
              class="input"
            />
          </div>
          <div class="input-container">
            <label for="name">Email</label>

            <input
              type="text"
              id="name"
              name="name"
              placeholder="Enter your email"
              class="input"
            />
          </div>
          <div class="input-container">
            <label for="name">Course</label>

            <input
              type="text"
              id="name"
              name="name"
              placeholder="Enter the course"
              class="input"
            />
          </div>
        </section>
        <footer class="modal-container-footer">
          <button class="button is-ghost" id="closeModal">Cancel</button>
          <button class="button is-primary" id="closeModal">Confirm</button>
        </footer>
      </article>
    </div>
 
    <script src="js/index.js"></script>
  </body>
</html>
