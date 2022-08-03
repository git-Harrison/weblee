$(document).ready(function(){
    
    $('.homework_btn').on('click', function (){
        $('.homework_form, .form_bg').fadeIn();
    });

    $('.form_bg').on('click', function (){
        $('.homework_form, .form_bg').fadeOut();
    });

});