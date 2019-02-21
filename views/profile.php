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
            include '../includes/fetch_profile.php';
        ?>

        <?php

        include '../includes/dropdown_header.php';

        ?>

        <main>

            <div class="profile_and_post_container">

                <button id="go_back_button" type="button" onclick="window.location.href='javascript:history.back()'">
                    <img src="../images/go_back_icon3.png" alt="">
                </button>

                <div class="post_card">
                    <div class="art_frame">
                        <img src="<?=$fetched_profile['profile_picture']?>" alt="<?=$fetched_profile['name']?>">
                    </div>
                    <h2><?=$fetched_profile['name']?></h2>
                    <p class="description_text"><?=$fetched_profile['description']?>owno woivnow woivnro 
                    wovinwor evrib burb bu buv urbvurb ubvru b ubr ubrubrbr urb urbvubru brub rubvuvbruvbr 
                    ubv bv b ubrvubrvu r bru ubeiubrvrowino wronvo</p>
                </div>

            </div>

        </main>

    </body>
</html>