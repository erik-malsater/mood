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

        <form action="views/search.php" method="post" id="header_search_form">

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
                <p class="description_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi quidem ex aut quasi laudantium, eum consequatur harum non. Architecto explicabo vero culpa officia tempore molestiae illo odio cumque ad nulla?</p>

                <h2>How does it work</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, natus eius iure aliquid enim sapiente itaque incidunt inventore, tenetur modi minima aliquam id cumque ullam nihil, doloribus explicabo eveniet nam?</p>
            
                <h2>Career</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quo veniam nam obcaecati fugiat ullam quae! Saepe, quas ratione explicabo sequi consectetur assumenda dicta impedit? Enim atque error debitis numquam!</p>
            </div>

        </main>

    </body>
</html>