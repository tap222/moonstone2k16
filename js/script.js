CURR_IMAGE = 0;
NUM_IMAGES = 7;
IMAGES = ['2.jpeg', '3.jpeg', '4.jpeg', '5.jpeg', '6.jpeg', '7.jpeg', '1.jpeg'];
function slideShow()
{
    setInterval(changeImage, 3000)
}
function changeImage()
{
    console.log(IMAGES[CURR_IMAGE]);
    $('.background-image-home').css('background', "url('img/"+ IMAGES[CURR_IMAGE % 7] +"')");
    $('.background-image-home').css('background-position', 'center');
    $('.background-image-home').css('background-size', 'cover');

    CURR_IMAGE += 1;
}
function addImages()
{
    var divs = $('.gallery-wrapper').children();
    for (var i = 0; i < 16; i++)
    {
        $(divs[i]).css('background', "url('img/"+ IMAGES[(i+1) % 5] +"')");
        $(divs[i]).css('background-size', 'cover');
    }
}
jQuery(document).ready(function($)
{
    slideShow();
    addImages();

    $('.gallery-element').hover(function(){
        $(this).children().first().toggleClass('show-overlay');
    });

    $('.gallery-element').click(function(){
        var img = $(this).css('background');
        $('.popup-display').css('background', img);
        $('.popup-display-backdrop').fadeIn();
    });
    $('.popup-display-wrapper').click(function(){
        $('.popup-display-backdrop').fadeOut();;
    });
    $('.popup-display').click(function(event){
        event.stopPropagation();
    });
});

