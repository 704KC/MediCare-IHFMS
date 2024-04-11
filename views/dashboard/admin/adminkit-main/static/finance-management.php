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
	<nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
      <span class="align-middle">Medicare Inc.</span>
	  <hr>
	  <span class="align-middle"><i class="fa-solid fa-coins"></i>Finance Management</span>
    </a>

            <ul class="sidebar-nav">
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="index.php">
                        <i class="fa-solid fa-gauge"></i><span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="financial_transactions.html">
                    <i class="fa-solid fa-coins"></i></i> <span class="align-middle">Financial Transactions</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="invoicing.html">
					<i class="fa-solid fa-file-invoice"></i><span class="align-middle">Invoicing</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="billing.html">
					<i class="fa-solid fa-money-bill"></i> <span class="align-middle">Billing</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="manage_users.html">
                    <i class="fa-solid fa-money-bill"></i>Payment Processing</a></li>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.php">
					<i class="fa-solid fa-chart-simple"></i><span class="align-middle">Reports</span>
                </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="finance-management.php">
					<i class="fa-solid fa-gears"></i><span class="align-middle">Settings</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="../../../views/dashboard/admin/accounts_reconciliation.html">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i><span class="align-middle">Logout</span>
        </a>
                </li>

        </div>
    </nav>>


		<div class="main">
		<?php include '../../../../pages/topbar.html'; ?>


			<main class="content">
				<div class="container-fluid">
				<p>Welcome, <?php echo $username; ?>!</p>
					
					<!-- Quick Actions -->

				
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