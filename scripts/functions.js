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

        console.log("hej");

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