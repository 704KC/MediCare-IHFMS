<?php

require_once('/opt/lampp/htdocs/medicarecentre/config/db.php');
require_once('/opt/lampp/htdocs/medicarecentre/controllers/patterns/behavioral/observer/admin_interfaces.php');
require_once('/opt/lampp/htdocs/medicarecentre/controllers/patterns/behavioral/observer/UserDeletionNotificationObserver.php');
// require_once 'controllers/patterns/behavioral/observer/UserDeletionSubject.php';
// require_once 'controllers/patterns/behavioral/observer/NotificationObserver.php';

$db = Database::getInstance();
// Get the PDO connection object
$conn = $db->getConnection();

// Create an instance of the UserDeletionSubject
// $userDeletionSubject = new UserDeletionSubject();
$userDeletionSubject->addObserver(new UserDeletionNotificationObserver());
$userDeletionSubject->notifyObservers($userId);
// Check if the user ID is provided
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Prepare an SQL statement
    $sql = "DELETE FROM users WHERE id = ?";

    // Use PDO to prepare and execute the statement
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$userId]);
        // Notify observers
        $userDeletionSubject->notifyObservers($userId);
        // Redirect back to the admin dashboard with a success message
        header("Location: admin_dashboard.php?success=User deleted successfully.");
        exit;
    } catch (PDOException $e) {
        // Redirect back to the admin dashboard with an error message
        header("Location: admin_dashboard.php?error=" . urlencode($e->getMessage()));
        exit;
    }
} else {
    // Redirect back to the admin dashboard with an error message if no user ID is provided
    header("Location: admin_dashboard.php?error=No user ID provided.");
    exit;
}
?>
