<h2>Categories</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>Category ID</th>
            <th>User</th>
            <th>Category Name</th>
            <th>Total Budget</th>
            <th>Remaining Budget</th>
            <th>Savings Goal</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['firstname'] . ' ' . $category['lastname'] ?></td>
                <td><?= $category['category_name'] ?></td>
                <td>$<?= number_format($category['total_budget'], 2) ?></td>
                <td>$<?= number_format($category['remaining_budget'], 2) ?></td>
                <td>$<?= number_format($category['savings_goal'], 2) ?></td>
                <td><?= date('M d, Y', strtotime($category['created_at'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

