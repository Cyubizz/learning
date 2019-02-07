$(document).ready(function(){
    $('body').on('change', '.width', function(){
        $('.cont').css('width', $(this).val());
    });
    $('body').on('change', '.height', function(){
        $('.cont').css('height', $(this).val());
    });
});
