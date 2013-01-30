<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (lte IE 6)&(!IEMobile)]><html class="ie6 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie7 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 8)&(!IEMobile)]><html class="ie8 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
	<!-- ID: <?php print arg(1); ?> <?php print arg(2); ?> //-->
	<?php print $head; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0;" />
	<meta name="MobileOptimized" content="width" />
	<meta name="HandheldFriendly" content="true" />
	<meta http-equiv="cleartype" content="on" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta property="fb:admins" content="759770331" />
	<meta name="msvalidate.01" content="843D096421DC3CAE44C929E00CABA43A" />
	<link type="application/opensearchdescription+xml" rel="search" href="/sites/all/themes/theblock/opensearch"/>
	<script>(function(){
	var p, l, i, r = window.devicePixelRatio;
	if (navigator.platform === "iPad") {
	p = r === 2 ? "/sites/all/themes/theblock/apple-touch-startup-image-1536x2008.png" : "/sites/all/themes/theblock/apple-touch-startup-image-768x1004.png";
	l = r === 2 ? "/sites/all/themes/theblock/apple-touch-startup-image-2048x1496.png" : "/sites/all/themes/theblock/apple-touch-startup-image-1024x748.png";
	i = r === 2 ? "/sites/all/themes/theblock/apple-touch-icon-144x144.png" : "/sites/all/themes/theblock/apple-touch-icon-72x72.png";
	document.write('<link rel="apple-touch-startup-image" href="' + l + '" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="' + p + '" media="screen and (orientation: portrait)"/>');
	document.write('<link rel="apple-touch-icon" href="' + i + '"/>');
	} else {
	p = r === 2 ? "/sites/all/themes/theblock/apple-touch-startup-image-640x920.png": "/sites/all/themes/theblock/apple-touch-startup-image-320x460.png";
	i = r === 2 ? "/sites/all/themes/theblock/apple-touch-icon-114x114.png" : "/sites/all/themes/theblock/apple-touch-icon.png";
	document.write('<link rel="apple-touch-startup-image" href="' + p + '"/>');
	document.write('<link rel="apple-touch-icon" href="' + i + '"/>');
	}
	})()</script>
	<title><?php print $head_title; ?></title>
	<?php print $scripts; ?>
	<script src="//www.youtube.com/iframe_api" type="text/javascript"></script>
	<script src="https://www.ilovetheory.com/shared/jquery.sharrre-1.3.2.js" type="text/javascript"></script>
	<?php print $styles; ?>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=210615752376751";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="skip-link"><a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
	<div id="pagedimmer"></div>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-PREqACRMSsp3-"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-PREqACRMSsp3-.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
</body>

</html>