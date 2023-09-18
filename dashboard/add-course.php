<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Course</title>
    <?php include('includes/header.php'); ?>
</head>

<body>
    <main class="flex bg-primary bg-opacity-10 gap-0.5">
        <?php include('includes/sidebar.php'); ?>
        <div class="flex flex-col w-full">
            <?php include('includes/appbar.php'); ?>
            <div class="flex-grow p-6 overflow-y-auto">

                <div class="bg-white p-12 px-8 w-1/2 mx-auto mt-5">
                    <h1 class="text-2xl font-semibold mb-4 text-primary">Add New Course</h1>
                    <form method="post" action="submit-add-course.php" class="flex flex-col gap-4 mt-4">

                        <div class="flex flex-col gap-2">
                            <label for="title">Course Title</label>
                            <input type="text" id="title" name="title" class="bg-blue-50 resize-none p-4 py-3" required="true" placeholder="Enter the course name title, ex: Mathematics for Engineers I">
                            </input>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="code">Code</label>
                            <input type="text" id="code" name="code" class="bg-blue-50 resize-none p-4 py-3" required="true" placeholder="Enter the course code, ex: MATH234I">
                            </input>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="module_name">Module</label>
                            <input type="text" id="module_name" name="module_name" class="bg-blue-50 resize-none p-4 py-3" required="true" placeholder="Enter the course module">
                            </input>
                        </div>
                        <div class="pt-4">
                            <button class="bg-primary p-2 text-white text-sm px-8">SUBMIT</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>