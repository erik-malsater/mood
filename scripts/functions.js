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
            $('#mobile_dropdown_item_container').slideToggle(200);
        });


        $(window).scroll(function(){                          
            if ($(this).scrollTop() > $('#main_page_header').height()) {
                $('#main_page_dropdown_menu').fadeIn(200);
                $("#mobile_navbar_container").css("display", "flex")
            } else {
                $('#main_page_dropdown_menu').fadeOut(400);
            }
        });


    });
})(jQuery);