<?php
error_log("Request method: " . $_SERVER['REQUEST_METHOD']);

// Include the necessary classes
include '../database.php';
include 'UsersRepository.php';
include 'Email.php';
include 'User.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider hashing the password

    // Create a new user
    $user = new User($name, $email);

    // Get an instance of UsersRepository and Email classes
    $usersRepository = UsersRepository::getInstance();
    $emailSender = new Email();

    // Attach the Email class to UsersRepository observers' pool
    $usersRepository->attach($emailSender);

    // Add the new user and notify observers
    $usersRepository->createUser($user);
}

?>
