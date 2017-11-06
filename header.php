<?php benjamin_template_settings(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src="//www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);})(window,document,"script","dataLayer","GTM-L8ZB");</script>
  <!-- End Google Tag Manager -->  
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<a class="usa-skipnav" href="#primary">
    <?php esc_html_e( 'Skip to main content', 'benjamin' ); ?>
</a>


<div class="usa-overlay"></div>

  	<section class="main-content clearfix" id="main-content" lang="en" role="main" tabindex="-1">
		<div class="region-preface clearfix">
			<div class="block-views-revision-hublinks-block" id="block-views-revision-hublinks-block">
				<div class="view view-revision-hublinks view-id-revision_hublinks">
					<span class="related-info"><strong>Related Topics:</strong></span>
					<ul class="menu pipeline">
						<li class="menu-item"><a href="/environmental-topics">Environmental Topics</a></li>
					</ul>
				</div>
			</div>
			<div class="block block-pane block-pane-epa-web-area-connect" id="block-pane-epa-web-area-connect">
				<ul class="menu utility-menu">
					<li class="menu-item"><a class="menu-link" href="{CONTACT URL}">Contact Us</a></li>
				</ul>
			</div>
		</div>
    <div class="main-column clearfix">
      
<main id="main-content" role="main">

<?php

    benjamin_the_header();
