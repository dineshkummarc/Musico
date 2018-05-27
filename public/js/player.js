var song = document.getElementById("myAudio");

function playAudio(){
  console.log('Playing');
  song.play();
}

function pauseAudio(){
  song.pause();
}

$("#scrollToList").click(function() {
    $('html, body').animate({
        scrollTop: $("#scrollHere").offset().top
    }, 2000);
});
