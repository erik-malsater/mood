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


    <body>

        <?php

            include '../includes/other_pages_dropdown_menu.php';

        ?>


        <main id="about_us_main">

            <div class="profile_and_post_container">

                <div class="go_back_button_tablet_flex_parent">

                    <div class="go_back_button_tablet_flex_box">
                        <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'">
                            <img src="../images/go_back_icon3.png" alt="">
                        </button>
                    </div>

                    <div class="go_back_button_tablet_flex_sibling"></div>

                </div>

                <h2>About us</h2>
                <p class="description_text">We recognize the importance of art and creative expression and the need for a place to share it.
                We are trying to create a community for everybody who wants to get inspired and inspire other.</p>

                <h2>How does it work</h2>
                <p class="description_text">Right now Mood is in development but soon you'll be able to create your own profile and upload your work.</p>
            
                <h2>Career</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Voluptatem quo veniam nam obcaecati fugiat ullam quae! Saepe, quas ratione explicabo sequi c
                 onsectetur assumenda dicta impedit? Enim atque error debitis numquam!</p>
            </div>

        </main>

    </body>
</html>