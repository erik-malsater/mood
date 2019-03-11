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

    <header id="tablet_profile_and_post_page_header">

        <h1>Mood</h1>

        <form action="views/search.php" method="post" id="header_search_form">

            <input type="text" name="search" id="header_search_form_field" class="header_search_form_field" placeholder="Search for works and artists">

            <button type="submit" id="header_search_form_button" class="header_search_form_button" form="header_search_form" value="submit">
                <img src="../images/search_icon2.png" alt="">
            </button>

        </form>

        <button id="header_link_to_about_us" onclick="location.href='views/about_us.php'" 
        type="button">What is Mood?</button>

    </header>

    <body>
        
        <?php
            include '../includes/fetch_single_post.php';
        ?>


        <?php

            include '../includes/other_pages_dropdown_menu.php';

        ?>


        <main class="profile_and_post_container">


            <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'">
                <img src="../images/go_back_icon3.png" alt="">
            </button>

            <div class="post_card" id="work_card">
                
                <div class="art_frame" id="work_page_art_frame">
                    <img src="<?=$fetched_post['image']?>" alt="<?=$fetched_post['name']?>">
                </div>

                <div class="tablet_flex_box">
                    <h2><?=$fetched_post['name']?></h2>
                    <p>By: <a href="profile.php?profile=<?=$fetched_post['creator_id']?>"><?=$fetched_post['creator_name']?></a></p>
                    <p class="description_text work_description"><?=$fetched_post['description']?></p>
                </div>
            </div>


        </main>

    </body>
</html>