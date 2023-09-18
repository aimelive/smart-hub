<?php
include('includes/config.php');

$booked_session_id = $_GET['id'];

$query = "UPDATE booked_sessions SET status='accepted' WHERE id=" . $booked_session_id . "";

if (mysqli_query($conn, $query)) {
    header("location:courses.php");
} else {
    echo "Something went wrong " . mysqli_error($conn) . "<a href='courses.php'>Go Back</a>";
}
