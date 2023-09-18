<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <?php include('includes/header.php'); ?>
</head>

<body>
    <main class="flex bg-primary bg-opacity-10 gap-0.5">
        <?php include('includes/sidebar.php'); ?>
        <div class="flex flex-col w-full">
            <?php include('includes/appbar.php'); ?>
            <div class="flex-grow p-4 overflow-y-auto">

                <div class="bg-white p-6">
                    <h1 class="text-2xl font-semibold mb-4 text-primary">Registered Users</h1>

                    <table class="w-full text-left mt-2">
                        <thead>
                            <tr>
                                <th class="font-normal text-gray-600 m-2"> ID</th>
                                <th class="font-normal text-gray-600 py-3">&nbsp;&nbsp;Name</th>
                                <th class="font-normal text-gray-600 py-3">Email</th>
                                <th class="font-normal text-gray-600 py-3">Bio</th>
                                <th class="font-normal text-gray-600 py-3">Role</th>
                                <th class="font-normal text-gray-600 py-3">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($conn, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Generate HTML for each user
                                    $id = $row['id'];
                                    $fullName = $row['fullName'];
                                    $email = $row['email'];
                                    $role = $row['role'];
                                    $bio = $row['bio'];
                                    $createdAt = $row['createdAt'];

                                    echo '
                                      <tr>
            <td>' . $id . '</td>
            <td>
                <p class="m-2">' . $fullName . '</p>
            </td>
            <td>' . $email . '</td>
            <td>' . substr($bio, 0, 10) . '...</td>
            <td><span class="text-xs bg-blue-50 p-1 px-3 rounded-full text-primary">' . $role . '</span></td>
            <td>' . $createdAt . '</td>
            <td>
                    <a href="delete-user.php?user_id=' . $id . '"
                        class="bg-red-600 text-white text-xs p-2 px-4 my-2">
                        DELETE
                    </a>
            </td>
        </tr>';
                                }
                            } else {
                                echo 'No users found.';
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