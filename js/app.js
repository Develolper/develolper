$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
    //   event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 180
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});






// Animate On Scroll Library
// AOS.init({
//   duration: 1200,
// })










// auto changing bg videos after 12 seconds
window.onload = function start() {
    slide();
}

function slide() {
    var num = 0 ;
    // starts with from index 1
    var videoSrc = [
        'video/Happy-Street.mp4', 'video/Dancing-Bulbs.mp4', 'video/pencil_down.mp4', 'video/Undo.mp4',
    ];


    (function me() {
        num = (num + 1) % 4;
        console.log(num);
        $('video').attr('src', videoSrc[num]);

        setTimeout(me, 12000);
    })();
}




// Typejs
document.addEventListener('DOMContentLoaded', function(){
    Typed.new('.element', {
        strings: [ "realize your digital ideas", "realize optimized solutions", "deliver projects on time", "perform with an excellence to satisfy you" ],
        typeSpeed: 50,
        backSpeed: 5,
        backDelay: 10000,
        loop: true
    });
});










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
