<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Smart Hub - Online Tutoring Platform</title>
  <!-- <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"
    ></script> -->
</head>

<body>
  <!-- Top Navigation Bar -->
  <?php include('includes/navbar.php'); ?>
  <?php

  if (!$userDetails) {
    header('location:index.php');
  }

  ?>
  <section class="max-w-2xl mx-auto p-10 shadow my-10 rounded-lg">
    <h1 class="text-xl font-semibold">Profile</h1>
    <div>
      <table class="my-4 border-spacing-2 border-separate spacing-2">
        <tbody>
          <tr>
            <td class="font-semibold">Picture:</td>
            <td>

              <div class="w-14 h-14 bg-primary bg-opacity-50 text-white text-2xl font-bold rounded-full flex items-center justify-center">A</div>

            </td>
          </tr>
          <tr>
            <td class="font-semibold">Full name:</td>
            <td><?php echo $userDetails['fullName'] ?></td>
          </tr>
          <tr>
            <td class="font-semibold">Email:</td>
            <td><?php echo $userDetails['email'] ?></td>
          </tr>
          <tr>
            <td class="font-semibold">Role:</td>
            <td><?php echo $userDetails['role'] ?></td>
          </tr>
          <tr>
            <td class="font-semibold">Bio:</td>
            <td><?php echo $userDetails['bio'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex justify-end">
      <a href='logout.php' class='active bg-primary rounded-md text-white p-2 px-6 bg-opacity-80'>Log Out</a>
    </div>
  </section>
  <?php include('includes/footer.php'); ?>

</body>

</html>