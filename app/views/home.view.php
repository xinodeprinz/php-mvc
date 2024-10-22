<div class="w-5/6 mx-auto my-10">
    <a href="/create" class="bg-orange-400 py-2 px-10 text-lg rounded">Add User</a>
    <table class="mt-10 w-full capitalize text-center">
        <thead class="text-white bg-black">
            <tr>
                <th class="p-3">#</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Phone</th>
                <th class="p-3">Created At</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $id => $user): ?>
                <tr class="bg-gray-100 even:bg-gray-300">
                    <td class="p-3"><?php echo $id + 1 ?></td>
                    <td class="p-3"><?php echo $user->name ?></td>
                    <td class="normal-case p-3"><?php echo $user->email ?></td>
                    <td class="p-3"><?php echo $user->phone ?></td>
                    <td class="p-3"><?php echo $user->created_at ?></td>
                    <td class="p-3 space-x-1">
                        <a href="/update/<?php echo $user->id ?>" class="underline text-blue-600">Update</a>
                        <a href="/delete/<?php echo $user->id ?>" class="underline text-red-600">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>