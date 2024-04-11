<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Dashboard</title>
</head>
<body>
    <?php
    // Include the Database class
    require_once('/opt/lampp/htdocs/medicarecentre/config/db.php');

    // Get the database connection instance
    $db = Database::getInstance();
    // Get the PDO connection object
    $conn = $db->getConnection();

    // Fetch users
    $stmt = $conn->prepare("SELECT id, name, email, username, role FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="card flex-fill">
        <div class="card-header">
            <h5 class="card-title mb-0">Users</h5>
        </div>
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="d-none d-xl-table-cell">Email</th>
                    <th class="d-none d-xl-table-cell">Username</th>
                    <th>Role</th>
                    <th class="d-none d-md-table-cell">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['role']); ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" onclick="deleteUser(<?php echo $user['id']; ?>)" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        // Check for success or error query parameters
        if (isset($_GET['success'])) {
            echo '<script>alert("' . htmlspecialchars($_GET['success']) . '");</script>';
        } elseif (isset($_GET['error'])) {
            echo '<script>alert("' . htmlspecialchars($_GET['error']) . '");</script>';
        }
        ?>

    </div>
  <script>
          document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const successMessage = urlParams.get('success');
        if (successMessage) {
            alert(decodeURIComponent(successMessage));
            // Redirect to the email page to view the details of the deleted user
            window.location.href = 'email_page.php'; // Replace 'email_page.php' with the actual path to your email page
        }
    });
  </script>


</body>
</html>
