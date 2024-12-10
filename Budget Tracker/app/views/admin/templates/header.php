<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_name ?></title>
    <link rel="stylesheet" href="<?= site_url('public/css/admin_style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Styling for the sidebar */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #ecf0f1;
            --accent-color: #3498db;
            --text-color: #333;
            --text-light: #ffffff;
            --border-color: #bdc3c7;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
            transition: var(--transition);
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 20px 0;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            overflow-y: auto;
            transition: var(--transition);
            z-index: 1000;
        }

        .sidebar.collapsed {
            width: 60px;
        }

        .sidebar-header {
            padding: 0 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-toggle {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
        }

        .sidebar h1 {
            font-size: 1.5rem;
            font-weight: 600;
            display: inline-block;
        }

        .sidebar nav ul {
            list-style: none;
            padding-left: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 15px;
        }

        .sidebar nav ul li a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--text-light);
            text-decoration: none;
            gap: 10px;
            transition: var(--transition);
        }

        .sidebar nav ul li a i {
            width: 20px;
            text-align: center;
        }

        .sidebar nav ul li a span {
            display: inline-block;
            padding-left: 10px;
        }

        .sidebar nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar.collapsed nav ul li a span {
            display: none;
        }

        /* Main Content */
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: var(--transition);
        }

        .sidebar.collapsed + .content {
            margin-left: 60px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
            }

            .sidebar.collapsed {
                width: 0;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <button class="sidebar-toggle" id="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Admin Panel</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="<?= site_url('admin') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                    <li><a href="<?= site_url('admin/users') ?>"><i class="fas fa-users"></i> <span>Users</span></a></li>
                    <li><a href="<?= site_url('admin/user-feedback') ?>"><i class="fas fa-comments"></i> <span>User Feedback</span></a></li>
                    <li><a href="<?= site_url('admin/categories') ?>"><i class="fas fa-th-list"></i> <span>Categories</span></a></li>
                    <li><a href="<?= site_url('admin/transactions') ?>"><i class="fas fa-credit-card"></i> <span>Transactions</span></a></li>
                    <li><a href="<?= site_url('admin/notifications') ?>"><i class="fas fa-bell"></i> <span>Notifications</span></a></li>
                    <li><a href="<?= site_url('admin/log-history') ?>"><i class="fas fa-history"></i> <span>Log History</span></a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Toggle Sidebar
        $(document).ready(function() {
            $('#sidebar-toggle').click(function() {
                $('.sidebar').toggleClass('collapsed');
                $('.sidebar h1').toggle(); // Hide the "Admin Panel" text
                $('aside nav ul li a span').toggle(); // Hide text in the list
            });
        });
    </script>
