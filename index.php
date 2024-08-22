<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <div class="row">
            <?php
            include("./include/nav.php");
            ?>
            <div class="col-lg-6 mx-auto mt-5">
                <div class="card">
                    <h3 class="card-header text-center text-primary">Add Todo</h3>
                    <form action="./Controller/storeTodoController.php" method="POST" class="card-body">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Enter Todo Title">
                        <p class="text-danger"><?= $_SESSION["errors"]["title"] ?? "" ?></p>
                        <label for="detail" class="form-label">Detail</label>
                        <textarea class="form-control" type="text" name="detail" id="detail" placeholder="Enter Todo Detail"></textarea>
                        <p class="text-danger"><?= $_SESSION["errors"]["detail"] ?? "" ?></p>
                        <button class="btn btn-primary">Add Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
session_unset();
?>