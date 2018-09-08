/**
 * Created by Richard on 2/9/2017.
 */
$(document).ready(function () {
    $("#hamburger").click(function () {
        $("nav").toggle();
        $("body", "main", "footer").toggleClass("menuFade");
    })
});