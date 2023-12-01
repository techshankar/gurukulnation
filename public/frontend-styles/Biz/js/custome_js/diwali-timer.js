/*
 Plugin Name: jQuery plugin incremental counter
 Plugin URI: https://github.com/MikhaelGerbet/jquery-incremental-counter
 Author: GERBET Mikhael
 Author URI: https://github.com/MikhaelGerbet
 Licence: MIT
 */
(function ($) {
    $.fn.incrementalCounter = function (options) {
        // default options
        var defaults = {
            "digits": 3
        },
            pad = function (n, width, z) {
                z = z || '0';
                n = n + '';
                return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
            },
            start = function (element) {
                var current_value = parseInt($(element).data('current_value')),
                    end_value = $(element).data('end_value'),

                      /*current_value = 423*/
                    current_value = $("#hdncount").val();
                current_speed = 1; 



                $(element).data({
                    current_value: current_value
                });

                if (current_speed) {
                    setTimeout(function () {
                        display($(element), current_value);
                    }, current_speed);
                }
            },
            display = function (element, value) {
                var paddedNumber = pad(value, element.data('digits')),
                    exp = paddedNumber.split(""),
                    nums = $(element).find('.num');
                $(exp).each(function (i, e) {
                    $(nums[i]).text(exp[i]);
                });
            },
            // merge options
            options = $.extend(defaults, options);

        this.each(function (index, element) {
            var default_digits = options.digits,
                digits = element.getAttribute('data-digits') ? element.getAttribute('data-digits') : default_digits,
                start_value = 500;

            // get value
            $(element).data({
                current_value: start_value,
                end_value: 0,
                digits: digits,
                current_speed: 0
            });

            start($(element));
        });

        return this;
    };
}(jQuery));

// Flip Counter
$(".flipper").incrementalCounter();
