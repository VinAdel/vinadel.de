$(document).on("click", ".code > .menu > div:not(.copy)", function() {
    $(".code > .menu > div").removeClass("active");
    $(this).addClass("active");

    if(!$(".code > div." + $(this).data("show")).is(":visible")) {
        $(".code > div:not(.menu)").fadeOut(500);
        $(".code > div." + $(this).data("show")).delay(500).fadeIn();
    }
});