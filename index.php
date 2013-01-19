<?php

	date_default_timezone_set('Europe/Berlin');
	Header("Cache-Control: must-revalidate");

	$offset = 60 * 60 * 24 * 3;
	$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
	Header($ExpStr);


?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Florian Pichler &middot; Design &amp; Development from Germany</title>
		<meta name="description" content="Hummingbird, Designer, Developer &amp; Wizard. Using Design, HTML, CSS &amp; Javascript to create a better web. Quality from Germany included." />
		<meta name="viewport" content="width=device-width" />

		<link href="/a/c/styles.combined.min.css" rel="stylesheet" />
		<script src="/a/s/modernizr.js"></script>
	</head>
	<!--

		Hello interested visitor,

		nice to see your here. I didn't expect you here and
		I'm sorry, there is no cake. Feel free to look at what
		I did here and but please don't steal the whole thing.
		Send me a message if you have questions.

		Sincerely,
		Florian Pichler

	-->
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div>
			<section role="main" class="vcard" id="florian-pichler">
				<header>
					<h1><a class="fn url" href="http://florianpichler.de"><span class="given-name">Florian</span> <span class="family-name">Pichler</span></a></h1>
					<p>Design&nbsp;&amp;&nbsp;Development</p>
				</header>

				<div>
					<a class="adr" href="http://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Erdinger+Straße+21,+Markt+Schwaben&amp;sll=48.1931,11.87158&amp;sspn=0.012545,0.018282&amp;g=Erdinger+Straße+21,+Markt+Schwaben&amp;ie=UTF8&amp;hq=&amp;hnear=Erdinger+Straße+21,+Markt+Schwaben+85570+Markt+Schwaben,+Ebersberg,+Bayern&amp;ll=48.193099,11.87158&amp;spn=0.003136,0.00457&amp;t=h&amp;z=18&amp;iwloc=A">
						<div class="street-address">Erdinger Straße 21</div>
						<span class="postal-code">85570</span> <span class="locality">Markt Schwaben</span>
						<div class="country-name">Germany</div>
					</a>

					<div class="tel"><strong class="type">Mobile</strong> <span class="value">+49 172 199 81 51</span></div>
					<div class="im"><strong class="type">Skype</strong> <a href="skype:pichfl?chat" class="value">pichfl</a></div>
					<div class="email"><strong class="type">Contact</strong> <a href="&#x6D;&#x61;&#x69;&#108;&#116;o:&#x70;&#x69;c&#104;&#x66;&#x6C;&#64;e&#105;&#110;&#x73;e&#114;&#118;&#101;&#114;&#46;&#x64;&#101;" class="value">&#x70;&#x69;c&#104;&#x66;&#x6C;&#64;e&#105;&#110;&#x73;e&#114;&#118;&#101;&#114;&#46;&#x64;&#101;</a></div>
				</div>

				<h2>About me</h2>
				<p>After I studied Interactive Media in Augsburg, I&nbsp;joined <a href="http://anfe.ma">anfema&nbsp;GmbH</a>, where I now act as Creative&nbsp;Director.</p>
				<p>I&nbsp;post things on <a href="http://einserver.de" title="A personal weblog by Florian Pichler, writing about tech and things.">einserver.de</a> and aside from my digital projects I&nbsp;enjoy baking and crafting things.</p>
			</section>
		</div>

		<section class="elsewhere">
			<h2 class="visuallyhidden">Elsewhere</h2>
			<ul class="s">
				<li><a href="http://twitter.com/pichfl">Twitter</a></li>
				<li><a href="http://twitter.com/pichfl">einserver.de</a></li>
				<li><a href="https://github.com/pichfl">GitHub</a></li>
				<li><a href="http://bakingflo.tumblr.com">Flo bäckt</a></li>
				<li><a href="https://flickr.com/user/pichfl">Flickr</a></li>
				<li><a href="http://dribbble.com/players/pichfl">Dribbble</a></li>
			</ul>
			<h2>Projects</h2>
			<ul class="l">
				<li><a href="http://ylk.gd"><strong>You look good!</strong> &mdash; Short url compliments</a></li>
				<li><a href="http://playninetynine.com"><strong>NinetyNine</strong> &mdash; a game for iOS</a></li>
				<li><a href="http://nomoreitunes.einserver.de"><strong>NoMoreiTunes</strong>  &mdash; a Safari Extension that prevents iTunes Previews from launching the Application.</a></li>
			</ul>
		</section>

		<aside>
			<h2>About this page</h2>
			<p>Thanks to Tim Van Damme<a href="http://timvandamme.com">*</a> for making me think about an online card again. This page and it's design is not for sale and it probably wont be in the future either. </p>

			<footer>
				<p>&copy; 2009-<?php echo date('Y'); ?>, Florian Pichler</p>
			</footer>
		</aside>

		<script src="/a/s/script.combined.min.js"></script>
		<script>
			var _gaq=[['_setAccount', 'UA-29324698-3'],['_trackPageview'],['_trackPageLoadTime']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		  </script>
	</body>
</html>
