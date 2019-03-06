<?php

include_once '../classes/Database.php';
include_once '../classes/Post.php';

$db_connect = new Database();
$connection = $db_connect->connect();
$post = new Post($connection);
$fetched_post = $post->fetchSinglePost($_GET['post']);