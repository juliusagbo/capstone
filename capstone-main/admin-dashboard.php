<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - LoanEase</title>
    <link rel="stylesheet" href="admin-styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>LoanEase Admin</h2>
        <ul>
            <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li><i class="fas fa-file-alt"></i> Loan Applications</li>
            <li><i class="fas fa-users"></i> Users Management</li>
            <li><i class="fas fa-money-bill"></i> Transactions</li>
            <li><i class="fas fa-chart-line"></i> Reports & Analytics</li>
            <li><i class="fas fa-cog"></i> Settings</li>
            <li class="logout"><i class="fas fa-sign-out-alt"></i> Logout</li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header>
            <h1>Dashboard</h1>
            <div class="admin-info">
                <p>Welcome, Admin</p>
                <img src="profile.png" alt="Admin Profile">
            </div>
        </header>

        <section class="dashboard">
            <div class="card">
                <h3>Total Loans</h3>
                <p>1,245</p>
            </div>
            <div class="card">
                <h3>Pending Applications</h3>
                <p>32</p>
            </div>
            <div class="card">
                <h3>Total Revenue</h3>
                <p>$458,200</p>
            </div>
            <div class="card">
                <h3>Default Rate</h3>
                <p>5.2%</p>
            </div>
        </section>

        <section class="recent-activities">
            <h2>Recent Loan Applications</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>$5,000</td>
                    <td>Pending</td>
                    <td><button class="approve">Approve</button> <button class="reject">Reject</button></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>$3,200</td>
                    <td>Approved</td>
                    <td>-</td>
                </tr>
            </table>
        </section>
    </main>

</body>
</html>
