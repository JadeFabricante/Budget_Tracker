<h2>Transactions</h2>
<table class="admin-table">
    <thead>
        <tr>
            <th>Transaction ID</th>
            <th>User</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['id'] ?></td>
                <td><?= $transaction['firstname'] . ' ' . $transaction['lastname'] ?></td>
                <td><?= $transaction['category_name'] ?></td>
                <td>$<?= number_format($transaction['amount'], 2) ?></td>
                <td><?= date('M d, Y H:i', strtotime($transaction['timestamp'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

