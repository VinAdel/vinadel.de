require('./bootstrap');

$(document).on("click", "nav > .container > .burger", function() {
    $("nav").toggleClass("responsive");
});

window.redirect = (path) => document.location.href = path;