<?php
$conn = mysqli_connect("localhost", "root", "", "smart-hub");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
