<style type="text/css">
.modal-body .mt-item-title {
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 500;
    margin-top: 10px;
}
span.mt-item-badge {
    position: absolute;
    right: 0;
    bottom: 20px;
    background: #9D1DCA;
    color: #fff;
    padding: 10px 20px;
    border-radius: 20px 0 0 20px;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
}
.modal-content .modal-header{
    padding: 15px 30px;
}
.modal-content .modal-body {
    padding: 30px;
}
@media only screen and (max-width: 767px) {
	.mt-single-market-item:first-child{
		margin-bottom: 40px;
	}
}
</style> <script type="text/javascript">
            function meeek_fetch_products(){
                jQuery.ajax({
                    url: 'https://meeek.modeltheme.com/wp-admin/admin-ajax.php',
                    type: 'post',
                    data: { 
                        action: 'meeek_search_form_data_fetch', 
                        keyword: jQuery('.search-keyword').val(),
                        category_slug: jQuery('.search-form-product select option:selected').val()
                    },
                    success: function(data) {
                        jQuery('.data_fetch').html( data );
                    }
                });
            }
        </script>
<link rel="stylesheet" id="e-animations-css" href="wp-content/plugins/elementor/assets/lib/animations/animations.minde8f.css?ver=3.21.0" type="text/css" media="all" />
<script type="text/javascript" src="wp-includes/js/dist/vendor/moment.min1bc8.js?ver=2.29.4" id="moment-js"></script>
<script type="text/javascript" id="moment-js-after">
/* <![CDATA[ */
moment.updateLocale( 'en_US', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":1},"longDateFormat":{"LT":"g:i a","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/click-to-mail-pro/assets/js/moment-timezone-with-data.min5152.js?ver=1.0" id="moment-timezone-js"></script>
<script type="text/javascript" src="wp-content/plugins/click-to-mail-pro/assets/js/ctm-main5152.js?ver=1.0" id="ctm-main-js"></script>
<script type="text/javascript" id="mailto-ui-js-extra">
/* <![CDATA[ */
var mailtoui_strings = {"heading":"Compose new email with","gmail":"Gmail in browser","outlook":"Outlook in browser","yahoo":"Yahoo in browser","default":"Default email app","copy":"Copy","copied":"Copied!"};
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/click-to-mail-pro/assets/js/mailto-ui.min5152.js?ver=1.0" id="mailto-ui-js"></script>
<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/indexd9cd.js?ver=5.9.5" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/meeek.modeltheme.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/indexd9cd.js?ver=5.9.5" id="contact-form-7-js"></script>
<script type="text/javascript" src="wp-content/plugins/meeek/assets/js/meeek-bio-links5152.js?ver=1.0" id="meeek-bio-links-js"></script>
<script type="text/javascript" src="wp-content/plugins/meeek/assets/js/gianniAccordion.min5152.js?ver=1.0" id="gianniAccordion-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek-child/mt-skin-switcher/skin-switcher5152.js?ver=1.0" id="mt-skin-switcher-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/vendor/classie/classie5152.js?ver=1.0" id="classie-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/vendor/jquery-sticky/jquery.sticky8a54.js?ver=1.0.0" id="jquery-sticky-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/vendor/bootstrap/bootstrap.min3d36.js?ver=3.3.1" id="bootstrap-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/vendor/select2/select2.minc56a.js?ver=4.1.0-rc.0" id="select2-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/js/custom8a54.js?ver=1.0.0" id="meeek-custom-js"></script>
<script type="text/javascript" src="wp-content/themes/meeek/assets/js/customizer/theme5152.js?ver=1.0" id="meeek-theme-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.minde8f.js?ver=3.21.0" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.minde8f.js?ver=3.21.0" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},
"version":"3.21.0","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"container_grid":true,"home_screen":true,"ai-layout":true,"landing-pages":true},"urls":{"assets":"https:\/\/meeek.modeltheme.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":379,"title":"Home%20Art%20%E2%80%93%20Meeek","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.minde8f.js?ver=3.21.0" id="elementor-frontend-js"></script>
