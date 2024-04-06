$(document).ready(function () {
    $('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
    });

    $(window).on('scroll load', function () {
        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');

        if($(window).scrollTop() > 0){
            $('.top').show();
        }else{
            $('.top').hide();
        }
    })

    $('a[href*="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
                scrollTop : $($(this).attr('href')).offset().top,
            },
            500,
            'linear'
        )
    })

});


const loader = document.getElementById('loader')
const header = document.getElementById('header')
const menu = document.getElementById('menu')
const body = window.innerWidth


if (body < 1200){
    window.addEventListener('load', function (){
        menu.style.display = "block";
    })

}
window.addEventListener('load', function (){
    loader.style.display = "none";
    header.style.display = "flex";
})

