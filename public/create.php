<?php
    require_once "../config/database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $address = htmlspecialchars($_POST["address"]);
        $salary = htmlspecialchars($_POST["salary"]);

        // insert to database

        $sql = "insert into employees (name, address, salary) values (:name, :address, :salary)";

        $statement = $pdo->prepare($sql);

        $statement->execute(['name' => $name, 'address' => $address, 'salary' => $salary]);

        header('Location: index.php');
        exit();
    }

?>

<?php include "../includes/header.php"; ?>

<h1 class="text-2xl mb-4">Create Employee</h1>

<form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>

    <div class="mb-4">
        <label for="address" class="block text-gray-700">Address</label>
        <input type="text" name="address" id="address" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>

    <div class="mb-4">
        <label for="salary" class="block text-gray-700">Salary</label>
        <input type="text" name="salary" id="salary" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
</form>

<?php include "../includes/footer.php"; ?>