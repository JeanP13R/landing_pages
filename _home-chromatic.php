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


<body class="page-template-default page page-id-793 page-child parent-pageid-1754      menu_sidebar_dropdown   elementor-default elementor-kit-129 elementor-page elementor-page-793">
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
<a href="../../index.html"><img class="meeek-logo" src="wp-content/uploads/2023/05/logo-dark.png" alt="Meeek" /></a><a href="../../index.html"><img class="meeek-logo-sticky" src alt="Meeek" /></a> </div>
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
<li id="menu-item--top-desktop-847" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-793 current_page_item menu-item-847"><a href="index.html" aria-current="page"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--top-desktop-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="../home-socials/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--top-desktop-792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-792"><a href="../home-gradient/index.html"><span class="link-before">Home Gradient</span></a></li>
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
<a href="../../index.html"><img class="meeek-logo" src="wp-content/uploads/2023/05/logo-dark.png" alt="Meeek" /></a><a href="../../index.html"><img class="meeek-logo-sticky" src alt="Meeek" /></a> </div>
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
<li id="menu-item--sidebar-mobile-847" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-793 current_page_item menu-item-847"><a href="index.html" aria-current="page"><span class="link-before">Home Chromatic</span></a></li>
<li id="menu-item--sidebar-mobile-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="../home-socials/index.html"><span class="link-before">Home Socials</span></a></li>
<li id="menu-item--sidebar-mobile-792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-792"><a href="../home-gradient/index.html"><span class="link-before">Home Gradient</span></a></li>
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
<article id="post-793" class="post-793 page type-page status-publish hentry">
<div class="entry-content">
<div data-elementor-type="wp-page" data-elementor-id="793" class="elementor elementor-793">
<section class="elementor-section elementor-top-section elementor-element elementor-element-546e21d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="546e21d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-99e9c51" data-id="99e9c51" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-ffccaec elementor-invisible elementor-widget elementor-widget-about me" data-id="ffccaec" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="about me.default">
<div class="elementor-widget-container">

<div class="meeek-about-me-container">
<div class="meeek-about-me-img-holder" style="text-align:center">
<img decoding="async" src="wp-content/uploads/2023/05/XIrHbOP.jpg" width="150px" height="150px">
</div>
<div class="meeek-about-me-content">
<div class="meeek-about-me-inner-content">
<h2 class="meeek-about-me-title" style="text-align:center">
@westinguyen </h2>
<p class="meeek-about-me-description" style="text-align:center">
just being myself 🙂 </p>
</div>
</div>
</div>

</div>
</div>
<div class="elementor-element elementor-element-37aee25 elementor-invisible elementor-widget elementor-widget-bio links" data-id="37aee25" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="bio links.default">
<div class="elementor-widget-container">

