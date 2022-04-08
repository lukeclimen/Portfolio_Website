$(function() {
    // Chooses the home page image(s) based on screen width
   let size = window.innerWidth;
    console.log(size);
    if (size >= 852) {
        $("#self__image").attr("src", "images/Desktop_Me.JPG");
    }
    else {
        $("#self__image").attr("src", "images/Mobile_Me.JPG");
    }

    let i = 0;
    //Creates a "slideshow" of logo's in the Past Jobs section
    setInterval(function() {
        slideshow(i);
        i++;
    }, 3 * 1000);

    //Event listener for window size changing
    $(window).resize(function() {
        let newSize = window.innerWidth;
        console.log(newSize);
        if (newSize >= 852) {
            $("#self__image").attr("src", "images/Desktop_Me.JPG");
        }
        else {
            $("#self__image").attr("src", "images/Mobile_Me.JPG");
        }
    });
});

function slideshow(i) {
    let logos = ["images/grf.png", "images/PepsiCo.svg", "images/CESi.png"];
    let transition = "images/white_circle.svg";
    let logoImage = $(".logo__image");
    let element = (i % 3);
    logoImage.attr("src", logos[element]);
}
