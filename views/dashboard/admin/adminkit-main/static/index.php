<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="https://kit.fontawesome.com/90e163a4d2.js" crossorigin="anonymous"></script>


	<title>Admin Dashboard</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	<?php include '../../../../pages/sidebar.html'; ?>


		<div class="main">
		<?php include '../../../../pages/topbar.html'; ?>


			<main class="content">
				<div class="container-fluid">
				<p>Welcome, <?php echo $username; ?>!</p>
					<div class="row">
						<!-- Dashboard Overview -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Dashboard Overview</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="metric">
												<span class="icon"><i class="fa-solid fa-users"></i></span>
												<p>
													<span class="number"><?php echo $activeUsers; ?></span>
													<span class="title">Active Users</span>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="metric">
												<span class="icon"><i class="fa-solid fa-notes-medical"></i></span>
												<p>
													<span class="number"><?php echo $totalHealthRecords; ?></span>
													<span class="title">Total Health Records</span>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="metric">
												<span class="icon"><i class="fa-solid fa-coins"></i></span>
												<p>
													<span class="number"><?php echo $financialTransactions; ?></span>
													<span class="title">Financial Transactions Processed</span>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="metric">
												<span class="icon"><i class="fa-solid fa-envelope"></i></span>
												<p>
													<span class="number"><?php echo $messagesSent; ?> / <?php echo $messagesReceived; ?></span>
													<span class="title">Messages Sent/Received</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			
						<!-- transactions -->
						<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Monthly Transactions</h3>
						</div>
						<div class="card-body">
							<canvas id="monthlyTransactionsChart"></canvas>
						</div>
					</div>
				</div>
				</div>
					<!-- Quick Actions -->

				<div class="row">
					<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Quick Actions</h3>
								</div>
								<div class="card-body">
									<a href="../../../views/dashboard/admin/manage_users.html" class="btn btn-primary">Manage Users</a>
									<a href="../../../views/dashboard/admin/manage_health_records.html" class="btn btn-primary">Manage Health Records</a>
									<a href="finance_management.php" class="btn btn-primary">Finance Management</a>
									<a href="../../../views/dashboard/admin/accounts_reconciliation.html" class="btn btn-primary">Accounts Management</a>
									<a href="../../../views/dashboard/admin/system_statistics.html" class="btn btn-primary">System Statistics</a>
								</div>
							</div>
						</div>
						<!-- phamacies -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Different Pharmacies</h3>
								</div>
								<div class="card-body">
									<canvas id="pharmaciesChart"></canvas>
								</div>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
						<?php include 'admin_dashboard_data.php'; ?>

						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Monthly Sales</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
										<canvas id="chartjs-dashboard-bar" width="651" height="350" style="display: block; width: 651px; height: 350px;" class="chartjs-render-monitor"></canvas>
									</div>
								</div>
							</div>
						</div>
				</div>
				</div>
			</main>
			

			
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
// Line Graph for Monthly Transactions
const monthlyTransactionsCtx = document.getElementById('monthlyTransactionsChart').getContext('2d');
const monthlyTransactionsChart = new Chart(monthlyTransactionsCtx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Monthly Transactions',
            data: [12, 19, 3, 5, 2, 3, 7], // Example data
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Bar Graph for Different Pharmacies
const pharmaciesCtx = document.getElementById('pharmaciesChart').getContext('2d');
const pharmaciesChart = new Chart(pharmaciesCtx, {
    type: 'bar',
    data: {
        labels: ['Mbarara', 'Jinja', 'Mbale', , 'Kampala'],
        datasets: [{
            label: 'Districts',
            data: [10, 15, , 12, 18], // Example data
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>

</html>