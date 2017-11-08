<!DOCTYPE html>
<html class="js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="ImageToolbar" content="false" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="HandheldFriendly" content="true" />
  <link rel="shortcut icon" href="https://www.epa.gov/sites/all/themes/epa/favicon.ico" type="image/vnd.microsoft.icon" />
  <meta name="MobileOptimized" content="width" />
  <meta name="viewport" content="width=device-width" />
  <!--googleon: all-->
  <meta name="DC.description" content="" />
  <meta name="DC.title" content="" />
  <!--googleoff: snippet-->
  <meta name="keywords" content="" />
  <link rel="canonical" href="" />
  <link rel="shortlink" href="" />
  <meta name="DC.language" content="en" />
  <meta name="DC.Subject.epachannel" content="" />
  <meta name="DC.type" content="" />
  <meta name="DC.Subject.epaopt" content="" />
  <meta name="DC.date.created" content="" />
  <meta name="DC.date.modified" content="" />
  <meta name="DC.date.reviewed" content="" />
  <meta name="DC.creator" content="" />
  <title>API Documentation - Developer Central | US EPA</title>
  <!--googleoff: all-->
  <link rel="stylesheet" href="/wp-content/themes/benjamin/assets/css/epa_style.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/benjamin/swagger/swagger-ui.css" >
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src="//www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);})(window,document,"script","dataLayer","GTM-L8ZB");</script>
  <!-- End Google Tag Manager -->  
   <style>
    html
    {
      box-sizing: border-box;
      overflow: -moz-scrollbars-vertical;
      overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
      box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
  </style>
</head>
<body class="html">
  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-L8ZB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager -->  
	<header class="masthead clearfix" role="banner">
		<img alt="" class="site-logo" src="https://www.epa.gov/sites/all/themes/epa/logo.png">
		<div class="site-name-and-slogan">
			<h1 class="site-name"><a href="https://www.epa.gov/" rel="home" title="Go to the home page"><span>US EPA</span></a></h1>
			<div class="site-slogan">United States Environmental Protection Agency</div>
		</div>
		<div class="region-header">
			<div class="block-epa-core-gsa-epa-search" id="block-epa-core-gsa-epa-search">
				<form action="https://search.epa.gov/epasearch/epasearch" class="epa-search" method="get">
					<label class="element-hidden" for="search-box">Search</label>
          <input class="form-text" id="search-box" name="querytext" placeholder="Search EPA.gov" value="">
          <button class="epa-search-button" id="search-button" title="Search" type="submit">Search</button>
          <input name="areaname" type="hidden" value="">
          <input name="areacontacts" type="hidden" value="">
          <input name="areasearchurl" type="hidden" value="">
          <input name="typeofsearch" type="hidden" value="epa">
          <input name="result_template" type="hidden" value="2col.ftl">
				</form>
			</div>
		</div>
	</header>
	<nav class="nav main-nav clearfix" role="navigation">
		<div class="nav__inner">
			<h2 class="element-invisible">Main menu</h2>
			<ul class="menu" role="menu">
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/environmental-topics" role="menuitem" title="Learn about Environmental Topics that EPA covers.">Environmental Topics</a></li>
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/laws-regulations" role="menuitem" title="Laws written by Congress provide the authority for EPA to write regulations. Regulations explain the technical, operational, and legal details necessary to implement laws.">Laws &amp; Regulations</a></li>
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/aboutepa" role="menuitem" title="Learn more about our mission and what we do, how we are organized, and our history.">About EPA</a></li>
			</ul>
		</div>
	</nav>
	<div class="mobile-nav" id="mobile-nav">
		<div class="mobile-bar clearfix">
			<label class="menu-button" for="mobile-nav-toggle">Menu</label>
		</div>
    <input checked id="mobile-nav-toggle" type="checkbox">
		<div class="mobile-links element-hidden" id="mobile-links" style="height:2404px;">
			<ul class="mobile-menu">
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/environmental-topics" role="menuitem" title="Learn about Environmental Topics that EPA covers.">Environmental Topics</a></li>
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/laws-regulations" role="menuitem" title="Laws written by Congress provide the authority for EPA to write regulations. Regulations explain the technical, operational, and legal details necessary to implement laws.">Laws &amp; Regulations</a></li>
				<li class="menu-item" role="presentation"><a class="menu-link" href="https://www.epa.gov/aboutepa" role="menuitem" title="Learn more about our mission and what we do, how we are organized, and our history.">About EPA</a></li>
			</ul>
		</div>
	</div>
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
      <!--googleon:all-->
      <div class="panel-pane pane-node-content">
        <div class="pane-content">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:absolute;width:0;height:0">
  <defs>
    <symbol viewBox="0 0 20 20" id="unlocked">
          <path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z"></path>
    </symbol>

    <symbol viewBox="0 0 20 20" id="locked">
      <path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="close">
      <path d="M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="large-arrow">
      <path d="M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="large-arrow-down">
      <path d="M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z"/>
    </symbol>


    <symbol viewBox="0 0 24 24" id="jump-to">
      <path d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z"/>
    </symbol>

    <symbol viewBox="0 0 24 24" id="expand">
      <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
    </symbol>

  </defs>
</svg>

<div id="swagger-ui"></div>

<script src="/wp-content/themes/benjamin/swagger/swagger-ui-bundle.js"> </script>
<script src="/wp-content/themes/benjamin/swagger/swagger-ui-standalone-preset.js"> </script>
<script>
window.onload = function() {
  
  // Build a system
  const ui = SwaggerUIBundle({
    url: "<?php $swagger_url = get_post_meta($post->ID, 'Swagger URL', true); if ($swagger_url) {  ?><?php echo $swagger_url;?><?php } ?>",
    dom_id: '#swagger-ui',
    deepLinking: true,
    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],
    plugins: [
      SwaggerUIBundle.plugins.DownloadUrl
    ],
    layout: "StandaloneLayout"
  })

  window.ui = ui
}
</script>
        </div>
      </div>
    </div>
	</section>
	<footer class="main-footer clearfix" role="contentinfo">
		<div class="main-footer__inner">
			<div class="region-footer">
				<div class="block-pane-epa-global-footer" id="block-pane-epa-global-footer">
					<div class="row cols-3">
						<div class="col size-1of3">
							<div class="col__title">
								Discover.
							</div>
							<ul class="menu">
								<li><a href="https://www.epa.gov/accessibility">Accessibility</a></li>
								<li><a href="https://www.epa.gov/aboutepa/epas-administrator">EPA Administrator</a></li>
								<li><a href="https://www.epa.gov/planandbudget">Budget &amp; Performance</a></li>
								<li><a href="https://www.epa.gov/contracts">Contracting</a></li>
								<li><a href="https://www.epa.gov/home/grants-and-other-funding-opportunities">Grants</a></li>
								<li><a href="https://19january2017snapshot.epa.gov">January 19, 2017 Web Snapshot</a></li>
								<li><a href="https://www.epa.gov/ocr/whistleblower-protections-epa-and-how-they-relate-non-disclosure-agreements-signed-epa-employees">No FEAR Act Data</a></li>
								<li><a href="https://www.epa.gov/privacy">Privacy</a></li>
							</ul>
						</div>
						<div class="col size-1of3">
							<div class="col__title">
								Connect.
							</div>
							<ul class="menu">
								<li><a href="https://www.data.gov/">Data.gov</a></li>
								<li><a href="https://www.epa.gov/office-inspector-general/about-epas-office-inspector-general">Inspector General</a></li>
								<li><a href="https://www.epa.gov/careers">Jobs</a></li>
								<li><a href="https://www.epa.gov/newsroom">Newsroom</a></li>
								<li><a href="https://www.epa.gov/open">Open Government</a></li>
								<li><a href="https://www.regulations.gov/">Regulations.gov</a></li>
								<li><a href="https://www.epa.gov/newsroom/email-subscriptions">Subscribe</a></li>
								<li><a href="https://www.usa.gov/">USA.gov</a></li>
								<li><a href="https://www.whitehouse.gov/">White House</a></li>
							</ul>
						</div>
						<div class="col size-1of3">
							<div class="col__title">
								Ask.
							</div>
							<ul class="menu">
								<li><a href="https://www.epa.gov/home/forms/contact-us">Contact Us</a></li>
								<li><a href="https://www.epa.gov/home/epa-hotlines">Hotlines</a></li>
								<li><a href="https://www.epa.gov/foia">FOIA Requests</a></li>
								<li><a href="https://www.epa.gov/home/frequent-questions-specific-epa-programstopics">Frequent Questions</a></li>
							</ul>
							<div class="col__title">
								Follow.
							</div>
							<ul class="social-menu">
								<li><a class="menu-link social-facebook" href="https://www.facebook.com/EPA">Facebook</a></li>
								<li><a class="menu-link social-twitter" href="https://twitter.com/epa">Twitter</a></li>
								<li><a class="menu-link social-youtube" href="https://www.youtube.com/user/USEPAgov">YouTube</a></li>
								<li><a class="menu-link social-flickr" href="https://www.flickr.com/photos/usepagov">Flickr</a></li>
								<li><a class="menu-link social-instagram" href="https://www.instagram.com/epagov">Instagram</a></li>
							</ul>
							<p class="last-updated">Last updated on {Month day, YYYY}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
  <script src="https://www.epa.gov/sites/all/modules/custom/epa_core/js/alert.js"></script>
</body>
</html>
