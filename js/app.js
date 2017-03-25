$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});











$(document).scroll(function(e){
    var scrollTop = $(document).scrollTop();
    var screenHeight = $( window ).height();

    if(scrollTop > screenHeight){

        $(".arrow").attr("style","display: none");

        $(".logo").attr("src","images/commentLogo.png");

        $('.navbar').addClass('blur');

        $(".nav-link").attr("id", "blackLink");

    } else {
        $(".arrow").attr("style","display: block");
        $(".logo").attr("src","images/whiteLogo.png");
        $('.navbar').removeClass('blur');
        $(".nav-link").attr("id","whiteLink");
    }
});





// auto changing bg videos after 12 seconds
window.onload = function start() {
    slide();
}

function slide() {
    var num = 0 ;
    var videoSrc = [
        'video/quality_excellence/For_Wes.mp4', 'video/idea/pencil_down.mp4', 'video/1/Dancing-Bulbs.mp4', 'video/quality_excellence/Undo.mp4'
    ]
    window.setInterval(function () {
        // increase by num 1, reset to 0 at 4
        num = (num + 1) % 4;
        $('video').attr('src', videoSrc[num]);
    }, 12000); // repeat forever, polling every 12 seconds
}










// video background
function scaleToFill() {
    $('video.video-background').each(function(index, videoTag) {
       var $video = $(videoTag),
           videoRatio = videoTag.videoWidth / videoTag.videoHeight,
           tagRatio = $video.width() / $video.height(),
           val;

       if (videoRatio < tagRatio) {
           val = tagRatio / videoRatio * 1.02; <!-- size increased by 2% because value is not fine enough and sometimes leaves a couple of white pixels at the edges -->
       } else if (tagRatio < videoRatio) {
           val = videoRatio / tagRatio * 1.02;
       }

       $video.css('transform','scale(' + val  + ',' + val + ')');

    });
}

$(function () {
    scaleToFill();

    $('.video-background').on('loadeddata', scaleToFill);

    $(window).resize(function() {
        scaleToFill();
    });
});






// adjusting image to it's parent element by it's scale
(function() {

var img = document.getElementsByClassName('what_we_done_unit');
img.onload = function() {
    if(img.height > img.width) {
        img.width = '100%';
        img.height = 'auto';
    }
};

}());













document.addEventListener('DOMContentLoaded', function(){
    Typed.new('.element', {
        strings: ["Optimized solutions", "Digital ideas" ],
        typeSpeed: 50,
        backSpeed: 5
    });
});
