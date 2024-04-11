<?php

interface UserObserver {
    public function onUserCreated($user);
    public function onUserDeleted($user);
}

interface NotificationObserver {
    public function onNotificationSent($notification);
}



interface UserDeletionObserver {
    public function onUserDeleted($userId);
}
