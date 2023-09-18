<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>


    <title>Loading...</title>
</head>

<body>
    <!-- Top Navigation Bar -->
    <?php include('includes/navbar.php'); ?>
    <?php

    if (!$userDetails) {
        header('location:index.php');
    }


    include('includes/config.php');

    $teacher_id = $_GET['id'];
    $teacher_name = $_GET['name'];
    $duration = $_POST['duration'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    $course = $_POST['course'];
    $user_id = $userDetails['id'];
    $user_name = $userDetails['fullName'];

    $query = "INSERT INTO booked_sessions(user_id,user_name,teacher_id,teacher_name,duration,date,time,course,description) 
    VALUES('$user_id','$user_name','$teacher_id','$teacher_name','$duration','$date','$time','$course','$description')";

    if (mysqli_query($conn, $query)) {
        header("location:courses.php");
    } else {
        echo "Something went wrong " . mysqli_error($conn) . "<a href='add-course.php'>Go Back</a>";
    }

    ?>
</body>

</html>