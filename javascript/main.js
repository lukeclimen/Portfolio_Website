/* Navigation bar expand/contract */

 $(".nav__brick").click(function() {
    $(".collapsible").get(0).classList.toggle("collapsible--expanded");
 });

/* Dark Mode / Light mode Toggler */

$(".lightmode__toggle").click(function (){
    document.body.classList.toggle("darkmode");
    let image = $(this).attr("src");
    if (image.includes("sun")) {
        $(this).attr("src", image.replace("sun", "moon"));
    }
    else {       
        $(this).attr("src", image.replace("moon", "sun"));
    }
});

