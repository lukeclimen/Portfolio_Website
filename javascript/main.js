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

/* Projects page expansion of project "panes" */

$(".grid__item").mouseover(function() {
    let backdrop = $(this).attr("data-backdrop");
    $("body").addClass(backdrop);
    $(".grid__item").addClass("transparent");
    $(this).removeClass("transparent");
})
    .mouseout(function () {
    let backdrop = $(this).attr("data-backdrop");
    let gridItem = $(".grid__item");
    gridItem.animate(   {opacity: "1"}, 
                        {duration: 300,
                        complete: function() {
                            gridItem.removeAttr("style")}
                        });
    gridItem.removeClass("transparent");
    $("body").removeClass(backdrop);
});