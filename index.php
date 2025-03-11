<?php

require_once "config/database.php";
require_once "controllers/EmployeeController.php";

$employeeController = new EmployeeController();

if (isset($_GET["action"])) {
    if ($_GET["action"] == "create") {
        $employeeController->create();
    } elseif ($_GET["action"] == "store") {
        $employeeController->store();
    } elseif ($_GET["action"] == "edit") {
        $employeeController->edit($_GET["id"]);
    } elseif ($_GET["action"] == "update") {
        $employeeController->update($_GET["id"]);
    } elseif ($_GET["action"] == "delete") {
        $employeeController->delete($_GET["id"]);
    }
} else {
    $employeeController->index();
}

?>