
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/* JQUERY and CSR >>
=================================================================================================== */
window.$ = window.jQuery = require('jquery');
window.Laravel = { csrfToken: $('meta[name=csrf-token]').attr("content") };
