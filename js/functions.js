jQuery(document).ready(function ($) {
    "use strict";
    jQuery("#user_login").attr({
        "required": "required"
    });
    jQuery("#user_pass").attr({
        "required": "required"
    });

    jQuery(".sku-affix-sticker").sticky({
        topSpacing: 10
    });
    jQuery(".sku-main-nav-sticker").sticky({
        topSpacing: 10
    });

    var scroll = new SmoothScroll('a[data-scroll]', {

        // Selectors
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"

        // Speed & Duration
        speed: 500, // Integer. Amount of time in milliseconds it should take to scroll 1000px
        speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
        durationMax: null, // Integer. The maximum amount of time the scroll animation should take
        durationMin: null, // Integer. The minimum amount of time the scroll animation should take
        clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page

        // Easing
        easing: 'easeInOutCubic', // Easing pattern to use

        // History
        updateURL: true, // Update the URL on scroll
        popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)

        // Custom Events
        emitEvents: true // Emit custom events

    });

    //    jQuery('#autocomplete').on('keydown', function () {
    //        jQuery('#hiddenAutocomplete').val(jQuery(this).val());
    //    });
    //
    //    jQuery('#autocomplete').typeahead({
    //        source: function(query, process) {
    //            return jQuery.ajax({
    //                url: admin_url.ajax_url,
    //                type: 'POST',
    //                data: {
    //                    action: 'sdk_custom_query',
    //                    info: query
    //                },
    //                dataType: 'json',
    //                success: function(json) {
    //                    return typeof json.options == 'undefined' ? false : process(json.options);
    //                }
    //            });
    //        }
    //    });

    jQuery('#autocomplete').autoComplete({
        minChars: 2,
        source: function (term, response) {
            jQuery.getJSON(admin_url.ajax_url, {
                action: 'sdk_custom_query',
                info: term
            }, function (data) {
                response(data);
            });
        }
    });

    //
    //
    //    jQuery('#autocomplete').autocomplete({
    //        type: 'POST',
    //        dataType: 'json',
    //        params: {
    //            info: jQuery('#hiddenAutocomplete').val()
    //        },
    //        ajaxSettings: {
    //            url: admin_url.ajax_url,
    //            data: {
    //                action: 'sdk_custom_query',
    //                info: jQuery('#hiddenAutocomplete').val()
    //            }
    //        },
    //        onSelect: function (suggestion) {
    //            alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    //        },
    //        onHint: function () {
    //            console.log(jQuery('#autocomplete').val())
    //        }
    //    });
}); /* end of as page load scripts */

//jQuery.ajax({
//    type: 'POST',
//    url: admin_url.ajax_url,
//    data: {
//        action: 'get_project_youtube_video',
//        project_id: project_id
//    },
//    success: function (response) {
//        jQuery('.embed-responsive-modal-iframe').attr('src', response);
//        jQuery('#playerModal').modal('show');
//    },
//    error: function (jqXHR, textStatus, errorThrown) {
//        console.log(errorThrown);
//        console.log(jqXHR);
//        console.log(textStatus);
//    }
//});
