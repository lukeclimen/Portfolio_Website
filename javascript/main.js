/* Navigation bar expand/contract */

const collapsible = document.querySelectorAll(".collapsible");
collapsible.forEach((item) =>
    item.addEventListener("click", function () {
        this.classList.toggle("collapsible--expanded");
    })
);