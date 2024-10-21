<div class="container">
    <a href="/create" class="add-user">Add User</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $id => $user): ?>
                <tr>
                    <td><?php echo $id + 1 ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td class="normal-case"><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $user['created_at'] ?></td>
                    <td>
                        <a href="/update/<?php echo $user['id'] ?>">Update</a>
                        <a href="/delete/<?php echo $user['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>