
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/* JQUERY and CSR >>
=================================================================================================== */
window.$ = window.jQuery = require('jquery');
window.Laravel = { csrfToken: $('meta[name=csrf-token]').attr("content") };



/* HEADER ON SCROLL >>
=================================================================================================== */

$(function () {

    function setHeaderColor() {
        $('body').addClass('scroll');
    }

    function removeHeaderColor() {
        $('body').removeClass('scroll');
    }

    function updateScrollHeader() {
        if ($(window).scrollTop() > 5) {
            setHeaderColor()
        } else {
            removeHeaderColor()
        }
    }

    updateScrollHeader();
    $(window).scroll(updateScrollHeader);

});


/* HEADER MENU >>
=================================================================================================== */

$(function () {

    function openMenu() {

        $('header').append('<div class="modal_bg"></div>');
        $('nav, .modal_bg').css({'height': $(window).outerHeight() + 100});
        $('body').addClass('menu-open');
    }

    function closeMenu() {
        $('body').removeClass('menu-open');
        $('.modal_bg').detach();
    }

    $(document).on('click', '#button-menu,.modal_bg', function () {

        if ($('body').hasClass('menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }

    });

    $(window).resize(function () {

        if ($(window).width() > 768) {
            closeMenu();
            $('nav, .modal_bg').removeAttr('style');
        } else {
            $('nav, .modal_bg').css({'height': $(window).outerHeight() + 100});
        }

    });

});