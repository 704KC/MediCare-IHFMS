<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: ../../login/login.html");
    exit;
}

$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <h1>Welcome, <?php echo ucfirst($role); ?>!</h1>
    <?php if ($role === 'admin'): ?>
        <nav>
            <ul>
                <li><a href="../../views/dashboard/admin/admin_dashboard.html">Admin Dashboard</a></li>
                <!-- Add links for admin functionalities -->
            </ul>
        </nav>
    <?php elseif ($role === 'doctor'): ?>
        <nav>
            <ul>
                <li><a href="../../views/dashboard/doctor/doctor_dashboard.html">Doctor Dashboard</a></li>
                <!-- Add links for doctor functionalities -->
            </ul>
        </nav>
    <?php elseif ($role === 'patient'): ?>
        <nav>
            <ul>
                <li><a href="../../views/dashboard/patient/patient_dashboard.html">Patient Dashboard</a></li>
                <!-- Add links for patient functionalities -->
            </ul>
        </nav>
    <?php endif; ?>
</body>
</html>
