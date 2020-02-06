$(document).ready(function(){
    $(".showMobileMenu ").click(function(){
        $(this).toggleClass("open");
        $("body").toggleClass("animated");
    });
    setTimeout(function(){
        $("#myModal").fadeOut(500);
        $(".modal-backdrop").fadeOut(500);
    }, 3000);
});