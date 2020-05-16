$(function () {
    // Esconde el menú de navegación cuando se presiona sobre cualquier enlace.
    $(".rd-navbar-nav a").click(function () {
        $("body").click();
    });
});
