<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <title>Mood - A Way To Share Art</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    </head>
    <body>

        <header id="main_page_header">

            <h1>Mood</h1>

            <form action="views/search.php" method="post" id="header_search_form">

                <input type="search" name="search" id="header_search_form_field" class="header_search_form_field" placeholder="Search for works and creators" aria-label="Search text field">

                <button type="submit" id="header_search_form_button" class="header_search_form_button" form="header_search_form" value="submit" aria-label="Submit search">
                    <img src="images/search_icon2.png" alt="Search icon">
                </button>

            </form>

            <button id="header_link_to_about_us" onclick="location.href='views/about_us.php'" 
            type="button" aria-label="Go to about us page">What is Mood?</button>

            <?php

                include 'includes/main_page_dropdown_menu.php';

            ?>


        </header>

        <main class="main_page_feed_container">

            <?php

            include 'includes/post_card.php';

            ?>

        </main>
        
    </body>
</html>