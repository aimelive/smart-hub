<?php
include('../includes/config.php');

$course_id = $_GET['course_id'];

$query = "DELETE FROM courses WHERE id=" . $course_id . "";

if (mysqli_query($conn, $query)) {
    header("location:courses.php");
} else {
    echo "Something went wrong " . mysqli_error($conn) . "<a href='courses.php'>Go Back</a>";
}
