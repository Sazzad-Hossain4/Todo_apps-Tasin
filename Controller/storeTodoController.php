<?php
session_start();
include("../database/env.php");

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
    header("Location: ../index.php");
} else {
    $query = "INSERT INTO todos(title, detail) VALUES('$title','$detail')";
    $store = mysqli_query($conn, $query);
    if ($store) {
        header("Location: ../include/allTodos.php");
    }
}