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
            <div class="art_frame">
                <a href="views/work.php?post=<?=$single_post['id']?>"><img src="<?=$single_post['image']?>" 
                alt="<?=$single_post['name']?>"></a>
            </div>

            <h2><?=$single_post['name']?></h2>

            <p>By: <a class="creator_link" 
            href="views/profile.php?profile=<?=$single_post['creator_id']?>"><?=$single_post['creator_name']?></a></p>

        </div>
    <?php
}

?>


