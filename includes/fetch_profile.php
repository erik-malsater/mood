<?php

include_once '../classes/Database.php';
include_once '../classes/Profile.php';

$db_connect = new Database();
$connection = $db_connect->connect();
$profile = new Profile($connection);
$fetched_profile = $profile->fetchProfile($_GET['profile']);