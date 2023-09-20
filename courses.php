<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
    <title>My Courses</title>
</head>

<body>
    <!-- Top Navigation Bar -->
    <?php include('includes/navbar.php'); ?>
    <?php

    if (!$userDetails) {
        header('location:index.php');
    }
    ?>
    <!-- Login form section -->
    <div class="max-w-6xl mx-auto py-4 mb-5">
        <h1 class="text-2xl font-semibold">My Booked Sessions</h1>
        <div class="grid grid-cols-3 gap-8 mt-4">
            <?php
            include('includes/config.php');
            $sql = "SELECT * FROM booked_sessions where user_id ='" . $userDetails['id'] . "' OR teacher_id ='" . $userDetails['id'] . "'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $course = $row['course'];
                    $teacher_name = $row['teacher_name'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $description = $row['description'];
                    $status = $row['status'];
                    $duration = $row['duration'];


                    $actions = $userDetails["role"] == 'student' ? ' <a href="delete-session.php?id=' . $id . '" class="bg-red-600 text-white px-6 py-2">Withdraw</a>' : ' <a href="delete-session.php?id=' . $id . '" class="bg-red-600 text-white px-6 py-2">Decline</a>
                 <a href="accept-session.php?id=' . $id . '" class="bg-primary text-white px-6 py-2">Accept</a>';
                    if ($status !== 'pending') {
                        $actions = '<a href="https://meet.google.com/umt-waed-gwd" target="_blank" class="bg-primary text-white px-6 py-2">Join Session</a>';
                    }
                    echo '<div class="shadow p-8 rounded-lg relative">
                    <div class="bg-primary bg-opacity-50 text-white absolute text-xs top-0 right-0 px-4 p-1 rounded-full rounded-br-none">' . strtoupper($status) . '</div>
                <div class="flex flex-col gap-2 mb-3">
                    <p class="text-lg font-semibold">' . $course . '</p>
                    <p>Teacher: ' . $teacher_name . '</p>
                    <p>Date: ' . date('j F Y', strtotime($date)) . '&nbsp; at &nbsp;' . $time . ' </p>
                     <p>Duration: ' . $duration . ' minutes </p>
                <div class="py-2">
                    <p class="bg-blue-50 p-3 text-sm">' . $description . '</p></div>
                </div>
                <div class="grid grid-cols-2 items-center gap-4 text-center">
                ' . $actions . '
                </div>
            </div>';
                }
            } else {
                echo '<div>There are no sessions booked so far. please go to home page to book your teacher.</div>';
            }
            ?>


        </div>

    </div>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>

</html>