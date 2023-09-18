<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <?php include('includes/header.php'); ?>
</head>

<body>
    <main class="flex bg-primary bg-opacity-10 gap-0.5">
        <?php include('includes/sidebar.php'); ?>
        <div class="flex flex-col w-full">
            <?php include('includes/appbar.php'); ?>
            <div class="flex-grow p-6 overflow-y-auto">

                <h1 class="text-2xl font-semibold mb-4 text-primary">Dashboard</h1>
                <div class="grid grid-cols-4 gap-8 gap-y-4">
                    <div class="bg-white p-4 py-8 flex flex-col items-center">
                        <span class="text-3xl font-semibold">
                            <?php
                            $sql = "SELECT * FROM users where role='teacher'";
                            $result = mysqli_query($conn, $sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </span>
                        <p>Teachers</p>
                    </div>
                    <div class="bg-white p-4 py-8 flex flex-col items-center">
                        <span class="text-3xl font-semibold">
                            <?php
                            $sql = "SELECT * FROM users where role='student'";
                            $result = mysqli_query($conn, $sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </span>
                        <p>Students</p>
                    </div>
                    <div class="bg-white p-4 py-8 flex flex-col items-center">
                        <span class="text-3xl font-semibold">
                            <?php
                            $sql = "SELECT * FROM courses";
                            $result = mysqli_query($conn, $sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </span>
                        <p>Courses</p>
                    </div>
                    <div class="bg-white p-4 py-8 flex flex-col items-center">
                        <span class="text-3xl font-semibold">
                            <?php
                            $sql = "SELECT * FROM booked_sessions";
                            $result = mysqli_query($conn, $sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </span>
                        <p>Booked Sessions</p>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

</html>