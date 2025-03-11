
<?php include "views/includes/header.php"; ?>


<a href="index.php?action=create" class="bg-blue-500 hover:bg-blue-800 text-white px-2 py-1 rounded mb-5 inline-block">Add New</a>

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
                    Rp <?= number_format($employee["salary"], 0, ',', '.') ?>
                </td>
                <td class="border px-4 py-2 flex gap-4">
                    <a class="bg-yellow-500 hover:bg-yellow-800 text-white px-2 py-1 rounded" href="index.php?action=edit&id=<?= $employee["id"] ?>">Edit</a>
                    <a class="bg-red-500 hover:bg-red-800 text-white px-2 py-1 rounded" href="index.php?action=delete&id=<?= $employee["id"] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "views/includes/footer.php"; ?>