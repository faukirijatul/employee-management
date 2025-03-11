<?php

    class Employee {
        public static function all() {
            global $pdo;
            $sql = "select * from employees";
            $statement = $pdo->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function find($id) {
            global $pdo;
            $sql = "select * from employees where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute(['id' => $id]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        public static function create($name, $address, $salary) {
            global $pdo;
            $sql = "insert into employees (name, address, salary) values (:name, :address, :salary)";
            $statement = $pdo->prepare($sql);
            $statement->execute(['name' => $name, 'address' => $address, 'salary' => $salary]);
        }

        public static function update($id, $name, $address, $salary) {
            global $pdo;
            $sql = "update employees set name = :name, address = :address, salary = :salary where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute(['name' => $name, 'address' => $address, 'salary' => $salary, 'id' => $id]);
        }

        public static function delete($id) {
            global $pdo;
            $sql = "delete from employees where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute(['id' => $id]);
        }
    }

?>