// Chooses the home page image(s) based on screen width
$(function() {
   let size = window.innerWidth;
    console.log(size);
    if (size >= 852) {
        $("#self__image").attr("src", "images/Desktop_Me.JPG");
    }
    else {
        $("#self__image").attr("src", "images/Mobile_Me.JPG");
    }
    
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

