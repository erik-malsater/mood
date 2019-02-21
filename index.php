<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="scripts/functions.js"></script>
        <title>Mood - A Way To Share Art</title>
    </head>
    <body>

        <header id="main_page_header">

            <h1>Mood</h1>

            <form action="includes/" id="header_search_form">

                <input type="text" name="search" id="header_search_form_field" placeholder="Search for works and artists">

                <button type="submit" id="header_search_form_button" form="header_search_form" value="submit">
                    <img src="images/search_icon2.png" alt="">
                </button>

                <!--<input type="image" src="images/search_icon.png" alt="Submit Form" />-->

                <!--<input type="submit">-->

            </form>

            <button id="header_link_to_about_us" onclick="location.href='views/about_us.php'" 
            type="button">What is Mood?</button>
            <!--<a href="views/about_us.html">What is Mood?</a>-->


            <?php

                include 'includes/main_page_dropdown_menu.php';

            ?>


        </header>

        <main class="main_page_feed_container">

            <?php

            include 'includes/post_card.php';

            ?>

        </main>

    <!--
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <script type="text/javascript">
            (function($) {          
                $(document).ready(function(){

                    $('#header_search_form_field').focus(function(){
                        if(!$(this).hasClass('header_search_form_field_filled')){
                            $(this).toggleClass('header_search_form_field_filled');
                            $('#header_search_form_button').toggleClass('header_search_form_button_filled');
                        }
                    });
                    
                    $('#header_search_form_field').blur(function()
                    {
                        if( $(this).val().length === 0 ) {
                            $(this).toggleClass('header_search_form_field_filled');
                            $('#header_search_form_button').toggleClass('header_search_form_button_filled');
                        }
                    });

                    $('#hamburger_button').click(function(){
                        $(this).toggleClass('open');
                        $('#navbar_dropdown_items').slideToggle(200);
                    });

                    $(window).scroll(function(){                          
                        if ($(this).scrollTop() > $('#main_page_header').height()) {
                            $('#main_page_navbar').fadeIn(200);
                            $("#mobileNavbarContainer").css("display", "flex")
                        } else {
                            $('#main_page_navbar').fadeOut(400);
                        }
                    });


                });
            })(jQuery);
        </script>
        -->
        
    </body>
</html>