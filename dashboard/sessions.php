<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sessions</title>
    <?php include('includes/header.php'); ?>
</head>

<body>
    <main class="flex bg-primary bg-opacity-10 gap-0.5">
        <?php include('includes/sidebar.php'); ?>
        <div class="flex flex-col w-full">
            <?php include('includes/appbar.php'); ?>
            <div class="flex-grow p-4 overflow-y-auto">
                <div class="bg-white p-6">
                    <h1 class="text-2xl font-semibold mb-4 text-primary">Booked Sessions</h1>



                    <table class="w-full text-left mt-2">
                        <thead>
                            <tr>
                                <th class="font-normal text-gray-600 m-2"> ID</th>
                                <th class="font-normal text-gray-600 py-3">&nbsp;&nbsp;Student</th>
                                <th class="font-normal text-gray-600 py-3">Teacher</th>
                                <th class="font-normal text-gray-600 py-3">Course</th>
                                <th class="font-normal text-gray-600 py-3">Duration</th>
                                <th class="font-normal text-gray-600 py-3">Date & Time</th>
                                <th class="font-normal text-gray-600 py-3">Status</th>
                                <th class="font-normal text-gray-600 py-3">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM booked_sessions";
                            $result = mysqli_query($conn, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $user_name = $row['user_name'];
                                    $teacher_name = $row['teacher_name'];
                                    $duration = $row['duration'];
                                    $date = $row['date'];
                                    $time = $row['time'];
                                    $status = $row['status'];
                                    $course = $row['course'];
                                    $createdAt = $row['createdAt'];

                                    echo '
                                      <tr>
            <td>' . $id . '</td>
            <td>
                <p class="m-2">' . $user_name . '</p>
            </td>
            <td>' . $teacher_name . '</td>
            <td>' . $course . '</td>
            <td>' . $duration . '</td>
            <td>' . $date . '<br/><span class="text-sm">' . $time . '</span></td>
            <td> <span class="text-xs bg-blue-50 p-1 px-3 rounded-full text-primary">' . $status . '</span></td>
            <td>' . $createdAt . '</td>
            <td>
                    <a href="../delete-session.php?id=' . $id . '&admin=true"
                        class="bg-red-600 text-white text-xs p-2 px-4 my-2">
                        DELETE
                    </a>
            </td>
        </tr>';
                                }
                            } else {
                                echo 'No sessions found.';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>