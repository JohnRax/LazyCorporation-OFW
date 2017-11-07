	<div class="footer-cta">
		<div class="container">
			<h2>Got a question?</h2>
			<p>We are here to help you. Check out our FAQs or send an email to our support team.<br>
			<br>
			<a class="button button--type-action" href="cdn-cgi/l/email-protection.html#24575154544b5650644c414854415654484547410a474b49">Contact Us</a></p>
		</div>
	</div>
	<footer class="site-footer" id="colophon" role="contentinfo">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-4">
						<aside class="widget widget--footer widget_text" id="text-1">
							<div class="textwidget">
								<img data-recalc-dims="1" src="../i1.wp.com/www.helperplace.com/wp-content/uploads/2016/07/cropped-HelperPlace2e2b8.png?w=680&amp;ssl=1"><br>
								<br>
								Employers looking for Domestic Helpers. No charge for helpers and almost free for employers!
							</div>
						</aside>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<aside class="widget widget--footer widget_pages" id="pages-1">
							<h3 class="widget-title widget-title--footer">Quick Links</h3>
							<ul>
								<li class="page_item page-item-14">
									<a href="post-a-job.html">Post A Job</a>
								</li>
								<li class="page_item page-item-1760">
									<a href="terms-and-conditions.html">Terms and Conditions</a>
								</li>
								<li class="page_item page-item-1762">
									<a href="privacy-policy.html">Privacy Policy</a>
								</li>
								<li class="page_item page-item-1948">
									<a href="frequently-asked-questions.html">FAQ</a>
								</li>
								<li class="page_item page-item-3940">
									<a href="find-a-job.html">Search &#038; Find A Job</a>
								</li>
								<li class="page_item page-item-99991237">
									<a href="submit-your-profile.html">Submit your Profile</a>
								</li>
							</ul>
						</aside>
					</div>
					
					<div class="col-xs-12 col-md-6 col-lg-4">
						<aside class="widget widget--footer widget_text" id="text-2">
							<h3 class="widget-title widget-title--footer">Contact Us</h3>
							<div class="textwidget">
								HelperPlace is located in Hong Kong.<br>
								<br>
								We connect Employers and Domestic Helpers in Hong Kong, Singapore, Dubai, Doha, Taipei...
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="site-info">
					&copy; 2017 LazzyWorks &mdash; All Rights Reserved
				</div>
				<div class="footer-social">
					<a href="http://facebook.com/"><span class="screen-reader-text">Facebook</span></a> <a href="http://twitter.com/"><span class="screen-reader-text">Twitter</span></a> <a href="GOOGLE.COM"><span class="screen-reader-text">Google Plus</span></a> <a href="http://instagram.com/"><span class="screen-reader-text">Instagram</span></a> <a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a> <a href="https://www.youtube.com"><span class="screen-reader-text">Youtube</span></a> <a href="https://www.linkedin.com/"><span class="screen-reader-text">Linkedin</span></a>
				</div><a class="btt" href="#top"><span class="screen-reader-text">Back to Top</span></a>
			</div>
		</div>
	</footer>
	<div id="ajax-response"></div>
	<div style="display:none"></div>
	<script src="cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js">
	</script>
	<script id="tmpl-infoBubble" type="text/template">
	   <# if ( typeof( data.title ) != 'undefined') { #>
	       <a href="{{{ data.href }}}">{{{ data.title }}}</a>
	   <# } #>
	</script> 
	<script>
	           jQuery.noConflict();
	           jQuery( document ).ready(function() {
	             

	               function initialize() {
	                   var autocompleteOptions = {
	                           types: [ '(regions)']                   };


	                   /* Used on main search page */
	                   if (jQuery('#search_location, #job_location').length) {

	                       var normal_input = jQuery('#search_location, #job_location')[0];

	                                                   var autocomplete = new google.maps.places.Autocomplete(normal_input);
	                                           }
	               }

	               google.maps.event.addDomListener(window, 'load', initialize); 

	           }); 
	</script> 
	<script type="text/javascript">
	       var recaptcha_widgets={};
	       function wp_recaptchaLoadCallback(){ 
	           try {
	               grecaptcha;
	           } catch(err){
	               return;
	           }
	           var e = document.querySelectorAll ? document.querySelectorAll('.g-recaptcha:not(.wpcf7-form-control)') : document.getElementsByClassName('g-recaptcha'),
	               form_submits;

	           for (var i=0;i<e.length;i++) {
	               (function(el){
	                   var wid;
	                   // check if captcha element is unrendered
	                   if ( ! el.childNodes.length) {
	                       wid = grecaptcha.render(el,{
	                           'sitekey':'6LchDSUTAAAAALv1tUkJXAZ4qKPrPQVgu--50gHW',
	                           'theme':el.getAttribute('data-theme') || 'light'
	                       });
	                       el.setAttribute('data-widget-id',wid);
	                   } else {
	                       wid = el.getAttribute('data-widget-id');
	                       grecaptcha.reset(wid);
	                   }
	               })(e[i]);
	           }
	       }
	       
	       // if jquery present re-render jquery/ajax loaded captcha elements 
	       if ( typeof jQuery !== 'undefined' )
	           jQuery(document).ajaxComplete( function(evt,xhr,set){
	               if( xhr.responseText && xhr.responseText.indexOf('6LchDSUTAAAAALv1tUkJXAZ4qKPrPQVgu--50gHW') !== -1)
	                   wp_recaptchaLoadCallback();
	           } );
	       
	</script>
	<script async defer src="../www.google.com/recaptcha/api6c4a.js?onload=wp_recaptchaLoadCallback&amp;render=explicit">
	</script> 
	<script type="text/javascript">
	               function revslider_showDoubleJqueryError(sliderID) {
	                   var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
	                   errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
	                   errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body<\/b><\/strong> option to true.";
	                   errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
	                   errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "<\/span>";
	                       jQuery(sliderID).show().html(errorMessage);
	               }
	</script> <!--[if lte IE 8]>
