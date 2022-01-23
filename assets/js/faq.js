$(function() {
    $('.plus').click(function() {
        $(this).parent().find('label').click();
    });
})