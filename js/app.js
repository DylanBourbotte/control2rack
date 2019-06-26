$(document).ready(function(){ 

     $('.btnMenu').click(function () {
        $(".overlayMenu").toggleClass("active");


});

$('.hoverImg').hover(function(){
        $(this).next('.hoverText').slideToggle(300);
        console.log('Ok?')
})
});