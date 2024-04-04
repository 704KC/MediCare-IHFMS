<?php
class UsersRepository implements SplSubject
{
    private $connection;
    private $observers;
    private $users = [];
    private static $instance;

    private function __construct($connection)
    {
        $this->connection = $connection;
        $this->observers = new \SplObjectStorage;
    }

    private function __clone() {}

    public static function getInstance($connection)
    {
        if (!isset(self::$instance)) {
            self::$instance = new UsersRepository($connection);
        }
        return self::$instance;
    }

    // Method to add a user to the database
    public function addUserToDatabase(User $user)
    {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->connection->prepare($sql);
    
        // Hash the password before storing it
        $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
    
        $stmt->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => $hashedPassword,
        ]);
    }
    

    // Implement the required methods from SplSubject
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
?>
