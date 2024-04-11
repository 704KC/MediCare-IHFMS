<?php

// Start session
session_start();

// Define the base URL for your application
define('BASE_URL', 'http://localhost/IHFMS/');

// Define the paths for different pages
$paths = [
    'login' => 'views/login/login.html',
    'dashboard' => 'views/dashboard/dashboard.php',
    'admin_dashboard' => 'views/dashboard/admin/admin_dashboard.html',
    'doctor_dashboard' => 'views/dashboard/doctor/doctor_dashboard.html',
    'patient_dashboard' => 'views/dashboard/patient/patient_dashboard.html',
    // Add more paths as needed
];

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Remove the base URL from the request URI
$requestUri = str_replace(BASE_URL, '', $requestUri);

// Check if the request URI matches any of the defined paths
if (array_key_exists($requestUri, $paths)) {
    // Include the corresponding file
    include $paths[$requestUri];
} else {
    // Default to the login page if no match is found
    include $paths['login'];
}
