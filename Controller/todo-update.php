<?php
session_start();
include("../database/env.php");

$id = $_REQUEST["id"];
$title = $_REQUEST["title"];
$detail = $_REQUEST["detail"];

$errors = [];

if (empty($title)) {
    $errors["title"] = "Title is empty";
}
if (empty($detail)) {
    $errors["detail"] = "Detail is empty";
}

if (count($errors) > 0) {
    $_SESSION["errors"] = $errors;
    header("Location: ../include/edit-todo.php?id=$id");
} else {
    $query = "UPDATE todos SET title='$title', detail='$detail' WHERE id='$id'";
    $store = mysqli_query($conn, $query);
    if ($store) {
        header("Location: ../include/allTodos.php");
    }
}