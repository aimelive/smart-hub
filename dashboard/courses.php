<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses</title>
    <?php include('includes/header.php'); ?>
</head>

<body>
    <main class="flex bg-primary bg-opacity-10 gap-0.5">
        <?php include('includes/sidebar.php'); ?>
        <div class="flex flex-col w-full">
            <?php include('includes/appbar.php'); ?>
            <div class="flex-grow p-4 overflow-y-auto">
                <div class="bg-white p-6">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-semibold mb-4 text-primary">Available Courses</h1>
                        <a href="add-course.php" class="bg-primary px-6 py-2 text-white text-sm flex items-center gap-2"> <i class="fa fa-plus" aria-hidden="true"></i> <span>Add Course</span></a>
                    </div>

                    <table class="w-full text-left mt-2">
                        <thead>
                            <tr>
                                <th class="font-normal text-gray-600 m-2"> ID</th>
                                <th class="font-normal text-gray-600 py-3">&nbsp;&nbsp;Title</th>
                                <th class="font-normal text-gray-600 py-3">Code</th>
                                <th class="font-normal text-gray-600 py-3">Module</th>
                                <th class="font-normal text-gray-600 py-3">Teachers</th>
                                <th class="font-normal text-gray-600 py-3">Students</th>

                                <th class="font-normal text-gray-600 py-3">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM courses";
                            $result = mysqli_query($conn, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Generate HTML for each user
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $code = $row['code'];
                                    $module_name = $row['module_name'];
                                    $number_of_teachers = $row['number_of_teachers'];
                                    $number_of_students = $row['number_of_students'];
                                    $createdAt = $row['createdAt'];

                                    echo '
                                      <tr>
            <td>' . $id . '</td>
            <td>
                <p class="m-2">' . $title . '</p>
            </td>
            <td>' . $code . '</td>
            <td>' . $module_name . '</td>
            <td>' . $number_of_teachers . '</td>
            <td>' . $number_of_students . '</td>
            <td>' . $createdAt . '</td>
            <td>
                    <a href="delete-course.php?course_id=' . $id . '"
                        class="bg-red-600 text-white text-xs p-2 px-4 my-2">
                        DELETE
                    </a>
            </td>
        </tr>';
                                }
                            } else {
                                echo 'No courses found.';
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