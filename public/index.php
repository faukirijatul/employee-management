<?php
    require_once "../config/database.php";

    $sql = "select * from employees";

    $statement = $pdo->query($sql);

    $employees = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include "../includes/header.php"; ?>


<a href="create.php" class="bg-blue-500 hover:bg-blue-800 text-white px-2 py-1 rounded mb-5 inline-block">Add New</a>

<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 px-4 py-2">Name</th>
            <th class="w-1/3 px-4 py-2">Address</th>
            <th class="w-1/3 px-4 py-2">Salary</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody class="text-gray-700">
        <?php foreach($employees as $employee): ?>
            <tr>
                <td class="border px-4 py-2">
                    <?= $employee["name"] ?>
                </td>
                <td class="border px-4 py-2">
                    <?= $employee["address"] ?>
                </td>
                <td class="border px-4 py-2">
                    <?= $employee["salary"] ?>
                </td>
                <td class="border px-4 py-2 flex gap-4">
                    <a class="bg-yellow-500 hover:bg-yellow-800 text-white px-2 py-1 rounded" href="update.php?id=<?= $employee["id"] ?>">Edit</a>
                    <a class="bg-red-500 hover:bg-red-800 text-white px-2 py-1 rounded" href="delete.php?id=<?= $employee["id"] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "../includes/footer.php"; ?>