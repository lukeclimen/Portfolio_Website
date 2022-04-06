/* Navigation bar expand/contract */

 $(".nav__brick").click(function() {
    $(".collapsible").get(0).classList.toggle("collapsible--expanded");
 });

/* Dark Mode / Light mode Toggler */

$(".lightmode__toggle").click(function (){
    document.body.classList.toggle("darkmode");
    let image = $(this).attr("src");
    let logo = $(".nav__logo").attr("src");
    if (image.includes("sun")) {
        $(this).attr("src", image.replace("sun", "moon"));
        $(".nav__logo").attr("src", logo.replace("light", "dark"));
    }
    else {       
        $(this).attr("src", image.replace("moon", "sun"));
        $(".nav__logo").attr("src", logo.replace("dark", "light"));
    }
});

