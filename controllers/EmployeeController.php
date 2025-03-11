<?php

    require_once "models/Employee.php";

    class EmployeeController {
        public function index() {
            $employees = Employee::all();
            require_once "views/employees/index.php";
        }
        public function create() {
            require_once "views/employees/create.php";
        }
        public function store() {
            Employee::create($_POST["name"], $_POST["address"], $_POST["salary"]); 
            header("Location: index.php");
        }
        public function edit($id) {
            $employee = Employee::find($id); 
            require_once "views/employees/update.php";
        }
        public function update($id) {
            Employee::update($id, $_POST["name"], $_POST["address"], $_POST["salary"]); 
            header("Location: index.php");
        }
        public function delete($id) {
            Employee::delete($id); 
            header("Location: index.php");
        }
    }

?>