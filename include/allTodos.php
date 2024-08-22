<?php
include("../database/env.php");
$query = "SELECT * FROM todos";
$res = mysqli_query($conn, $query);
$todos = mysqli_fetch_all($res, 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <div class="row">
            <?php
            include("./nav.php");
            ?>
            <div class="col-lg-6 mx-auto mt-5">
                <table class="table table-responsive border">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($todos as $key => $todo) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $todo["title"] ? $todo["title"] : "" ?></td>
                            <td><?= $todo["detail"] ? $todo["detail"] : "" ?></td>
                            <td>
                                <a class="btn btn-primary ml-2" href="edit-todo.php?id=<?= $todo["id"] ?>">Edit</a>
                                <a class="btn btn-danger" href="../Controller/todo-delete.php?id=<?= $todo["id"] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>

</html>