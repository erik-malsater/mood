<nav id="main_page_dropdown_menu">

    <div class="mobile_navbar_container">

        <a href="index.php"><h2 class="dropdown_header">Mood</h2></a>

        <div id="hamburger_button">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <div id="mobile_dropdown_item_container">

        <div class="drop_down_single_item_box">

            <form action="views/search.php" method="post" id="dropdown_search_form">
                <input type="search" name="search" class="header_search_form_field" id="dropdown_search_form_field" placeholder="Search for works and creators">
                <button type="submit" class="header_search_form_button" id="dropdown_search_form_button" form="dropdown_search_form" value="submit">
                    <img src="images/search_icon_black.png" alt="" id="dropdown_search_form_button_image">
                </button>
            </form>

        </div>

        <div class="drop_down_single_item_box">

            <a href="views/about_us.php"><p>About</p></a>

        </div>

    </div>

</nav>