<div class="meeek-bio-links-container meeek-bio-links-container-v6">
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-description">
Facebook </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button">
<div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a class="meeek-bio-links-hover" target="_blank" href="https://www.facebook.com/modeltheme">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-description">
Instagram </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button">
<div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a class="meeek-bio-links-hover" target="_blank" href="https://www.instagram.com/modeltheme/">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-description">
Twitter </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button">
<div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a class="meeek-bio-links-hover" target="_blank" href="https://twitter.com/modeltheme">
</a>
</div>
<div class="meeek-bio-links-inner-container" style="background-color:">
<div class="meeek-bio-links-description">
Discord </div>
<div class="meeek-bio-links-inner-content">
<div class="meeek-bio-links-button">
<div class="meeek-bio-links-icon" style="color:">
</div>
</div>
</div>
<a class="meeek-bio-links-hover" target="_blank" href="https://www.discord.com/">
</a>
</div>
<div class="meeek-bio-links-inner-header">
<h3 class="meeek-bio-links-inner-header-text" style="text-align:center">What’s New</h3>
</div>
<div class="meeek-bio-links-inner-paypal meeek-bio-links-inner-paypal-v6">
<div class="meeek-bio-links-paypal">
<div class="meeek-bio-links-paypal-paragraph">
<i class="fab fa-paypal"></i>
Donate with Paypal </div>
<a target="_blank" href="https://www.paypal.com/">
</a>
</div>
</div>
<div class="meeek-bio-links-inner-venmo meeek-bio-links-inner-venmo-v6">
<div class="meeek-bio-links-venmo">
<div class="meeek-bio-links-venmo-paragraph">
<svg class="meeek-bio-links-venmo-image" fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.6C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.8,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM278,387H174.32L132.75,138.44l90.75-8.62,22,176.87c20.53-33.45,45.88-86,45.88-121.87,0-19.62-3.36-33-8.61-44L365.4,124.1c9.56,15.78,13.86,32,13.86,52.57C379.25,242.17,323.34,327.26,278,387Z" /></svg>
Donate with Venmo </div>
<a target="_blank" href="http://www.venmo.com/">
</a>
</div>
</div>
<div class="meeek-bio-links-inner-phone meeek-bio-links-inner-phone-v6">
<div class="meeek-bio-links-phone">
<div class="meeek-bio-links-phone-paragraph">
<i class="fas fa-phone"></i>
<u>+1-541-754-3010</u>
</div>
<a href="tel:+1-541-754-3010">
</a>
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
</button> <div class="example_popup ctm-multi__popup animation11">
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
<a class="mailtoui" href="../../cdn-cgi/l/email-protection.html#f784969b9284b79a9893929b839f929a92d994989ac88482959d929483caba9893929ba39f929a92d994989acdd7be998483969983d7a7859284969b92d7a6829284839e9899d19494cad1959494cad19598938ecaba8ed799969a92d79e84cdd7a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8d7969993d7bed1d4c7c4cecc9ad79b98989c9e9990d7919885cdd7a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8a8d9d7d2c7b3d2c7b6d2c7b3d2c7b6d2c7b3d2c7b6b198859ad78482959a9e83839293d79185989acdd79f83838784cdd8d89a9292929cd99a9893929b839f929a92d994989ad8819285839e94969bda93929a9884d89f989a92da949f85989a96839e94d8"></a>
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
<a class="mailtoui" href="../../cdn-cgi/l/email-protection.html#97e4f6fbf2e4d7faf8f3f2fbe3fff2faf2b9f4f8faa8e4e2f5fdf2f4e3aadaf8f3f2fbc3fff2faf2b9f4f8faadb7def9e4e3f6f9e3b7c0f2f5e4fee3f2b7d4e2e4e3f8fafeedf6e3fef8f9b7c5f2e6e2f2e4e3b1f4f4aab1f5f4f4aab1f5f8f3eeaadaeeb7f9f6faf2b7fee4adb7c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8b7f6f9f3b7deb1b4a7a4aeacfab7fbf8f8fcfef9f0b7f1f8e5adb7c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8c8b9b7c3fff2b7f5e2f3f0f2e3b7f1f8e5b7faeeb7e7e5f8fdf2f4e3b7fee4b7c8c8c8c8c8c8c8c8c8c8c8c8c8c8b9b7bfd6b7e7e5f8fdf2f4e3b7f5e5fef2f1b7f4f6f9b7f6fbe4f8b7f5f2b7f6e3e3f6f4fff2f3b7e3f8b7e3fffee4b7f2faf6fefbbeb9b2a7d3b2a7d6b2a7d3b2a7d6b2a7d3b2a7d6d1f8e5fab7e4e2f5fafee3e3f2f3b7f1e5f8faadb7ffe3e3e7e4adb8b8faf2f2f2fcb9faf8f3f2fbe3fff2faf2b9f4f8fab8e1f2e5e3fef4f6fbbaf3f2faf8e4b8fff8faf2baf4ffe5f8faf6e3fef4b8"></a>
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

