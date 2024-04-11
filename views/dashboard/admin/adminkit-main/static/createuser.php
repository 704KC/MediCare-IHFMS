<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your database connection script
require_once('/opt/lampp/htdocs/medicarecentre/config/db.php');

// Get the database connection instance
$db = Database::getInstance();
$conn = $db->getConnection();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  if (empty($username) || empty($email) || empty($password)) {
    $error_message = "All fields are required.";
  } else {
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement
    $sql = "INSERT INTO users (name,username, email,dob, password, role) VALUES (?,?,?, ?, ?, ?)";

    // Use PDO to prepare and execute the statement
    try {
      $stmt = $conn->prepare($sql);
      $stmt->execute([$name, $username, $email, $dob, $hashed_password, $role]);
      $success_message = "User created successfully.";
    } catch (PDOException $e) {
      $error_message = "Error creating user: " . $e->getMessage();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Users</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Create New User</h2>
    <form action="" method="post">
      <?php
      if (isset($error_message)) {
        echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
      } elseif (isset($success_message)) {
        echo '<div class="alert alert-success" role="alert">' . $success_message . '</div>';
      }
      ?>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="dob">DOB</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role">
          <option value="admin">Admin</option>
          <option value="doctor">Doctor</option>
          <option value="patient">Patient</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Create User</button>
    </form>
  </div>
  <script>
    <?php
    if (isset($success_message)) {
      echo "function hideAlert() {
        const alert = document.querySelector('.alert');
        alert.classList.add('d-none'); // Hide the alert using Bootstrap class
      }
      setTimeout(hideAlert, 3000); // Call hideAlert function after 3 seconds";
    }
    ?>
  </script>
</body>
</html>
