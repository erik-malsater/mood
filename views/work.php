<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../scripts/functions.js"></script>
        <title>Mood - A Way To Share Art</title>
    </head>
    <body>
        
        <?php
            include '../includes/fetch_single_post.php';
        ?>

        <!--<header id="dropdown_header">-->


        <?php

            include '../includes/dropdown_header.php';

        ?>


    <!-- </header>-->

        <main>

            <div class="profile_and_post_container">

                <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'">
                    <img src="../images/go_back_icon3.png" alt="">
                </button>

                <div class="post_card">
                    <div class="art_frame">
                        <img src="<?=$fetched_post['image']?>" alt="<?=$fetched_post['name']?>">
                    </div>
                    <h2><?=$fetched_post['name']?></h2>
                    <p>By: <a href="profile.php?profile=<?=$fetched_post['creator_id']?>"><?=$fetched_post['creator_name']?></a></p>
                    <p class="description_text"><?=$fetched_post['description']?></p>
                </div>

            </div>

        </main>

    </body>
</html>