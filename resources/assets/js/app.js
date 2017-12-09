
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


'use strict';

(function ($) {
    $(function () {
        $.prototype.fullscreen = function () {
            var $e = $(this);
            if (!$e.hasClass('modal-fullscreen')) return;
            bind($e);
        };

        function cssn($e, props) {
            var sum = 0;
            props.forEach(function (p) {
                sum += parseInt($e.css(p).match(/\d+/)[0]);
            });
            return sum;
        }
        function g($e) {
            return {
                width: cssn($e, ['margin-left', 'margin-right', 'padding-left', 'padding-right', 'border-left-width', 'border-right-width']),
                height: cssn($e, ['margin-top', 'margin-bottom', 'padding-top', 'padding-bottom', 'border-top-width', 'border-bottom-width'])
            };
        }

        function calc($e) {
            var wh = $(window).height();
            var ww = $(window).width();
            var $d = $e.find('.modal-dialog');
            $d.css('width', 'initial');
            $d.css('height', 'initial');
            $d.css('max-width', 'initial');
            $d.css('margin', '5px');
            var d = g($d);
            var $h = $e.find('.modal-header');
            var $f = $e.find('.modal-footer');
            var $b = $e.find('.modal-body');
            $b.css('overflow-y', 'scroll');
            var bh = wh - $h.outerHeight() - $f.outerHeight() - ($b.outerHeight() - $b.height()) - d.height;
            $b.height(bh);
        }

        function bind($e) {
            $e.on('show.bs.modal', function (e) {
                var $e = $(e.currentTarget).css('visibility', 'hidden');
            });
            $e.on('shown.bs.modal', function (e) {
                calc($(e.currentTarget));
                var $e = $(e.currentTarget).css('visibility', 'visible');
            });
        }
        $(window).resize(function () {
            calc($('.modal.modal-fullscreen.in'));
        });
        bind($('.modal-fullscreen'));
    });
})(jQuery);


$( document ).ready(function() {

    $('#selectUiElement').change(function () {
        var selectedText = $(this).find("option:selected").val();

        //document.getElementById("uiElementForm").innerHTML = "whatever";
        console.log("weda krpn");
        console.log(machine_id);

        if (selectedText == 1){
            $.ajax({
                url: '/IotAR/public/getform_Gauge/'.concat(machine_id),
                type: "GET",
                success: function(data){
                    $('#uiElementForm').html(data);
                    console.log("mona huttakda");
                }
            });
        }

        if (selectedText == 2){

            $.ajax({
                url: '/IotAR/public/getform_Indicator/'.concat(machine_id),
                type: "GET",
                success: function(data){
                    $('#uiElementForm').html(data);
                }
            });
        }

        if (selectedText == 3){

            $.ajax({
                url: '/IotAR/public/getform_ToggleButton/'.concat(machine_id),
                type: "GET",
                success: function(data){

                    $('#uiElementForm').html(data);
                }
            });
        }

        if (selectedText == 4){

            $.ajax({
                url: '/IotAR/public/getform_StackIndicator/'.concat(machine_id),
                type: "GET",
                success: function(data){
                    $('#uiElementForm').html(data);
                }
            });
        }

    });

});



window.theFunction = function(id) {
    $.ajax({
        url: '/IotAR/public/get_form',
        type: "GET",
        data: id,
        success: function(data){
            $('#uiElementForm').html(data);
        }
    });
};
