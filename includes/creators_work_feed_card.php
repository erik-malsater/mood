<?php

include_once '../classes/Database.php';
include_once '../classes/Post.php';

$db_connect = new Database();
$connection = $db_connect->connect();
$post = new Post($connection);
$fetched_posts = $post->fetchCreatorsWork($_GET['profile']);
foreach($fetched_posts as $single_post){
    ?>
            <a href="work.php?post=<?=$single_post['id']?>" aria-label="Go to page for this artwork">
                <div class="work_feed_art_frame">
                        <img src="<?=$single_post['image']?>" alt="<?=$single_post['name']?>">
                </div>
            </a>
    <?php
}

?>