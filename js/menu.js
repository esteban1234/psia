$(document).ready(main);

var contador = 1;
menu = $('nav');

function main() {
    $('.menu-op').click(function() {
        if (contador == 1) {
            // $('nav').animate({
            //     left: '0'
            // });

            menu.slideDown(1000);

            contador = 0;
        } else {
            
            menu.slideUp(1000);
            contador = 1;
            // $('nav').animate({
            //     left: '-100%'
            // });
        }
    });

    // Mostramos y ocultamos submenus
    // $('.submenu').click(function() {
    //     $(this).children('.children').slideToggle();
    // });
}
