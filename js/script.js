CURR_IMAGE = 0;
IMAGES = ['2.jpeg', '1.jpeg'];
function slideShow()
{
    // setTimeout(changeImage(IMAGES[i]), 1000);
    setInterval(changeImage, 3000)
}
function changeImage()
{
    console.log(IMAGES[CURR_IMAGE]);
    $('.background-image-home').css('background', "url('img/"+ IMAGES[CURR_IMAGE % 2] +"')");
    $('.background-image-home').css('background-position', 'center');
    CURR_IMAGE += 1;
}
jQuery(document).ready(function($)
{
    slideShow();
});

