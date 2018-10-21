$(window).scroll(showCards);
$('.ui.dropdown').dropdown({
    clearable: true
});

function showCards() {
    $(".ui.card").visibility({
        onTopVisible: function() {
            if ($(this).hasClass("hidden")) {
                $(this).transition("fly up")
                    .removeClass("hidden");
            }
        }
    });
}
