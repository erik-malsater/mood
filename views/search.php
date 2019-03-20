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
        <link rel="shortcut icon" href="../images/favicon.png" type="image/png">
    </head>
    <body>

        <?php
            include_once '../classes/User.php';
            if (isset($_POST['search'])) {
                $validated_input = User::validateInput($_POST['search']);
            }
        ?>

        <header id="main_page_header">

            <a href="../index.php"><h1>Mood</h1></a>

            <form action="" method="post" id="header_search_form">

                <input type="text" name="search" id="header_search_form_field" class="header_search_form_field" placeholder="Search for works and creators">

                <button type="submit" id="header_search_form_button" class="header_search_form_button" form="header_search_form" value="submit" aria-label="Search">
                    <img src="../images/search_icon2.png" alt="Search icon">
                </button>

            </form>

            <button id="header_link_to_about_us" onclick="location.href='about_us.php'" 
            type="button" aria-label="Go to about us page">What is Mood?</button>


            <?php

                include '../includes/search_page_dropdown_menu.php';

            ?>


        </header>

        <main class="main_page_feed_container" id="search_result_feed_container">
        
        <div class="go_back_button_tablet_flex_parent">

            <div class="go_back_button_tablet_flex_box">
                <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'" aria-label="Go back to previous page">
                    <img src="../images/go_back_icon3.png" alt="Go back button icon">
                </button>
            </div>

            <div class="go_back_button_tablet_flex_sibling"></div>

        </div>

            <h2 class="feed_header">Search results for "<?php if(isset($validated_input)){ echo $validated_input;} ?>"</h2>

            <?php
            
            include '../includes/search_results.php';
            
            ?>

        </main>
        
    </body>
</html>