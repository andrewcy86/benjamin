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

<body <?php body_class(array( "html", "wide-template" )); ?>>


<a class="usa-skipnav" href="#primary">
    <?php esc_html_e( 'Skip to main content', 'benjamin' ); ?>
</a>


<div class="usa-overlay"></div>

<?php

    benjamin_the_header();