<link rel='stylesheet' id='jetpack-carousel-ie8fix-css'  href='https://www.helperplace.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel-ie8fix.css?ver=20121024' type='text/css' media='all' />
<![endif]-->
	<script src='wp-content/themes/jobify/js/slim.jquery.js' type='text/javascript'>
	</script> 
	<script src='wp-content/themes/jobify/js/slim.kickstart.min.js' type='text/javascript'>
	</script> 
	<script src='wp-content/themes/jobify-child/js/jquery-scrolltofixed-min.js' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/jetpack/modules/photon/photonb3d9.js?ver=20130122' type='text/javascript'>
	</script> 
	<script defer src='../s0.wp.com/wp-content/js/devicepx-jetpackfce8.js?ver=201744' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var FUE_Front = {"is_logged_in":"","ajaxurl":"https:\/\/www.helperplace.com\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/woocommerce-follow-up-emails/templates/js/fue-front6035.js?ver=4.4.20' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View basket","cart_url":"https:\/\/www.helperplace.com\/cart","is_cart":"","cart_redirect_after_add":"no"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0226.js?ver=3.1.2' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0226.js?ver=3.1.2' type='text/javascript'>
	</script> 
	<script async src='../secure.gravatar.com/js/gprofilesf848.js?ver=2017Octaa' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var WPGroHo = {"my_hash":""};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/jetpack/modules/wpgroho4a41.js?ver=4.8.2' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/underscore.min4511.js?ver=1.8.3' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/backbone.min9632.js?ver=1.2.3' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
	/* ]]> */
	</script> 
	<script src='wp-includes/js/wp-util.min4a41.js?ver=4.8.2' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/wp-backbone.min4a41.js?ver=4.8.2' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/wp-job-manager/assets/js/jquery-deserialize/jquery.deserialize1576.js?ver=1.2.1' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var job_manager_chosen_multiselect_args = {"search_contains":"1"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/wp-job-manager/assets/js/jquery-chosen/chosen.jquery.minf488.js?ver=1.1.0' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var job_manager_ajax_filters = {"ajax_url":"\/jm-ajax\/%%endpoint%%\/","is_rtl":"0","i18n_load_prev_listings":"Load previous listings","lang":null};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/wp-job-manager/assets/js/ajax-filters.minab45.js?ver=1.28.0' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var jobifySettings = {"ajaxurl":"https:\/\/www.helperplace.com\/wp-admin\/admin-ajax.php","archiveurl":"https:\/\/www.helperplace.com\/jobs","i18n":{"magnific":{"tClose":"Close","tLoading":"Loading...","tError":"The content could not be loaded."}},"pages":{"is_job":false,"is_resume":false,"is_testimonials":false}};
	/* ]]> */
	</script> 
	<script src='wp-content/themes/jobify/js/jobify.mine149.js?ver=20140416' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var jobifyMapSettings = {"useClusters":"1","overlayTitle":"%d Found","autoFit":"","trigger":"mouseover","mapOptions":{"zoom":"8","maxZoom":"10","maxZoomOut":3,"gridSize":60,"scrollwheel":false,"center":["22.28024","114.157891"]}};
	/* ]]> */
	</script> 
	<script src='wp-content/themes/jobify/inc/integrations/wp-job-manager/js/map/app.mina22f.js?ver=20150213' type='text/javascript'>
	</script> 
	<script src='wp-content/themes/jobify/js/vendor/salvattore/salvattore.min4a41.js?ver=4.8.2' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/wp-job-manager-locations/assets/js/main442b.js?ver=20140525' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var angelleye_frontend = {"is_product":"no","is_cart":"no","is_checkout":"no","three_digits":"3 digits usually found on the signature strip.","four_digits":"4 digits usually found on the front of the card.","enable_in_context_checkout_flow":"no"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/paypal-for-woocommerce/assets/js/angelleye-frontend0226.js?ver=3.1.2' type='text/javascript'>
	</script> 
	<script src='wp-includes/js/wp-embed.min4a41.js?ver=4.8.2' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var resume_manager_ajax_filters = {"ajax_url":"\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/wp-job-manager-resumes/assets/js/ajax-filters.min299b.js?ver=1.15.2' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/jetpack/_inc/spin4e44.js?ver=1.3' type='text/javascript'>
	</script> 
	<script src='wp-content/plugins/jetpack/_inc/jquery.spin4e44.js?ver=1.3' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	/* <![CDATA[ */
	var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"en","ajaxurl":"https:\/\/www.helperplace.com\/wp-admin\/admin-ajax.php","nonce":"cc370512b1","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"Comment","post_comment":"Post Comment","write_comment":"Write a Comment...","loading_comments":"Loading Comments...","download_original":"View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Please be sure to submit some text with your comment.","no_comment_email":"Please provide an email address to comment.","no_comment_author":"Please provide your name to comment.","comment_post_error":"Sorry, but there was an error posting your comment. Please try again later.","comment_approved":"Your comment was approved.","comment_unapproved":"Your comment is in moderation.","camera":"Camera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","copyright":"Copyright","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/www.helperplace.com\/wp-login.php?redirect_to=https%3A%2F%2Fwww.helperplace.com%2Fdomestic-helper-interview-tips-get-new-job","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/jetpack/modules/carousel/jetpack-carousela4d5.js?ver=20170209' type='text/javascript'>
	</script> 
	<script async defer src='../stats.wp.com/e-201744.js' type='text/javascript'>
	</script> 
	<script type='text/javascript'>
	   _stq = window._stq || [];
	   _stq.push([ 'view', {v:'ext',j:'1:5.3',blog:'113289927',post:'25',tz:'8',srv:'www.helperplace.com'} ]);
	   _stq.push([ 'clickTrackerInit', '113289927', '25' ]);
	</script> 
	<script type="text/javascript">

	           // reload recaptcha after failed ajax form submit
	           (function($){
	           $(document).on("submitResponse.default", function(e, response){
	               if ( grecaptcha ) {
	                   var wid = $('#ninja_forms_form_'+response.form_id).find('.g-recaptcha').data('widget-id');
	                   grecaptcha.reset(wid);
	               }
	           });
	           })(jQuery);
	</script><!-- Mirrored from www.helperplace.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2017 01:17:03 GMT -->