<h2>User Feedback</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>Feedback ID</th>
            <th>User</th>
            <th>Feedback</th>
            <th>Rating</th>
            <th>Submitted At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($feedback as $item): ?>
            <tr>
                <td><?= $item['feedback_id'] ?></td>
                <td><?= $item['firstname'] . ' ' . $item['lastname'] ?></td>
                <td><?= $item['feedback_text'] ?></td>
                <td><?= $item['rating'] ?></td>
                <td><?= date('M d, Y H:i', strtotime($item['submitted_at'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

