<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../js/functions.js"></script>
        <title>Mood - A Way To Share Art</title>
    </head>

    <body>

        <?php
            include '../includes/fetch_profile.php';
        ?>

        <?php
            include '../includes/other_pages_dropdown_menu.php';
        ?>

        <header id="tablet_profile_and_post_page_header">

            <a href="../index.php">
                <h1>Mood</h1>
            </a>

            <form action="search.php" method="post" id="header_search_form">

                <input type="text" name="search" id="header_search_form_field" class="header_search_form_field" placeholder="Search for works and creators">

                <button type="submit" id="header_search_form_button" class="header_search_form_button" form="header_search_form" value="submit">
                    <img src="../images/search_icon2.png" alt="">
                </button>

            </form>

            <button id="header_link_to_about_us" onclick="location.href='about_us.php'" 
            type="button">What is Mood?</button>

        </header>

        <main id="profile_container">

            <div class="profile_and_post_container">

                <div class="go_back_button_tablet_flex_parent">

                    <div class="go_back_button_tablet_flex_box">
                        <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'">
                            <img src="../images/go_back_icon3.png" alt="">
                        </button>
                    </div>

                    <div class="go_back_button_tablet_flex_sibling"></div>

                </div>

                <div class="post_card" id="solo_card">
                    <div class="art_frame">
                        <img src="<?=$fetched_profile['profile_picture']?>" alt="<?=$fetched_profile['name']?>">
                    </div>
                    <h2 class="profile_name_header"><?=$fetched_profile['name']?></h2>
                    <p class="description_text"><?=$fetched_profile['description']?></p>
                </div>

            </div>

            <div class="creators_work_container">

                <div class="creators_work_feed_container">

                        <?php include '../includes/creators_work_feed_card.php' ?>
                    
                    
                </div>
            </div>

        </main>

    </body>
</html>