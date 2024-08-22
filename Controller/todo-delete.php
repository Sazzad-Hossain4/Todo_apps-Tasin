<?php
include("../database/env.php");

$id = $_REQUEST["id"];
$query = "DELETE FROM todos WHERE id='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: ../include/allTodos.php");
}