CURR_IMAGE = 0;
NUM_IMAGES = 7;
IMAGES = ['2.jpeg', '3.jpeg', '4.jpeg', '5.jpeg', '6.jpeg', '7.jpeg', '1.jpeg'];
// COLORS = ['#311b92', '#b71c1c', '#6574A9', '#6d4c41']
COLORS = ['rgb(34, 119, 119)', 'rgb(82, 51, 110)', 'rgb(109, 64, 51)', 'rgb(87, 125, 58)', 'rgba(101, 116, 169, 1)'];
function slideShow()
{
    setInterval(changeImage, 4000)
}
function changeImage()
{
    console.log(IMAGES[CURR_IMAGE]);
    $('.background-image-home').css('background', "url('img/"+ IMAGES[CURR_IMAGE % 7] +"')");
    $('.background-image-home').css('background-position', 'center');
    $('.background-image-home').css('background-size', 'cover');
    $('.nav-top').css('background', COLORS[CURR_IMAGE%5]);
    $('.navbar-default').css('background', COLORS[CURR_IMAGE%5]);

    CURR_IMAGE += 1;
}
function addImages()
{
    var divs = $('.gallery-wrapper').children();
    for (var i = 0; i < 44; i++)
    {
        var j = i+ 1;
        $(divs[i]).css('background', "url('img/gallery/img ("+j+").jpg')");
        $(divs[i]).css('background-size', 'cover');
    }
}
jQuery(document).ready(function($)
{
    slideShow();
    addImages();
    $('.navbar-default').css('background', '#6574A9');
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

