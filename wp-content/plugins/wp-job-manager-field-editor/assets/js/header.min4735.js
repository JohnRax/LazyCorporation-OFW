jQuery(function(a){a(".jmfe-header-field").each(function(b,c){var d=a(this).attr("id"),e=a(this).next("#description-"+d),f=a(this).css("marginBottom");e.length&&f&&(a(e).css("marginBottom",f),a(this).css("marginBottom","0")),a(".fieldset-"+d).length&&(a(this).insertBefore(a(".fieldset-"+d)),a(e).insertBefore(a(".fieldset-"+d)),a(".fieldset-"+d).remove())})});