<?php
include('../includes/config.php');

$user_id = $_GET['user_id'];

$query = "DELETE FROM users WHERE id=" . $user_id . "";

if (mysqli_query($conn, $query)) {
    header("location:users.php");
} else {
    echo "Something went wrong " . mysqli_error($conn) . "<a href='users.php'>Go Back</a>";
}
