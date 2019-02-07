$(document).ready(function(){
    var leng = 20;
    $('.msg').html('Осталось ввести ещё ' + leng + ' символов');
    $('.text').keyup(function(){
        var text = $('.text').val().length;
        if(text <= leng){
            var a = leng - text;
            $('.msg').html('Осталось ввести ещё ' + a + ' символов');
        } else {
            var b = text - leng;
            $('.msg').html('Лимит привышен на ' + b + ' символов');
        }
        console.log(text);
    });
});
