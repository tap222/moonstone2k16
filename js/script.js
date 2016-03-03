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
    $('.background-image-home').css('background-size', 'contain');

    CURR_IMAGE += 1;
}
jQuery(document).ready(function($)
{
    slideShow();
});

