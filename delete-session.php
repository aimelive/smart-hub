<?php
include('includes/config.php');

$booked_session_id = $_GET['id'];
$isAdmin = $_GET['admin'];

$query = "DELETE FROM booked_sessions WHERE id=" . $booked_session_id . "";

if (mysqli_query($conn, $query)) {
    if ($isAdmin === "true") {
        header("location:dashboard/courses.php");
    } else {
        header("location:courses.php");
    }
} else {
    echo "Something went wrong " . mysqli_error($conn) . "<a href='courses.php'>Go Back</a>";
}
