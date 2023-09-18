<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>


    <title>Book Teacher</title>
    <style>
        .login-section {
            margin: 20px;
            width: 45%;
            margin: 40px auto;
            border: 2px solid #eee;
            padding: 40px;
            border-radius: 4px;
        }
    </style>
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
    <section class="login-section" id="login">
        <div class="login-container">
            <h2 class="text-2xl text-primary font-semibold">Book Teacher</h2>
            <h2 class="text-primary">
                <?php
                echo $_GET['name'];
                $formAction = "submit-book-teacher.php?id=" . $_GET['id'] . "&name=" . $_GET['name'];
                ?>
            </h2>
            <form method="post" action=<?php echo $formAction ?> name="book-teacher" class="flex flex-col gap-4 mt-4">
                <div class="flex flex-col gap-2">
                    <label for="course">Course</label>
                    <select id="course" name="course" class="bg-blue-50 resize-none p-4 py-3" required="true">

                        <?php
                        include('includes/config.php');
                        $sql = "SELECT * FROM courses";
                        $result = mysqli_query($conn, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $code = $row['code'];

                                echo '<option value=' .  $title . ' (' . $code . ')' . '>' . $title . ' (' . $code . ')' . '</option>';
                            }
                        } else {
                        }
                        ?>
                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="duration">Choose session duration?</label>
                    <select id="duration" name="duration" class="bg-blue-50 resize-none p-4 py-3" required="true">
                        <option value="15">15 Minutes</option>
                        <option value="30">30 Minutes</option>
                        <option value="40">40 Minutes</option>
                        <option value="45">45 Minutes</option>
                        <option value="60">1 Hour</option>
                        <option value="120">2 Hours</option>
                        <option value="180">3 Hours</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" class="bg-blue-50 resize-none p-4 py-3" required="true">
                        </input>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="time">Time</label>
                        <input type="time" id="time" name="time" class="bg-blue-50 resize-none p-4 py-3">
                        </input>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="description">What are you looking for?</label>
                    <textarea id="description" name="description" placeholder="Describe what do you want to know from this teacher?" class="bg-blue-50 resize-none p-4 py-3" rows="5" required="true"></textarea>
                </div>
                <div class="pt-4">
                    <button class="bg-primary p-2 text-white text-sm px-8">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>

</html>