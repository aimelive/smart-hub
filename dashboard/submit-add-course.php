<?php
include('../includes/config.php');

$title = $_POST['title'];
$code = $_POST['code'];
$module_name = $_POST['module_name'];

$query = "INSERT INTO courses(title,code,module_name) VALUES('$title','$code','$module_name')";

if (mysqli_query($conn, $query)) {
    header("location:courses.php");
} else {
    echo "Something went wrong " . mysqli_error($conn) . "<a href='add-course.php'>Go Back</a>";
}
