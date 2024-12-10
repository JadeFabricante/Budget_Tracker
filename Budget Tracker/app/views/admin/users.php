<h2>Users</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Registration Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['user_id'] ?></td>
                <td><?= $user['firstname'] . ' ' . $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['gender'] ?></td>
                <td><?= date('M d, Y', strtotime($user['created_at'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

