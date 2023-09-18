<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Smart Hub - Online Tutoring Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-10 py-20 flex justify-center">

  <?php
  session_start();

  include('includes/config.php');

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email= '$email' and password= '$password'";

  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $fullName = $row['fullName'];
      $email = $row['email'];
      $role = $row['role'];
      $bio = $row['bio'];

      $_SESSION['user_details'][$id] = [
        'id' => $id,
        'fullName' => $fullName,
        'email' => $email,
        'role' => $role,
        'bio' => $bio,
      ];

      header("location:index.php");
    }
  } else {
    echo '<div class="bg-red-100 flex flex-col gap-2 p-4 px-10 rounded-lg items-center"><span>Invalid email address or password. Please try again later.</span> <a href="login.php" class="text-sm p-4 py-2 rounded-lg text-red-500 border border-red-500 font-semibold">Go Back</a></div>';
  }

  ?>
  <script src="js/index.js"></script>
</body>

</html>