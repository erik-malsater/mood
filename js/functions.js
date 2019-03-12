(function($) {          
    $(document).ready(function(){


        $('#header_search_form_field').val('');
        $('#dropdown_search_form_field').val('');

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


        $('#dropdown_search_form_field').focus(function(){
            if(!$(this).hasClass('header_search_form_field_filled')){
                $(this).toggleClass('header_search_form_field_filled');
                toggleDropdownSearchFormColorAndImage();
            }
        });
        
        $('#dropdown_search_form_field').blur(function()
        {
            if( $(this).val().length === 0 ) {
                $(this).toggleClass('header_search_form_field_filled');
                toggleDropdownSearchFormColorAndImage();
            }
        });


        $('#hamburger_button').click(function(){
            if($('#dropdown_search_form_field').val() !== ''){
                $('#dropdown_search_form_field').val('');
                $('#dropdown_search_form_field').toggleClass('header_search_form_field_filled');
                toggleDropdownSearchFormColorAndImage();
            }
            $(this).toggleClass('open');
            $('#mobile_dropdown_item_container').slideToggle(200);
            
        });


        function toggleDropdownSearchFormColorAndImage(){
            var x = $('#dropdown_search_form_button_image').attr('src');
            if(x === 'images/search_icon_black.png'){
                $('#dropdown_search_form_button_image').attr('src', 'images/search_icon_orange.png');
            } else if(x === '../images/search_icon_black.png'){
                $('#dropdown_search_form_button_image').attr('src', '../images/search_icon_orange.png');
            } else if(x === 'images/search_icon_orange.png'){
                $('#dropdown_search_form_button_image').attr('src', 'images/search_icon_black.png');
            } else if(x === '../images/search_icon_orange.png'){
                $('#dropdown_search_form_button_image').attr('src', '../images/search_icon_black.png');
            }
        }


        $(window).resize(function(){
            if($(window).width() > 768){
                $('#main_page_dropdown_menu').hide();
            }
        });
        

        $(window).scroll(function(){                   
            if ($(this).scrollTop() > $('#main_page_header').height() && $(window).width() < 768) {
                $('#main_page_dropdown_menu').fadeIn(200);
                $("#mobile_navbar_container").css("display", "flex")
            } else {
                $('#main_page_dropdown_menu').fadeOut(400);
            }
        });


    });
})(jQuery);