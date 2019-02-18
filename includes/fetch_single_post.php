<?php

include '../classes/Database.php';
include '../classes/Post.php';

$db_connect = new Database();
$connection = $db_connect->connect();
$post = new Post($connection);
$fetched_post = $post->fetchSinglePost($_GET['post']);