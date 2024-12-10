<h2>Log History</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>Log ID</th>
            <th>User</th>
            <th>Login Time</th>
            <th>Logout Time</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($log_history as $log): ?>
            <tr>
                <td><?= $log['log_id'] ?></td>
                <td><?= $log['firstname'] . ' ' . $log['lastname'] ?></td>
                <td><?= date('M d, Y H:i', strtotime($log['login_time'])) ?></td>
                <td><?= $log['logout_time'] ? date('M d, Y H:i', strtotime($log['logout_time'])) : 'N/A' ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

