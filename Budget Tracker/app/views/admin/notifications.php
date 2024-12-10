<h2>Notifications</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Message</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notifications as $notification): ?>
            <tr>
                <td><?= $notification['id'] ?></td>
                <td><?= $notification['firstname'] . ' ' . $notification['lastname'] ?></td>
                <td><?= $notification['message'] ?></td>
                <td><?= date('M d, Y H:i', strtotime($notification['timestamp'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

