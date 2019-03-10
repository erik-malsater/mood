<?php

include_once 'classes/Database.php';
include_once 'classes/Post.php';

$db_connect = new Database();
$connection = $db_connect->connect();
$post = new Post($connection);
$fetched_posts = $post->fetchMainPageStartupPosts();
foreach($fetched_posts as $single_post){
    ?>
        <div class="post_card">
            <a href="views/work.php?post=<?=$single_post['id']?>" class="work_link">
                <div class="art_frame">
                    <img src="<?=$single_post['image']?>" alt="<?=$single_post['name']?>">
                </div>
            </a>

            <a href="views/work.php?post=<?=$single_post['id']?>" class="work_link">
                <h2><?=$single_post['name']?></h2>
            </a>

            <p>By: <a class="creator_link" 
            href="views/profile.php?profile=<?=$single_post['creator_id']?>"><?=$single_post['creator_name']?></a></p>

        </div>
    <?php
}

?>


