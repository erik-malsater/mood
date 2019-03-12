<?php

if (isset($validated_input)) {
    include_once '../classes/Database.php';
    include_once '../classes/Post.php';
    include_once '../classes/Profile.php';

    $db_connect = new Database();
    $connection = $db_connect->connect();
    $post = new Post($connection);
    $fetched_posts = $post->fetchWorkFromSearch($validated_input);
    $profile = new Profile($connection);
    $fetched_profiles = $profile->fetchPorfilesFromSearch($validated_input);

    if (count($fetched_posts) > 0) {
        ?> 
            <h2 class="feed_header">Works:</h2>
        <?php
    }

    foreach ($fetched_posts as $single_post) {
        ?>
            <div class="post_card">
                <div class="art_frame">
                    <a href="work.php?post=<?=$single_post['id']?>" aria-label="Go to page for this artwork">
                    <img src="<?=$single_post['image']?>" alt="<?=$single_post['name']?>">
                    </a>
                </div>

                <h2><?=$single_post['name']?></h2>

                <p>By: <a class="creator_link" aria-label="Go to page for this creator"
                href="profile.php?profile=<?=$single_post['creator_id']?>"><?=$single_post['creator_name']?></a></p>

            </div>
        <?php
    }

    if (count($fetched_profiles) > 0) {
        ?> 
            <h2 class="feed_header">Creators:</h2>
        <?php
    }

    foreach ($fetched_profiles as $single_profile) {
        ?>
            <div class="post_card">
                <a href="profile.php?profile=<?=$single_profile['id']?>" aria-label="Go to page for this creator">
                    <div class="art_frame">
                        <img src="<?=$single_profile['profile_picture']?>" alt="<?=$single_profile['name']?>">
                    </div>
                </a>

                <a href="profile.php?profile=<?=$single_profile['id']?>" aria-label="Go to page for this creator">
                    <h2><?=$single_profile['name']?></h2>
                </a>

            </div>
        <?php
    }

}
    ?>