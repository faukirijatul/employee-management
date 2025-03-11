<?php
    require_once "../config/database.php";

    $id = $_GET["id"];

    $sql = "delete from employees where id = :id";

    $statement = $pdo->prepare($sql);

    $statement->execute(['id' => $id]);

    header('Location: index.php');
    exit();
?>