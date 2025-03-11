
<?php include "views/includes/header.php"; ?>

<h1 class="text-2xl mb-4">Create Employee</h1>

<form action="index.php?action=store" method="POST">
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

<?php include "views/includes/footer.php"; ?>