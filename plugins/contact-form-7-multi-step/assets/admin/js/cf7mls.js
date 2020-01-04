(function($) {
  jQuery(document).ready(function($) {
    jQuery(".cf7mls-color-field").wpColorPicker();

    //cf7mls_load_step_name(jQuery('#wpcf7-form').val());
    // $("[data-config-field]").change(function() {
    //   var val = $(this).val();
    //   cf7mls_load_step_name(val);
    //đây là đoạn code tớ xử lý, khi cái textarea kia change, thì load mấy cái input nhập name, mà có lúc dc lúc ko, có gì cậu coi giùm tớ nhé :d
    // });

    jQuery("#contact-form-editor").on("tabsactivate", function(event, ui) {
      if (ui.newTab.context.hash === "#cf7mls-progress-bar") {
        var val = jQuery("[data-config-field='form.body']").val();
        cf7mls_load_step_name(val);
      }
    });

    function cf7mls_load_step_name(val) {
      if (phpjs_strpos(val, "[cf7mls_step") === false) {
        $("#cf7_mls_list_step_name").html("");
      } else {
        var ex = phpjs_explode("[cf7mls_step", val);
        var template = $("#cf7_mls_list_step_name_html").html();
        var count_new_step =
          ex.length -
          $("#cf7_mls_list_step_name").find('input[name="cf7mls_step_name[]"]')
            .length;
        if (count_new_step != 0) {
          if (count_new_step > 0) {
            for (var i = 0; i < count_new_step; i++) {
              $("#cf7_mls_list_step_name").append(template);
            }
          } else {
            for (var j = count_new_step; j < 0; j++) {
              $("#cf7_mls_list_step_name li:last-child").remove();
            }
          }
        }
      }
    }
  });

  /*$(document).on('change', '.cf7mls-tag-value', function(event) {
        //event.preventDefault();
        var back_btn_title = $('input[name="cf7mls-back-btn-button"]').val();
        var next_btn_title = $('input[name="cf7mls-next-btn-button"]').val();
        
        var cf7mls_value = back_btn_title + "\n" + next_btn_title;
        //console.log(cf7mls_value);
        $('textarea.cf7mls-values').val(cf7mls_value);
    });*/
})(jQuery);
function phpjs_strpos(haystack, needle, offset) {
  //  discuss at: http://phpjs.org/functions/strpos/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Onno Marsman
  // improved by: Brett Zamir (http://brett-zamir.me)
  // bugfixed by: Daniel Esteban
  //   example 1: strpos('Kevin van Zonneveld', 'e', 5);
  //   returns 1: 14

  var i = (haystack + "").indexOf(needle, offset || 0);
  return i === -1 ? false : i;
}
function phpjs_explode(delimiter, string, limit) {
  //  discuss at: http://phpjs.org/functions/explode/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  //   example 1: explode(' ', 'Kevin van Zonneveld');
  //   returns 1: {0: 'Kevin', 1: 'van', 2: 'Zonneveld'}

  if (
    arguments.length < 2 ||
    typeof delimiter === "undefined" ||
    typeof string === "undefined"
  )
    return null;
  if (delimiter === "" || delimiter === false || delimiter === null)
    return false;
  if (
    typeof delimiter === "function" ||
    typeof delimiter === "object" ||
    typeof string === "function" ||
    typeof string === "object"
  ) {
    return {
      0: ""
    };
  }
  if (delimiter === true) delimiter = "1";

  // Here we go...
  delimiter += "";
  string += "";

  var s = string.split(delimiter);

  if (typeof limit === "undefined") return s;

  // Support for limit
  if (limit === 0) limit = 1;

  // Positive limit
  if (limit > 0) {
    if (limit >= s.length) return s;
    return s.slice(0, limit - 1).concat([s.slice(limit - 1).join(delimiter)]);
  }

  // Negative limit
  if (-limit >= s.length) return [];

  s.splice(s.length + limit);
  return s;
}
