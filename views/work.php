<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" href="../images/favicon.png" type="image/png">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../js/functions.js"></script>
        <?php
            include '../includes/fetch_single_post.php';
            include '../includes/other_pages_dropdown_menu.php';
        ?>
        <title>Mood - <?=$fetched_post['name']?></title>
    </head>

    <header id="tablet_profile_and_post_page_header">

        <a href="../index.php" aria-label="Go to start page">
            <h1>Mood</h1>
        </a>

        <form action="search.php" method="post" id="header_search_form">

            <input type="text" name="search" id="header_search_form_field" class="header_search_form_field" placeholder="Search for works and creators">

            <button type="submit" id="header_search_form_button" class="header_search_form_button" form="header_search_form" value="submit" aria-label="Search">
                <img src="../images/search_icon2.png" alt="Search icon">
            </button>

        </form>

        <button id="header_link_to_about_us" onclick="location.href='about_us.php'" 
        type="button" aria-label="Go to about us page">What is Mood?</button>

    </header>

    <body>

        <main class="profile_and_post_container">


            <div class="go_back_button_tablet_flex_parent">

                <div class="go_back_button_tablet_flex_box">
                    <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'" aria-label="Go back to previous page">
                        <img src="../images/go_back_icon3.png" alt="Go back button icon">
                    </button>
                </div>

                <div class="go_back_button_tablet_flex_sibling"></div>

            </div>

            <div class="post_card" id="work_card">
                
                <div class="art_frame" id="work_page_art_frame">
                    <img src="<?=$fetched_post['image']?>" alt="<?=$fetched_post['name']?>">
                </div>

                <div class="tablet_flex_box">
                    <h2><?=$fetched_post['name']?></h2>
                    <p>By: <a href="profile.php?profile=<?=$fetched_post['creator_id']?>" aria-label="Go to page for this creator"><?=$fetched_post['creator_name']?></a></p>
                    <p class="description_text work_description"><?=$fetched_post['description']?></p>
                </div>
            </div>


        </main>

    </body>
</html>