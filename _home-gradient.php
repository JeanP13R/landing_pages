<?php
		
function pagina($pag,$spag,$sspag,$ssspag,$sssspag){
	
	if (isset($_GET['f'])){
	///////////////////////////////
	// FUNCIONES DE AJAX 
	///////////////////////////////
		if($_GET['f']=='rucconsultar'){
			rucconsultar($_GET['ruc']);	
		}
		exit;
	}

	if ($spag==""){
	//███ PAGINA █████████████████████████████████████████████████████████████
	?>
<!doctype html>
<html lang="en-US">

<!-- Mirrored from meeek.modeltheme.com/vertical-demos/home-gradient/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2024 19:04:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title>Home Gradient &#8211; Meeek</title>
<meta name="robots" content="max-image-preview:large" />
<link rel="alternate" type="application/rss+xml" title="Meeek &raquo; Feed" href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Meeek &raquo; Comments Feed" href="../../comments/feed/index.html" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/meeek.modeltheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.4"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="fontawesome-css" href="wp-content/plugins/click-to-mail-pro/assets/css/all.min5152.css?ver=1.0" type="text/css" media />
<link rel="stylesheet" id="ctm-main-css" href="wp-content/plugins/click-to-mail-pro/assets/css/ctm-main5152.css?ver=1.0" type="text/css" media />
<link rel="stylesheet" id="contact-form-7-css" href="wp-content/plugins/contact-form-7/includes/css/stylesd9cd.css?ver=5.9.5" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-bio-links-css" href="wp-content/plugins/meeek/assets/css/meeek-bio-links8a54.css?ver=1.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-about-me-css" href="wp-content/plugins/meeek/assets/css/meeek-about-me8a54.css?ver=1.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-social-media-links-css" href="wp-content/plugins/meeek/assets/css/meeek-social-media-links8a54.css?ver=1.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="modeltheme-addons-for-wpbakery-css" href="wp-content/plugins/modeltheme-addons-for-wpbakery/public/css/modeltheme-addons-for-wpbakery-public8a54.css?ver=1.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome5-css" href="wp-content/plugins/modeltheme-addons-for-wpbakery/public/css/plugins/font-awesome/all.min7a5f.css?ver=5.15.4" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-parent-style-css" href="wp-content/themes/meeek/style380f.css?ver=6.5.4" type="text/css" media="all" />
<link rel="stylesheet" id="mt-skin-switcher-css" href="wp-content/themes/meeek-child/mt-skin-switcher/skin-switcher380f.css?ver=6.5.4" type="text/css" media="all" />
<style id="meeek-custom-style-inline-css" type="text/css">
body .nav-menu-desktop .menu>li>a, body .header-search_icon-item svg, .builder-item--my_account i, .builder-item--my_cart i, .builder-item--wishlist i, body .header--row:not(.header--transparent) .menu-mobile-toggle, body .header--row .builder-item--burger-menu .hamburger, body .is-size-mobile-medium .hamburger .hamburger-inner, body .is-size-mobile-medium .hamburger .hamburger-inner::after, body .is-size-mobile-medium .hamburger .hamburger-inner::before{color: #ffffff;}body .nav-menu-desktop .menu>li>a:hover, body .header-search_icon-item svg:hover, .builder-item--my_account i:hover, body .header--row:not(.header--transparent) .menu-mobile-toggle:hover, .header--row .builder-item--burger-menu .hamburger:hover{color: #ffffff;}html, body #page{background-image: url(wp-content/uploads/2023/05/gradient-background.jpg) !important;}#masthead.site-header { display: none !important; }body .container, body .container-lg, body .container-md, body .container-sm, body .container-xl, body .container-xxl { max-width: 750px !important; }@media only screen and (max-width: 767px) {body h1,body h1 span{font-size: 26px !important;line-height: 38px !important;}body h2{font-size: 24px !important;line-height: 28px !important;}body h3{font-size: 22px !important;line-height: 26px !important;}body h4{font-size: 20px !important;line-height: 24px !important;}body h5{font-size: 18px !important;line-height: 22px !important;}body h6{font-size: 16px !important;line-height: 20px !important;}}@media only screen and (min-width: 768px) and (max-width: 1024px) {body h1,body h1 span{font-size: 28px !important;line-height: 32px !important;}body h2{font-size: 26px !important;line-height: 30px !important;}body h3{font-size: 24px !important;line-height: 28px !important;}body h4{font-size: 22px !important;line-height: 26px !important;}body h5{font-size: 20px !important;line-height: 23px !important;}body h6{font-size: 18px !important;line-height: 21px !important;}}html, #page {background-color: #ffffff;background-image: url(https://meeek.modeltheme.com/wp-content/uploads/2023/05/meeek-bg.jpg);background-size: 100% 100%;background-position: center;background-repeat: no-repeat;background-attachment: fixed;}a, a:visited, .product_meta > span a {color: #222;}.meeek-article-details .post-author a:hover,.meeek-comment-footer-meta a:hover,.meeek-article-inner .meeek-post-metas a:hover,.meeek-article-inner .post-name a:hover,.page-links .post-page-numbers.current,body .page-links a:hover,.single-post-tags a:hover,.widget_archive li a:hover,.widget_categories li a:hover,.widget_product_categories .cat-item a:hover,.widget_recent_entries li a:hover,.wp-block-archives-list.wp-block-archives li a:hover,.wp-block-button.is-style-outline .wp-block-button__link,.wp-block-categories-list.wp-block-categories li a:hover,.wp-block-latest-comments li a:hover,.wp-block-latest-posts.wp-block-latest-posts__list a:hover,.wp-block-tag-cloud a:hover,a:focus,a:hover,body .meeek-article-details .post-author a:hover,body .meeek-comment-footer-meta a:hover,body .meeek-article-inner .meeek-post-metas a:hover,body .meeek-article-inner .post-name a:hover,body .header-group-wrapper:hover a.menu-grid-item i,body .sidebar-content .tagcloud>a:hover,body .single-post-tags a:hover,body .tagcloud>a:hover, .widget_mt_recent_entries_with_thumbnail li a:hover{color: ;}a, a:visited {font-weight: ;}.breadcrumb a::after {content: "/";}.woocommerce p.stars a::before, .cd-gallery .woocommerce-title-metas .meeek-supported-cause a,table.compare-list .remove td a .remove,.woocommerce form .form-row .required,.woocommerce .woocommerce-info::before,.woocommerce .woocommerce-message::before,.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce div.product .woocommerce-tabs ul.tabs li,.widget_popular_recent_tabs .nav-tabs li.active a,.widget_product_categories .cat-item:hover,.widget_archive li:hover,.widget_categories .cat-item:hover, .woocommerce .star-rating span::before,h1 span,h2 span,label.error,.author-name,.comment_body .author_name,.prev-next-post a:hover, .prev-text,.next-text,.social ul li a:hover i,.wpcf7-form span.wpcf7-not-valid-tip,.text-dark .statistics .stats-head *,.widget_meta a:hover,.logo span,a.shop_cart::after,.woocommerce ul.products li.product .archive-product-title a:hover,.shop_cart:hover,.widget_pages a:hover,.widget_recent_entries_with_thumbnail li:hover a,li.seller-name::before,li.store-address::before,li.store-name::before,.woocommerce div.product form.buy-now.cart .button:hover span.amount,body .woocommerce ul.cart_list li:hover a, body .woocommerce ul.product_list_widget li:hover a,a.add-wsawl.sa-watchlist-action:hover, a.remove-wsawl.sa-watchlist-action:hover,.top-footer .menu-search .btn.btn-primary:hover i.fa,.post-name i,.modal-content p i,.modeltheme-modal input[type="submit"]:hover,.modeltheme-modal button[type="submit"]:hover,form#login .submit_button:hover,blockquote::before,div#cat-drop-stack a:hover,.woocommerce #respond input#submit:hover,body .woocommerce-MyAccount-navigation-link > a:hover,body .woocommerce-MyAccount-navigation-link.is-active > a,.sidebar-content .widget_nav_menu li a:hover,.woocommerce-account .woocommerce-MyAccount-content p a:hover,.woocommerce.single-product div.product.product-type-auction form.cart .button.single_add_to_cart_button span,.woocommerce.single-product div.product.product-type-auction form.cart .button.single_add_to_cart_button,#signup-modal-content .woocommerce-form-register.register .button[type="submit"]:hover, .dokan-btn-theme a:hover, .dokan-btn-theme:hover, input[type="submit"].dokan-btn-danger:hover, input[type="submit"].dokan-btn-theme:hover, .woocommerce-MyAccount-navigation-link.is-active > abody .meeek_shortcode_blog .post-name a:hover,.category-button a:hover,#dropdown-user-profile ul li a:hover,.widget_meeek_social_icons a,.simple-sitemap-container ul a:hover,.wishlist_table tr td.product-name a.button:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, .mega_menu .cf-mega-menu li a:hover, .mega_menu .cf-mega-menu.sub-menu p a:hover,.woocommerce a.remove, a#register-modal:hover,.flip-clock-wrapper ul li a div div.inn,.cd-tab-filter a:hover,.no-touch .cd-filter-block h4:hover,.cd-gallery .woocommerce-title-metas a:hover,.cd-tab-filter a.selected,.no-touch .cd-filter-trigger:hover,.woocommerce .woocommerce-widget-layered-nav-dropdown__submit:hover,.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item a:hover, .meeek-phone i, .meeek-mail i {color: #2695ff;}.woocommerce div.product .woocommerce-tabs ul.tabs li a,.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a{color: #2695ff;}.select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[data-selected],.wpb_button::after,.rotate45,.latest-posts .post-date-day,.latest-posts h3,.latest-tweets h3, .latest-videos h3,.page-template-template-blog .meeek-article-inner .meeek-more-link,button.vc_btn,.owl-theme .owl-controls .owl-page span,body .vc_btn.vc_btn-blue, body a.vc_btn.vc_btn-blue, body button.vc_btn.vc_btn-blue, .woocommerce input.button,table.compare-list .add-to-cart td a,.woocommerce #respond input#submit.alt, .woocommerce input.button.alt, .woocommerce nav.woocommerce-pagination ul li a:focus, body.woocommerce nav.woocommerce-pagination ul li a:hover, body.woocommerce nav.woocommerce-pagination ul li span.current, .widget_social_icons li a:hover, #subscribe > button[type="submit"],.prev-next-post a:hover .rotate45,.member-footer .social::before, .member-footer .social::after,.subscribe > button[type="submit"],.woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, body.woocommerce button.button.alt.disabled, body.woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled, .woocommerce input.button.alt[disabled]:disabled:hover,.no-results input[type="submit"],table.compare-list .add-to-cart td a,.shop_cart,h3#reply-title::after,.newspaper-info,.widget-title:after,.wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active,#primary .main-content ul li:not(.rotate45)::before,.menu-search .btn.btn-primary:hover,.btn-register, .modeltheme-modal input[type="submit"], .modeltheme-modal button[type="submit"], form#login .register_button, form#login .submit_button, .widget_address_social_icons .social-links a,.hover-components .component:hover,.nav-previous a, .nav-next a,article.dokan-orders-area .dokan-panel-default > .dokan-panel-heading,#signup-modal-content .woocommerce-form-register.register .button[type="submit"],body .woocommerce-MyAccount-navigation-link > a,.newsletter-footer input.submit:hover, .newsletter-footer input.submit:focus, a.remove-wsawl.sa-watchlist-action,.wcv-dashboard-navigation li a,.wc_vendors_active form input[type="submit"], #wp-calendar td#today,.wishlist-title-with-form .show-title-form,.categories_shortcode .category, body .pagination .page-numbers.current,body .pagination .page-numbers:hover,.category-button.boxed a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active,body .tp-bullets.preview1 .bullet,.sale_banner_right span.read-more {background: #2695ff; }.wp-block-button.is-style-outline .wp-block-button__link,.sidebar-content .widget-title::before, .sidebar-content .widget h2::before, .sidebar-content .widget .wp-block-search__label::before,.author-bio,body blockquote,.widget_popular_recent_tabs .nav-tabs > li.active,body .left-border, body .right-border,body .member-header,body .member-footer .social,.woocommerce div.product .woocommerce-tabs ul.tabs li.active, body .button[type="submit"],.wpb_content_element .wpb_tabs_nav li.ui-tabs-active,.header_mini_cart,.header_mini_cart.visible_cart,#contact-us .form-control:focus,.header_mini_cart .woocommerce .widget_shopping_cart .total, .header_mini_cart .woocommerce.widget_shopping_cart .total,.sale_banner_holder:hover, .woocommerce.single-product div.product.product-type-auction form.cart .button.single_add_to_cart_button,body .sidebar-content .widget-title::before, .sidebar-content .widget h2::before, .sidebar-content .widget .wp-block-search__label::before {border-color: #2695ff !important;}.woocommerce #respond input#submit:hover, .wc_vendors_active form input[type="submit"]:hover,.wcv-dashboard-navigation li a:hover,.woocommerce input.button:hover,table.compare-list .add-to-cart td a:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce input.button.alt:hover, .latest-posts .post-date-month,.button.solid-button:hover,body .vc_btn.vc_btn-blue:hover, body a.vc_btn.vc_btn-blue:hover, body button.vc_btn.vc_btn-blue:hover,.subscribe > button[type="submit"]:hover,table.compare-list .add-to-cart td a:hover,.shop_cart:hover,.widget_address_social_icons .social-links a:hover,.page-template-template-blog .meeek-article-inner .meeek-more-link:hover,form#login .submit_button:hover,.modeltheme-modal input[type="submit"]:hover, .modeltheme-modal button[type="submit"]:hover, .modeltheme-modal p.btn-register-p a:hover,#signup-modal-content .woocommerce-form-register.register .button[type="submit"]:hover, .no-touch #cd-zoom-in:hover, .no-touch #cd-zoom-out:hover,.woocommerce .woocommerce-widget-layered-nav-dropdown__submit:hover, .pagination > li > a.current, .pagination > li > a:hover {background: #ffffff;}::selection{color: #ffffff;background: #2695ff;}::-moz-selection { /* Code for Firefox */color: #ffffff;background: #2695ff;}#navbar .sub-menu, .navbar ul li ul.sub-menu {background-color: #FFF;}#navbar ul.sub-menu li a {color: #484848;}#navbar ul.sub-menu li a:hover {color: #FFF;}
</style>
<link rel="stylesheet" id="bootstrap-css" href="wp-content/themes/meeek/assets/vendor/bootstrap/bootstrap.mince52.css?ver=5.0.2" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-styles-css" href="wp-content/themes/meeek/assets/css/styles380f.css?ver=6.5.4" type="text/css" media="all" />
<link rel="stylesheet" id="meeek-style-css" href="wp-content/themes/meeek-child/style380f.css?ver=6.5.4" type="text/css" media="all" />
<style id="meeek-style-inline-css" type="text/css">
.meeek-article-wrapper .meeek-article-inner  {background-color: #ffffff;border-style: solid;border-top-width: 2px;border-right-width: 2px;border-bottom-width: 2px;border-left-width: 2px;border-color: #1e1e1e;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;} .meeek-breadcrumbs .row {border-color: rgba(0,150,57,0);}.meeek_preloader_holder {background-color: #000;}.meeek-back-to-top {background-color: #2695FF;}.meeek-back-to-top, .meeek-back-to-top.meeek-is-visible:visited {color: #FFF;}.meeek-back-to-top:hover {background-color: #222;}.meeek-back-to-top:hover {color: #FFF;}body {color: #6a6b76;}.nav-menu-desktop .sub-menu li a {background-color: #FFF;}.nav-menu-desktop .sub-menu li a {color: #484848;}.nav-menu-desktop .sub-menu li a:hover {background-color: #FFF;}.nav-menu-desktop .sub-menu li a:hover {color: #2695ff;}.nav-menu-desktop .sub-menu li {border-bottom: 1px solid #ddd !important;}a.wp-block-button__link,.woocommerce #respond input#submit,.woocommerce #respond input#submit.alt,.woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce #respond input#submit, .woocommerce a.button, body.woocommerce button.button, .woocommerce input.button, input[type="button"]:not(.qty_button), input[type="submit"], input[type="reset"], .woocommerce button[type="submit"]:not(button.search-submit), .meeek-article-inner .meeek-more-link, .menu-search .btn.btn-primary, .form-submit input[type="submit"],.woocommerce a.added_to_cart, .woocommerce.single-product .button, button.woocommerce button.button, .woocommerce button.button.alt,.wp-block-search .wp-block-search__button, .woocommerce #respond input#submit, .wp-block-search .wp-block-search__button,.meeek-article-inner .meeek-more-link, .woocommerce a.button:hover, .menu-search .btn.btn-primary,.form-submit input[type="submit"],button.woocommerce button.button,.woocommerce button.button.alt, body.woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt[disabled]:disabled, .post-password-form input[type="submit"], a.vc_button_404, a.vc_button_404:visited, .comment-form .form-submit .submit, .bps-form div button, .tribe-events .tribe-events-c-search__button  {color: #0a0a0a; text-decoration-color: #0a0a0a;background-color: #ffffff;border-style: solid;border-top-width: 2px;border-right-width: 2px;border-bottom-width: 2px;border-left-width: 2px;border-color: #0a0a0a;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;} .comment-form input:not(input[type="checkbox"]):focus,.woocommerce form .form-row textarea:focus, textarea:focus, input[type="color"]:focus, input[type="date"]:focus, input[type="search"]:focus, input[type="datetime-local"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="search"]:not(.search-field):focus, input[type="tel"]:focus, input[type="text"]:focus, textarea:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, textarea:focus, .woocommerce-cart table.cart td.actions .coupon .input-text:focus, .woocommerce form .form-row input.input-text:focus, .select2-container--default .select2-selection--single:focus, .woocommerce.widget_product_search .search-field:focus, .header-search_box-item .header-search-form .search-field:focus, .wpcf7-form input:focus {border-color: #d3d3d3;}.header-separator::before {background: #dee2e6;}.header-separator::before {background: #dee2e6;}.header-separator::before {background: #dee2e6;}.header--row .builder-item--burger-menu .burger-sidebar-content {text-align: left;}.navigation2 .nav-menu>li > a  {color: #fff; text-decoration-color: #fff;} .meeek_category_button .category_button_title  {color: #fff; text-decoration-color: #fff;} .meeek_category_button .category_button_wrap  {background-color: #5ab210;} .header-search_icon-item .header-search-modal  {border-style: solid;} .header-search_icon-item .search-field  {border-style: solid;} .header-search_box-item .search-form-fields  {border-style: solid;} .site-header-inner a.item--button  {background-color: #ffffff;border-style: solid;border-top-width: 2px;border-right-width: 2px;border-bottom-width: 2px;border-left-width: 2px;} .site-header-inner a.item--button:hover  {color: #ffffff; text-decoration-color: #ffffff;background-color: #0a0a0a;} @media screen and (max-width: 1170px) { #cb-row--footer-main div {text-align: left;}}@media screen and (max-width: 1170px) { #cb-row--footer-bottom div {text-align: left;}}.footer-copyright {text-align: left;}/* CSS for desktop */.meeek-article-wrapper .meeek-article-inner  {padding-top: 20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;} .meeek-article-wrapper .meeek-article-inner { margin-bottom: 20px; }a.wp-block-button__link,.woocommerce #respond input#submit,.woocommerce #respond input#submit.alt,.woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce #respond input#submit, .woocommerce a.button, body.woocommerce button.button, .woocommerce input.button, input[type="button"]:not(.qty_button), input[type="submit"], input[type="reset"], .woocommerce button[type="submit"]:not(button.search-submit), .meeek-article-inner .meeek-more-link, .menu-search .btn.btn-primary, .form-submit input[type="submit"],.woocommerce a.added_to_cart, .woocommerce.single-product .button, button.woocommerce button.button, .woocommerce button.button.alt,.wp-block-search .wp-block-search__button, .woocommerce #respond input#submit, .wp-block-search .wp-block-search__button,.meeek-article-inner .meeek-more-link, .woocommerce a.button:hover, .menu-search .btn.btn-primary,.form-submit input[type="submit"],button.woocommerce button.button,.woocommerce button.button.alt, body.woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt[disabled]:disabled, .post-password-form input[type="submit"], a.vc_button_404, a.vc_button_404:visited, .comment-form .form-submit .submit, .bps-form div button, .tribe-events .tribe-events-c-search__button  {padding-top: 18px;padding-right: 35px;padding-bottom: 18px;padding-left: 35px;}  .header--row:not(.header--transparent).header-top .header--row-inner {min-height: 67px;} .header--row:not(.header--transparent).header-main .header--row-inner {min-height: 0px;} .header--row:not(.header--transparent).header-bottom .header--row-inner {min-height: 0px;}.logo.logo-image img { max-width: 78px; } .cb-row--mobile .logo.logo-image img { width: 78px; }.header--row .builder-first--nav-icon {text-align: right;}.header-search_icon-item .search-submit {margin-left: -40px;}.header-search_box-item .search-submit{margin-left: -47px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -47px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-47px;}.header--row .builder-first--primary-menu {text-align: right;}.site-header-inner a.item--button  {padding-top: 18px;padding-right: 35px;padding-bottom: 18px;padding-left: 35px;} /* CSS for tablet */@media screen and (max-width: 1024px) { .header--row .builder-first--nav-icon {text-align: right;}.header-search_icon-item .search-submit {margin-left: -40px;}.header-search_box-item .search-submit{margin-left: -47px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -47px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-47px;} }/* CSS for mobile */@media screen and (max-width: 568px) {  .header--row:not(.header--transparent).header-top .header--row-inner {min-height: 33px;}.header--row .builder-first--nav-icon {text-align: right;}.header-search_icon-item .search-submit {margin-left: -40px;}.header-search_box-item .search-submit{margin-left: -47px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -47px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-47px;} }
</style>
<link rel="stylesheet" id="meeek-gutenberg-frontend-css" href="wp-content/themes/meeek/inc/gutenberg/assets/gutenberg-frontend380f.css?ver=6.5.4" type="text/css" media="all" />
<link rel="stylesheet" id="select2-css" href="wp-content/themes/meeek/assets/vendor/select2/select2.min380f.css?ver=6.5.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind54b.css?ver=5.29.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="wp-content/plugins/elementor/assets/css/frontend-lite.minde8f.css?ver=3.21.0" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-129-css" href="wp-content/uploads/elementor/css/post-129d329.css?ver=1713343430" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-global-css" href="wp-content/uploads/elementor/css/globald329.css?ver=1713343430" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-714-css" href="wp-content/uploads/elementor/css/post-714e1e4.css?ver=1713347007" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0" type="text/css" media="all" />
<link rel="stylesheet" id="linear-icons-css" href="wp-content/themes/meeek/assets/vendor/linear-icons/linear-iconsbb93.css?ver=5.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="wp-content/plugins/modeltheme-addons-for-wpbakery/public/js/modeltheme-addons-for-wpbakery-public8a54.js?ver=1.0.0" id="modeltheme-addons-for-wpbakery-js"></script>
<link rel="https://api.w.org/" href="../../wp-json/index.html" /><link rel="alternate" type="application/json" href="../../wp-json/wp/v2/pages/714.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
<meta name="generator" content="WordPress 6.5.4" />
<link rel="canonical" href="index.html" />
<link rel="shortlink" href="../../index2df9.html?p=714" />
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embede061.json?url=https%3A%2F%2Fmeeek.modeltheme.com%2Fvertical-demos%2Fhome-gradient%2F" />
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed80f9?url=https%3A%2F%2Fmeeek.modeltheme.com%2Fvertical-demos%2Fhome-gradient%2F&amp;format=xml" />
<meta name="generator" content="Elementor 3.21.0; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
<link rel="icon" href="wp-content/uploads/2023/05/cropped-80x80-1-32x32.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2023/05/cropped-80x80-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2023/05/cropped-80x80-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://meeek.modeltheme.com/wp-content/uploads/2023/05/cropped-80x80-1-270x270.png" />
<style type="text/css" id="wp-custom-css">
			.mt-addons-blog-posts-carousel-single-post-wrapper{
	box-shadow:none!important;
}
.mt-addons-blog-posts-carousel-date a{
	color:#fff;
	font-weight:400;
}
.mt-icon-listgroup-content-holder-inner .mt-icon-listgroup-title {
	font-weight:600!important;
}
.mt-addons-blog-posts-carousel-head-content{
	padding:25px 0px 10px!important;
}
embed, figure {
    margin-bottom: 0px!important;
}		</style>
</head>
<body class="page-template-default page page-id-714 page-child parent-pageid-1754      menu_sidebar_dropdown   elementor-default elementor-kit-129 elementor-page elementor-page-714">
<div id="page">
<a class="skip-link screen-reader-text" href="#meeek-site-content">Skip to content</a>
<a class="close is-size-medium  close-panel close-sidebar-panel" href="#">
<span class="hamburger hamburger--squeeze is-active">
<span class="hamburger-box">
<span class="hamburger-inner"><span class="screen-reader-text">Menu</span></span>
</span>
</span>
<span class="screen-reader-text">Close</span>
</a><header id="masthead" class="site-header header-v2"><div id="masthead-inner" class="site-header-inner"> <div class="header-top header--row" id="cb-row--header-top" data-row-id="top" data-show-on="desktop">
<div class="header--row-inner header-top-inner">
<div class="container">
<div class="row  cb-row--desktop hide-on-mobile hide-on-tablet meeek-grid-middle"><div class="row-v2 row-v2-top no-center"><div class="col-v2 col-v2-left"><div class="item--inner builder-item--logo" data-section="title_tagline" data-item-id="logo">
<div class="logo logo-image">
<a href="../../index.html"><img class="meeek-logo" src="wp-content/uploads/2023/05/meeek-logo-white.png" alt="Meeek" /></a><a href="../../index.html"><img class="meeek-logo-sticky" src alt="Meeek" /></a> </div>
</div></div><div class="col-v2 col-v2-right"><div class="item--inner builder-item--primary-menu has_menu" data-section="header_menu_primary" data-item-id="primary-menu"><nav id="site-navigation-top-desktop" class="container site-navigation primary-menu primary-menu-top nav-menu-desktop primary-menu-desktop style-plain"><ul id="menu-primary-navigation" class="primary-menu-ul menu nav-menu"><li id="menu-item--top-desktop-2910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-2910"><a href="../../index.html"><span class="link-before">Landing<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--top-desktop-1753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1753"><a href="../../index.html"><span class="link-before">Landing 1</span></a></li>
<li id="menu-item--top-desktop-2909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2909"><a href="../../landing-2/index.html"><span class="link-before">Landing 2</span></a></li>
</ul>
</li>
<li id="menu-item--top-desktop-117" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-117"><a href="../../index.html"><span class="link-before">Vertical Demos<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--top-desktop-1751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1751"><a href="../home/index.html"><span class="link-before">Home</span></a></li>
<li id="menu-item--top-desktop-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387"><a href="../home-art/index.html"><span class="link-before">Home Art</span></a></li>
<li id="menu-item--top-desktop-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494"><a href="../home-cartoon/index.html"><span class="link-before">Home Cartoon</span></a></li>
<li id="menu-item--top-desktop-565" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565"><a href="../home-menu/index.html"><span class="link-before">Home Menu</span></a></li>
<li id="menu-item--top-desktop-639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639"><a href="../home-colorful/index.html"><span class="link-before">Home Colorful</span></a></li>
<li id="menu-item--top-desktop-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-847"><a href="../home-chromatic/index.html"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--top-desktop-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="../home-socials/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--top-desktop-792" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-714 current_page_item menu-item-792"><a href="index.html" aria-current="page"><span class="link-before">Home Gradient</span></a></li>
</ul>
</li>
<li id="menu-item--top-desktop-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-386"><a href="../../horizontal-demos/home-horizontal/index.html"><span class="link-before">Horizontal Demos<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--top-desktop-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="../../horizontal-demos/home-horizontal/index.html"><span class="link-before">Home</span></a></li>
<li id="menu-item--top-desktop-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="../../horizontal-demos/home-art-horizontal/index.html"><span class="link-before">Home Art</span></a></li>
<li id="menu-item--top-desktop-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="../../horizontal-demos/home-cartoon-horizontal/index.html"><span class="link-before">Home Cartoon</span></a></li>
<li id="menu-item--top-desktop-564" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-564"><a href="../../horizontal-demos/home-menu-horizontal/index.html"><span class="link-before">Home Menu</span></a></li>
<li id="menu-item--top-desktop-638" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-638"><a href="../../horizontal-demos/home-colorful-horizontal/index.html"><span class="link-before">Home Colorful</span></a></li>
<li id="menu-item--top-desktop-846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-846"><a href="../../horizontal-demos/home-chromatic-horizontal/index.html"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--top-desktop-712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-712"><a href="../../horizontal-demos/home-socials-horizontal/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--top-desktop-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="../../horizontal-demos/home-gradient-horizontal/index.html"><span class="link-before">Home Gradient</span></a></li>
</ul>
</li>
<li id="menu-item--top-desktop-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="../../blog/index.html"><span class="link-before">Blog</span></a></li>
</ul></nav></div></div></div></div> </div>
</div>
</div>
<div class="header-main header--row" id="cb-row--header-main" data-row-id="main" data-show-on="mobile">
<div class="header--row-inner header-main-inner">
<div class="container">
<div class="cb-row--mobile hide-on-desktop row meeek-grid-middle"><div class="row-v2 row-v2-main no-center"><div class="col-v2 col-v2-left"><div class="item--inner builder-item--logo" data-section="title_tagline" data-item-id="logo">
<div class="logo logo-image">
<a href="../../index.html"><img class="meeek-logo" src="wp-content/uploads/2023/05/meeek-logo-white.png" alt="Meeek" /></a><a href="../../index.html"><img class="meeek-logo-sticky" src alt="Meeek" /></a> </div>
</div></div><div class="col-v2 col-v2-right"><div class="item--inner builder-item--search_icon" data-section="search_icon" data-item-id="search_icon"><div class="header-search_icon-item item--search_icon"> <a class="search-icon" href="#" aria-label="open search tool">
<span class="ic-search">
<svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
<path fill="currentColor" fill-rule="evenodd" d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z"></path>
</svg>
</span>
<span class="ic-close">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" fill="currentColor" style="enable-background:new 0 0 612 612;" xml:space="preserve"><g><g id="cross"><g><polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 306,341.411 576.521,611.397 612,575.997 341.459,306.011 " /></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
</span>
<span class="arrow-down"></span>
</a>
<div class="header-search-modal-wrapper">
<form role="search" class="header-search-modal header-search-form" action="https://meeek.modeltheme.com/">
<label>
<span class="screen-reader-text">Search for:</span>
<input type="hidden" name="post_type" value="post" />
<input type="search" class="search-field" placeholder="Search ..." value name="s" title="Search for:" />
</label>
<button type="submit" class="search-submit" aria-label="submit search">
<svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
<path fill="currentColor" fill-rule="evenodd" d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z"></path>
</svg>
</button>
</form>
</div>
</div></div><div class="item--inner builder-item--nav-icon" data-section="header_menu_icon" data-item-id="nav-icon"> <a class="menu-mobile-toggle item-button is-size-desktop-medium is-size-tablet-medium is-size-mobile-medium">
<span class="hamburger hamburger--squeeze">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</span>
</a>
</div></div></div></div> </div>
</div>
</div>
<div id="header-menu-sidebar" class="header-menu-sidebar menu-sidebar-panel"><div id="header-menu-sidebar-bg" class="header-menu-sidebar-bg"><div id="header-menu-sidebar-inner" class="header-menu-sidebar-inner"><div class="builder-item-sidebar mobile-item--html"><div class="item--inner" data-item-id="html" data-section="header_html"><div class="builder-header-html-item item--html">Add custom text here or remove it</div></div></div><div class="builder-item-sidebar mobile-item--search_box"><div class="item--inner" data-item-id="search_box" data-section="search_box"><div class="header-search_box-item item--search_box"> <form role="search" class="header-search-form " action="https://meeek.modeltheme.com/">
<div class="search-form-fields">
<span class="screen-reader-text">Search for:</span>
<input type="hidden" value="post" name="post_type" />
<input type="search" autocomplete="off" class="search-field" placeholder="Search in..." value name="s" title="Search for:" />
</div>
<button type="submit" class="search-submit" aria-label="Submit Search">
<svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
<path fill="currentColor" fill-rule="evenodd" d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z"></path>
</svg>
</button>
</form>
</div></div></div><div class="builder-item-sidebar mobile-item--primary-menu mobile-item--menu "><div class="item--inner" data-item-id="primary-menu" data-section="header_menu_primary"><nav id="site-navigation-sidebar-mobile" class="container site-navigation primary-menu primary-menu-sidebar nav-menu-mobile primary-menu-mobile style-plain"><ul id="menu-primary-navigation" class="primary-menu-ul menu nav-menu"><li id="menu-item--sidebar-mobile-2910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-2910"><a href="../../index.html"><span class="link-before">Landing<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--sidebar-mobile-1753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1753"><a href="../../index.html"><span class="link-before">Landing 1</span></a></li>
<li id="menu-item--sidebar-mobile-2909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2909"><a href="../../landing-2/index.html"><span class="link-before">Landing 2</span></a></li>
</ul>
</li>
<li id="menu-item--sidebar-mobile-117" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-117"><a href="../../index.html"><span class="link-before">Vertical Demos<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--sidebar-mobile-1751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1751"><a href="../home/index.html"><span class="link-before">Home</span></a></li>
<li id="menu-item--sidebar-mobile-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387"><a href="../home-art/index.html"><span class="link-before">Home Art</span></a></li>
<li id="menu-item--sidebar-mobile-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494"><a href="../home-cartoon/index.html"><span class="link-before">Home Cartoon</span></a></li>
<li id="menu-item--sidebar-mobile-565" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565"><a href="../home-menu/index.html"><span class="link-before">Home Menu</span></a></li>
<li id="menu-item--sidebar-mobile-639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639"><a href="../home-colorful/index.html"><span class="link-before">Home Colorful</span></a></li>
<li id="menu-item--sidebar-mobile-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-847"><a href="../home-chromatic/index.html"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--sidebar-mobile-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="../home-socials/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--sidebar-mobile-792" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-714 current_page_item menu-item-792"><a href="index.html" aria-current="page"><span class="link-before">Home Gradient</span></a></li>
</ul>
</li>
<li id="menu-item--sidebar-mobile-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-386"><a href="../../horizontal-demos/home-horizontal/index.html"><span class="link-before">Horizontal Demos<span class="nav-icon-angle">&nbsp;</span></span></a>
<ul class="sub-menu">
<li id="menu-item--sidebar-mobile-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="../../horizontal-demos/home-horizontal/index.html"><span class="link-before">Home</span></a></li>
<li id="menu-item--sidebar-mobile-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="../../horizontal-demos/home-art-horizontal/index.html"><span class="link-before">Home Art</span></a></li>
<li id="menu-item--sidebar-mobile-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="../../horizontal-demos/home-cartoon-horizontal/index.html"><span class="link-before">Home Cartoon</span></a></li>
<li id="menu-item--sidebar-mobile-564" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-564"><a href="../../horizontal-demos/home-menu-horizontal/index.html"><span class="link-before">Home Menu</span></a></li>
<li id="menu-item--sidebar-mobile-638" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-638"><a href="../../horizontal-demos/home-colorful-horizontal/index.html"><span class="link-before">Home Colorful</span></a></li>
<li id="menu-item--sidebar-mobile-846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-846"><a href="../../horizontal-demos/home-chromatic-horizontal/index.html"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--sidebar-mobile-712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-712"><a href="../../horizontal-demos/home-socials-horizontal/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--sidebar-mobile-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="../../horizontal-demos/home-gradient-horizontal/index.html"><span class="link-before">Home Gradient</span></a></li>
</ul>
</li>
<li id="menu-item--sidebar-mobile-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="../../blog/index.html"><span class="link-before">Blog</span></a></li>
</ul></nav></div></div><div class="builder-item-sidebar mobile-item--social-icons"><div class="item--inner" data-item-id="social-icons" data-section="header_social_icons"><ul class="header-social-icons meeek-builder-social-icons color-default"><li><a class="social-icon-facebook shape-circle" rel="nofollow noopener" target="_blank" href="#" aria-label="Facebook"><i class="icon fa fa-facebook" title="Facebook"></i></a></li><li><a class="social-icon-twitter shape-circle" rel="nofollow noopener" target="_blank" href="#" aria-label="Twitter"><i class="icon fa fa-twitter" title="Twitter"></i></a></li><li><a class="social-icon-youtube-play shape-circle" rel="nofollow noopener" target="_blank" href="#" aria-label="Youtube"><i class="icon fa fa-youtube-play" title="Youtube"></i></a></li><li><a class="social-icon-instagram shape-circle" rel="nofollow noopener" target="_blank" href="#" aria-label="Instagram"><i class="icon fa fa-instagram" title="Instagram"></i></a></li><li><a class="social-icon-pinterest shape-circle" rel="nofollow noopener" target="_blank" href="#" aria-label="Pinterest"><i class="icon fa fa-pinterest" title="Pinterest"></i></a></li></ul></div></div><div class="builder-item-sidebar mobile-item--button"><div class="item--inner" data-item-id="button" data-section="header_button"><a target="_blank" href="https://themeforest.net/" class="item--button meeek-btn meeek-builder-btn is-icon-before">Purchase Theme</a></div></div></div></div></div></div></header> <div id="meeek-site-content">
<div>
<div>
<div id="primary" class="high-padding content-area no-sidebar">
<div class="container">
<main class="col-md_12 site-main main-content">
<article id="post-714" class="post-714 page type-page status-publish hentry">
<div class="entry-content">
<div data-elementor-type="wp-page" data-elementor-id="714" class="elementor elementor-714">
<section class="elementor-section elementor-top-section elementor-element elementor-element-546e21d elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="546e21d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-99e9c51" data-id="99e9c51" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-ffccaec elementor-invisible elementor-widget elementor-widget-about me" data-id="ffccaec" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="about me.default">
<div class="elementor-widget-container">

<div class="meeek-about-me-container">
<div class="meeek-about-me-img-holder" style="text-align:center">
<img decoding="async" src="wp-content/uploads/2023/05/influencer-marketing.png" width="150px" height="150px">
</div>
<div class="meeek-about-me-content">
<div class="meeek-about-me-inner-content">
<h2 class="meeek-about-me-title" style="text-align:center">
Abigail </h2>
<p class="meeek-about-me-description" style="text-align:center">
Sharing my personal life with my community 😀 </p>
</div>
</div>
</div>

</div>
</div>
<div class="elementor-element elementor-element-37aee25 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-bio links" data-id="37aee25" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="bio links.default">
<div class="elementor-widget-container">

<div class="meeek-bio-links-container meeek-bio-links-container-v8">
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-img-holder">
<img decoding="async" src="wp-content/uploads/2023/05/facebook.png" alt="my-image"> </div>
<div class="meeek-bio-links-description">
Facebook </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button" style="background:#1877F2">
Buy now <div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a target="_blank" href="https://www.facebook.com/modeltheme">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-img-holder">
<img decoding="async" src="wp-content/uploads/2023/05/instagram.png" alt="my-image"> </div>
<div class="meeek-bio-links-description">
Instagram </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button" style="background:#CC2590">
Quality photos <div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a target="_blank" href="https://www.instagram.com/modeltheme/">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-img-holder">
<img decoding="async" src="wp-content/uploads/2023/05/twitter.png" alt="my-image"> </div>
<div class="meeek-bio-links-description">
Twitter </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button" style="background:#1DA1F2">
Contact me <div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a target="_blank" href="https://twitter.com/modeltheme">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-img-holder">
<img decoding="async" src="wp-content/uploads/2023/05/discord.png" alt="my-image"> </div>
<div class="meeek-bio-links-description">
Discord </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button" style="background:#5865F2">
Let&#039;s chat <div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a target="_blank" href="https://discord.com/">
</a>
</div>
<div class="meeek-bio-links-inner-header">
<h3 class="meeek-bio-links-inner-header-text" style="text-align:center">What’s New</h3>
</div>
<div class="meeek-bio-links-inner-paypal meeek-bio-links-inner-paypal-v8">
<div class="meeek-bio-links-paypal">
<i class="fab fa-paypal"></i>
Donate with Paypal <a target="_blank" href="https://www.paypal.com/">
</a>
</div>
</div>
<div class="meeek-bio-links-inner-venmo meeek-bio-links-inner-venmo-v8">
<div class="meeek-bio-links-venmo">
<svg class="meeek-bio-links-venmo-image" fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.6C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.8,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM278,387H174.32L132.75,138.44l90.75-8.62,22,176.87c20.53-33.45,45.88-86,45.88-121.87,0-19.62-3.36-33-8.61-44L365.4,124.1c9.56,15.78,13.86,32,13.86,52.57C379.25,242.17,323.34,327.26,278,387Z" /></svg>
Donate with Venmo <a target="_blank" href="http://www.venmo.com/">
</a>
</div>
</div>
<div class="meeek-bio-links-inner-phone meeek-bio-links-inner-phone-v8">
<div class="meeek-bio-links-phone">
<i class="fas fa-phone"></i>
<u>+1-541-754-3010</u>
<a href="tel:+1-541-754-3010">
</a>
</div>
</div>
</div>

</div>
</div>
<div class="elementor-element elementor-element-b637f25 elementor-invisible elementor-widget elementor-widget-social media links" data-id="b637f25" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="social media links.default">
<div class="elementor-widget-container">

<div class="meeek-social-media-links-alignment" style="text-align:center">
<div class="meeek-social-media-links-container">
<div class="meeek-social-media-links-inner-container">
<a class="meeek-icon-link" target="_blank" href="https://www.facebook.com/modeltheme">
<i aria-hidden="true" class="fab fa-facebook"></i> </a>
</div>
<div class="meeek-social-media-links-inner-container">
<a class="meeek-icon-link" target="_blank" href="https://www.instagram.com/modeltheme/">
<i aria-hidden="true" class="fab fa-instagram"></i> </a>
</div>
<div class="meeek-social-media-links-inner-container">
<a class="meeek-icon-link" target="_blank" href="https://twitter.com/modeltheme">
<i aria-hidden="true" class="fab fa-twitter-square"></i> </a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="clearfix"></div>
</div>
</article>
</main>
</div>
</div> </div>
</div>
</div>
</div>
<div class="ctm-multi   ">
<button class="ctm-bubble circle-bubble circle-animation-1 ">
<span class="open-icon"><i class="far fa-envelope"></i></span>
<span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
</button> <div class="example_popup ctm-multi__popup animation5">
<div class="ctm-multi__popup--header">
<h3 class="title">Need Help?</h3>
<p class="subtitle">Choose a Department</p>
</div>
<div class="ctm-multi__popup--content" id="multi-user">
<div class="ctm__popup--content ctm__popup--content_mt">
<div class="sms">
<div class="sms__user">
<img src="../../../modeltheme.com/apple-icon.png" />
</div>
<div class="sms__text">
<p>
Hello and welcome to ModelTheme. </p>
</div>
</div>
</div>
<div class="search">
<input id="search-input" onkeyup="searchUser()" type="text" placeholder="Search" />
</div>
<div class="users">
<div data-timezone="presalequestionsEurope/Bucharest" class="user ctmUserAvailability" data-ctmUserAvailability="{ &quot;sunday&quot;:&quot;0:00-23:59&quot;, &quot;monday&quot;:&quot;0:00-23:59&quot;, &quot;tuesday&quot;:&quot;0:00-23:59&quot;, &quot;wednesday&quot;:&quot;0:00-23:59&quot;, &quot;thursday&quot;:&quot;0:00-23:59&quot;, &quot;friday&quot;:&quot;0:00-23:59&quot;, &quot;saturday&quot;:&quot;0:00-23:59&quot; }">
<div class="user__image">
<img src="../../../modeltheme.com/wp-content/uploads/2019/01/presale.png" alt="Presale Questions" />
</div>
<div class="user__info">
<h5 class="user__info--name">Presale Questions</h5>
<p class="user__info--title">Ask us about a feature!</p>
<p class="user__info--online">I am online</p>
<p class="user__info--offline">I am offline</p>
</div>
<a class="mailtoui" href="../../cdn-cgi/l/email-protection.html#7201131e1701321f1d16171e061a171f175c111d1f4d010710181711064f3f1d16171e261a171f175c111d1f48523b1c0106131c065222001701131e175223071701061b1d1c5411114f541011114f54101d160b4f3f0b521c131f17521b0148522d2d2d2d2d2d2d2d2d2d2d2d2d2d2d52131c16523b545142414b491f521e1d1d191b1c1552141d0048522d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d5c52574236574233574236574233574236574233341d001f520107101f1b060617165214001d1f48521a06060201485d5d1f171717195c1f1d16171e061a171f175c111d1f5d041700061b11131e5f16171f1d015d1a1d1f175f150013161b171c065d"></a>
</div>
<div data-timezone="customdevelopmentEurope/Bucharest" class="user ctmUserAvailability" data-ctmUserAvailability="{ &quot;sunday&quot;:&quot;0:00-23:59&quot;, &quot;monday&quot;:&quot;0:00-23:59&quot;, &quot;tuesday&quot;:&quot;0:00-23:59&quot;, &quot;wednesday&quot;:&quot;0:00-23:59&quot;, &quot;thursday&quot;:&quot;0:00-23:59&quot;, &quot;friday&quot;:&quot;0:00-23:59&quot;, &quot;saturday&quot;:&quot;0:00-23:59&quot; }">
<div class="user__image">
<img src="../../../modeltheme.com/wp-content/uploads/2019/01/dev.png" alt="Custom Development" />
</div>
<div class="user__info">
<h5 class="user__info--name">Custom Development</h5>
<p class="user__info--title">Hire us today</p>
<p class="user__info--online">I am online</p>
<p class="user__info--offline">I am offline</p>
</div>
<a class="mailtoui" href="../../cdn-cgi/l/email-protection.html#3744565b5244775a5853525b435f525a521954585a084442555d5254430a7a5853525b635f525a521954585a0d177e59444356594317605255445e43521774424443585a5e4d56435e585917655246425244431154540a115554540a115558534e0a7a4e1759565a52175e440d1768686868686868686868686868686817565953177e111407040e0c5a175b58585c5e5950175158450d17686868686868686868686868686868686868681917635f521755425350524317515845175a4e174745585d525443175e4417686868686868686868686868686819171f76174745585d5254431755455e52511754565917565b44581755521756434356545f525317435817435f5e4417525a565e5b1e191207731207761207731207761207731207767158455a174442555a5e43435253175145585a0d175f434347440d18185a5252525c195a5853525b435f525a521954585a18415245435e54565b1a53525a5844185f585a521a504556535e52594318"></a>
</div>
<div data-timezone="itemsupportEurope/Bucharest" class="user ctmUserAvailability" data-ctmUserAvailability="{ &quot;sunday&quot;:&quot;0:00-23:59&quot;, &quot;monday&quot;:&quot;0:00-23:59&quot;, &quot;tuesday&quot;:&quot;0:00-23:59&quot;, &quot;wednesday&quot;:&quot;0:00-23:59&quot;, &quot;thursday&quot;:&quot;0:00-23:59&quot;, &quot;friday&quot;:&quot;0:00-23:59&quot;, &quot;saturday&quot;:&quot;0:00-23:59&quot; }">
<div class="user__image">
<img src="../../../modeltheme.com/wp-content/uploads/2019/01/support.png" alt="Item  Support" />
</div>
<div class="user__info">
<h5 class="user__info--name">Item Support</h5>
<p class="user__info--title">Get Personal Assistance</p>
<p class="user__info--online">I am online</p>
<p class="user__info--offline">I am offline</p>
</div>
<a class href="https://modeltheme.com/support/#new-inquiry"></a>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
 function fetch_products(){
  
     jQuery.ajax({
        url: 'https://meeek.modeltheme.com/wp-admin/admin-ajax.php',
        type: 'post',
        data: { action: 'mt_addons_search_form_data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>
<div class="mt_skin_switcher">
<div id="demopanel">
<div id="panel" style="right: -300px; ">
<h3 class="text-bold">Background Color</h3>
<p>Testdrive the Look&Feel.</p>
<div class="colors_buttons">
<span data-skin="#c8f2da" class="skin-color-0 currentStyle"></span>
<span data-skin="#c8edf2" class="skin-color-1"></span>
<span data-skin="#d1d6f4" class="skin-color-2"></span>
<span data-skin="#d8c0f0" class="skin-color-3"></span>
<span data-skin="#f2c8ee" class="skin-color-4"></span>
<span data-skin="#f2c8da" class="skin-color-5"></span>
<span data-skin="#f0c6c0" class="skin-color-6"></span>
<span data-skin="#efd4b8" class="skin-color-7"></span>
<span data-skin="#f2ebc8" class="skin-color-8"></span>
<span data-skin="#e6f0c0" class="skin-color-9"></span>
<span data-skin="#d7f2c8" class="skin-color-10"></span>
<span data-skin="#d1f4dd" class="skin-color-11"></span>
<span data-skin="#c8f2ef" class="skin-color-12"></span>
<span data-skin="#eaeaea" class="skin-color-13"></span>
<span data-skin="#e4dbff" class="skin-color-14"></span>
<button class="reset-switcher"><i class="fas fa-times"></i> Reset styling</button>
</div>
<div class="clearfix"></div>
<div class="spacer_40"></div>
<h3 class="text-bold">Background Images</h3>
<p>Testdrive the Look&Feel.</p>
<div class="nav_imgs_buttons">
<div class="data_background default-bg currentStyle" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg1.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg1.jpg');" data-bg-class="menu-background-default"></div>
<div class="data_background" data-bg-class="menu-background-img01" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg2.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg2.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img02" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg3.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg3.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img03" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg4.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg4.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img04" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg5.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg5.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img05" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg6.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg6.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img06" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg7.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg7.jpg');"></div>
<div class="data_background" data-bg-class="menu-background-img07" data-background="https://meeek.modeltheme.com/wp-content/themes/meeek-child/mt-skin-switcher/skins/bg8.jpg" style="background-image: url('wp-content/themes/meeek-child/mt-skin-switcher/skins/bg8.jpg');"></div>
<button class="reset-switcher"><i class="fas fa-times"></i> Reset styling</button>
</div>
<div class="clearfix"></div>
<div class="spacer_40"></div>
<h3 class="text-bold">Vertical Style</h3>
<p>Choose between 7x Unique Vertical Layout Demos</p>
<div class="template_demo">

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_00_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Watercolors</h3>
<a href="../../index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_01_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Artist</h3>
<a href="../../home-art/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_02_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Cartoon</h3>
<a href="../../home-cartoon/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_03_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Restaurant Menu</h3>
<a href="../../home-menu/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_04_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Colorful</h3>
<a href="../../home-colorful/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_05_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Chromatic</h3>
<a href="../../home-chromatic/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_06_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Influencer</h3>
<a href="../../home-socials/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_07_vertical.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Gradient</h3>
<a href="../../home-gradient/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_50"></div>
</div>
<div class="clearfix"></div>
<div class="spacer_40"></div>
<h3 class="text-bold">Horizontal Style</h3>
<p>Choose between 7x Unique horizontal Layout Demos</p>
<div class="template_demo">

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_00_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Watercolors</h3>
<a href="../../home-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_01_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Artist</h3>
<a href="../../home-art-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_02_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Cartoon</h3>
<a href="../../home-cartoon-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_03_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Restaurant Menu</h3>
<a href="../../home-menu-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_04_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Colorful</h3>
<a href="../../home-colorful-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_05_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Chromatic</h3>
<a href="../../home-chromatic-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_06_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Influencer</h3>
<a href="../../home-socials-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_20"></div>
<div class="clearfix"></div>

<div class="template_demo_item">
<img src="wp-content/themes/meeek-child/mt-skin-switcher/demos/demo_07_horizontal.jpg" alt="demo" />
<div class="template_demo_item_overlay">
<div class="template_demo_item_overlay_inner">
<h3>Gradient</h3>
<a href="../../home-gradient-horizontal/index.html">Launch Demo</a>
</div>
</div>
</div>
<div class="spacer_50"></div>
</div>
</div>
<div style="display: block; right: 0px;" class="panel_button show-button">

<a href="#" class="toggle_sidebar" title="Start Configuration">
<i class="fas fa-cogs"></i>
<span>DEMOS</span>
</a>
<div class="clearfix"></div>

<a target="_blank" href="https://docs.modeltheme.com/meeek-plugin/" title="Documentation">
<i class="fas fa-book"></i>
<span>DOCS</span>
</a>
<div class="clearfix"></div>

<a target="_blank" href="https://modeltheme.com/support/#new-inquiry" title="Customer Support">
<i class="fas fa-life-ring"></i>
<span>HELP</span>
</a>
<div class="clearfix"></div>

<a target="_blank" href="#" data-toggle="tooltip" title="Purchase Meeek" data-placement="left" data-bs-toggle="modal" data-bs-target="#mt-purchase-modal">
<i class="fas fa-shopping-basket"></i>
<span>BUY</span>
</a>
<div class="clearfix"></div>
</div>
<div style="display: none; right: 0px;" class="panel_button hide_button">
<i class="fas fa-times"></i>
<span>CLOSE</span>
</div>
</div>
</div>

<div class="modal fade" id="mt-purchase-modal" tabindex="-1" aria-labelledby="mt-purchase-modalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="mt-purchase-modalLabel">Purchase Meeek</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-6 col-sm-12 mt-single-market-item">
<div class="relative">
<a href="https://themeforest.net/item/meeek-bio-links-builder-theme/46157759"><img src="../../../s3.envato.com/files/452750446/meeek_screenshots/001_Main_Preview.jpg" alt="Meeek - WordPress Theme" /></a>
<span class="mt-item-badge mt-item-theme"><del>$59</del> <ins>$37</ins></span>
</div>
<h4 class="mt-item-title"><a href="https://themeforest.net/item/meeek-bio-links-builder-theme/46157759">Meeek Theme</a> (*Meeek Plugin Included)</h4>
<div class="mt-addons_button_holder text-left btn-rounded inline-block ">
<a data-text-color="#231F20" data-text-color-hover="#231F20" data-bg="#FFFFFF" data-bg-hover="#DDDDDD" target="_blank" rel href="https://themeforest.net/item/meeek-bio-links-builder-theme/46157759" class="mt-addons_button mt-addons-btn-extra-large" data-border="2px solid " data-border-hover="2px solid " style="font-size: 14px; font-weight: 500; background: rgb(255, 255, 255); color: rgb(35, 31, 32); border: 2px solid; box-shadow: rgb(0, 0, 0) 5px 5px 1px; padding: 8px 15px; display: inline-block;">Purchase Now</a>
</div>
</div>
<div class="col-md-6 col-sm-12 mt-single-market-item">
<div class="relative">
<a href="https://codecanyon.net/item/meeek-bio-links-builder-for-wordpress/45860914"><img src="../../../s3.envato.com/files/450599335/meeek_screenshots/001_Main_Preview.jpg" alt="Meeek - WordPress Plugin" /></a>
<span class="mt-item-badge mt-item-plugin"><del>$49</del> <ins>$37</ins></span>
</div>
<h4 class="mt-item-title"><a href="https://codecanyon.net/item/meeek-bio-links-builder-for-wordpress/45860914">Meeek Plugin</a></h4>
<div class="mt-addons_button_holder text-left btn-rounded inline-block ">
<a data-text-color="#231F20" data-text-color-hover="#231F20" data-bg="#FFFFFF" data-bg-hover="#DDDDDD" target="_blank" rel href="https://codecanyon.net/item/meeek-bio-links-builder-for-wordpress/45860914" class="mt-addons_button mt-addons-btn-extra-large" data-border="2px solid " data-border-hover="2px solid " style="font-size: 14px; font-weight: 500; background: rgb(255, 255, 255); color: rgb(35, 31, 32); border: 2px solid; box-shadow: rgb(0, 0, 0) 5px 5px 1px; padding: 8px 15px; display: inline-block;">Purchase Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php 
	} else {		
	if ($sspag==""){
	//███ SUB-PAGINA █████████████████████████████████████████████████████████████
	?>

	<?php 
	//███ SUB-PAGINA █████████████████████████████████████████████████████████████
	} else {
	if ($ssspag==""){
	//███ SUBSUB-PAGINA ██████████████████████████████████████████████████████████
	} else {
	if ($sssspag==""){
	//███ SUBSUBSUB-PAGINA ███████████████████████████████████████████████████████
	
	} else {
	//███ SUBSUBSUBSUB-PAGINA ████████████████████████████████████████████████████
	}
	}
	}
	}
}

///////////////////////////////
// EJECUCIÓN DE AJAX 
///////////////////////////////	


/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////

