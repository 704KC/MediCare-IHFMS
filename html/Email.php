<?php
class Email implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        // Here you can implement the logic to send an email
        // For example, you can access the last user added to the repository
        $lastUser = end($subject->users);
        echo "A new user has been created: " . $lastUser->getName() . "\n";
    }
}

?>