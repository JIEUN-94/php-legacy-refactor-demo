<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';

$userModel = new User($pdo);
$users = $userModel->all();

include __DIR__ . '/../views/user_list.php';
?>