<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 1rem;
        }

        .stat-card {
            background: #fff;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            flex: 1 1 calc(25% - 1rem);
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .stat-card h3 {
            margin-bottom: 0.5rem;
            color: #333;
        }

        .stat-card p {
            font-size: 1.5rem;
            color: #007BFF;
        }

        .chart-container {
            padding: 1rem;
        }

        table.admin-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table.admin-table th,
        table.admin-table td {
            padding: 0.75rem;
            border: 1px solid #ddd;
            text-align: center;
        }

        table.admin-table th {
            background-color: #007BFF;
            color: #fff;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: #fff;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<header>
    <h1>Admin Dashboard</h1>
</header>

<main>
    <h2 style="text-align: center; margin-top: 1rem;">Dashboard Overview</h2>
    <div class="dashboard-stats">
        <div class="stat-card">
            <h3>Total Users</h3>
            <p><?= $user_count ?></p>
        </div>
        <div class="stat-card">
            <h3>Total Categories</h3>
            <p><?= $category_count ?></p>
        </div>
        <div class="stat-card">
            <h3>Total Transactions</h3>
            <p><?= $transaction_count ?></p>
        </div>
        <div class="stat-card">
            <h3>Total Budget</h3>
            <p>$<?= number_format($total_budget, 2) ?></p>
        </div>
    </div>

    <div class="chart-container">
        <h3 style="text-align: center;">Category Budget Distribution</h3>
        <canvas id="categoryChart"></canvas>
    </div>

    <h3 style="text-align: center; margin-top: 2rem;">Recent Transactions</h3>
    <table class="admin-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recent_transactions as $transaction): ?>
                <tr>
                    <td><?= htmlspecialchars($transaction['firstname'] . ' ' . $transaction['lastname']) ?></td>
                    <td><?= htmlspecialchars($transaction['category_name']) ?></td>
                    <td>$<?= number_format($transaction['amount'], 2) ?></td>
                    <td><?= date('M d, Y', strtotime($transaction['timestamp'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2024 Your Company. All rights reserved.</p>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    const categoryData = <?= json_encode($category_totals) ?>;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categoryData.map(item => item.category_name),
            datasets: [{
                label: 'Total Budget',
                data: categoryData.map(item => item.total),
                backgroundColor: 'rgba(75, 192, 192, 0.8)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                }
            }
        }
    });
});
</script>

</body>
</html>
