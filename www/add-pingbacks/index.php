<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Pingbacks - Wordpress Plugin by simonquasar</title>

	<link rel="canonical" href="https://wordpress.org/plugins/add-pingbacks/" />
	<link rel="license" href="https://github.com/simonquasar/add-pingbacks/blob/main/LICENSE" />
	<link rel="author" href="https://github.com/simonquasar" />
	<link rel="help" href="https://www.simonquasar.net/add-pingbacks/" />
	<link rel="pingback" href="https://wordpress.org/plugins/add-pingbacks/" />

	<link rel="alternate" type="application/rss+xml" title="Add Pingbacks Updates" href="https://wordpress.org/plugins/add-pingbacks/feed/" />

	<meta name="description" content="WordPress plugin that adds an Add Pingbacks page under the Comments menu, allowing referral links to be added to any post type." />
	<meta name="version" content="1.2.2" />
	<meta name="generator" content="WordPress Plugin: Add Pingbacks" />
	<meta property="og:title" content="Add Pingbacks – WordPress Plugin by simonquasar" />
	<meta property="og:description" content="Adds a Pingbacks page under Comments to manually add referral links to any post type. Lightweight, compatible with WP 5.0+, and easy to use." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://github.com/simonquasar/add-pingbacks" />
	<meta property="og:image" content="https://repository-images.githubusercontent.com/882242461/5bce947a-e805-4cef-bd1a-ef10a9901040" />
	<meta property="og:site_name" content="GitHub" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Add Pingbacks – WordPress Plugin" />
	<meta name="twitter:description" content="Manually add pingbacks to any post type via a simple interface. Created by simonquasar." />
	<meta name="twitter:image" content="https://repository-images.githubusercontent.com/882242461/5bce947a-e805-4cef-bd1a-ef10a9901040" />

 
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="image_src" href="https://repository-images.githubusercontent.com/882242461/5bce947a-e805-4cef-bd1a-ef10a9901040">
    <link rel="stylesheet" href="https://simonquasar.net/style.css"; type="text/css" media="screen, projection">
	<style>
		
		h1, h2, h3, h4, h5 {
			text-align: center;
		}
		h2 {
			margin: 2em 0;
		}
		h3 {
			margin: 4em 0 1em;
		}
		p {
			margin: 2em 0 1em;
			text-align: center;
		}

		code {
			background-color: rgba(255, 230, 0, .75);
			padding: 0 0.4em;
			display: inline-block;
		}		
		hr {
			border: 1px solid black;
			border-bottom: 0;
			justify-self: center;
			margin-left: auto;
			margin-right: auto;
		}
		hr:nth-of-type(4n + 1) {
		  border-color: var(--branch-identity);
		  width: 33%;
		}
		hr:nth-of-type(4n + 2) {
		  border-color: var(--branch-print);
		  width: 45%;
		}
		hr:nth-of-type(4n + 3) {
		  border-color: var(--branch-webdesign);
		  width: 65%;
		}
		hr:nth-of-type(4n + 4) {
		  border-color: var(--branch-releases);
		  width: 80%;
		}
		hr:nth-of-type(4n + 5) {
		  border-color: var(--branch-corporate);
		  width: 95%;
		}
		hr:nth-of-type(4n + 6) {
		  border-color: var(--branch-events);
		  width: 50%;
		}
		ul, ol {
			padding-inline-start: 10%;
			display: inline-block;
			margin: 0 1em;
		}
		ul li, ol li{
			margin:0.2em 0;
		}
		img {
			max-width: 100%;
			display: inline;
			position: relative;
			margin: 0.2em auto;
			top: 8px;
		}
		img[alt="Download BatBar"]{
			padding: 1em;
			border: 1px solid var(--branch-identity);	
			transition: all 0.1s ease;
		}
		img[alt="Download BatBar"]:hover{
			border: 1px solid var(--branch-corporate);	
		}
		a {
		  color: var(--branch-identity);
		  text-decoration: underline;
		  font-style: italic;
		}
		a:hover {
		  color: var(--branch-coding);
		  text-decoration: line-through;
		}
		.section {
			margin-left: 0 !important;
			padding-left: 0 !important;
		}
		#right {
			width: 100%;
		}
		#wrap {
		  --hue: 0;
		}
		::-webkit-scrollbar {
			width:1px;
		}
		#wrap::-webkit-scrollbar-thumb {
		  background: hsl(var(--hue), 100%, 50%);
		  transition: background 0.1s ease;
		}
	</style>
</head>
<body>
    <div id="bt"></div>
    <div id="bb"></div>
    <div id="wrap" style="min-width:200px">
        <div id="center">
            <div class="header">
                <a href="https://simonquasar.net"; target="_self" title="simonquasar">
                    <img class="header-img" id="qh" src="https://simonquasar.net/q18.png"; alt="simonquasar">
                </a>
                <b><i>simonquasar</i></b><br>
                <i style="opacity: 0.7">simon pilati</i><br>
                <i style="opacity: 0.7"><small>サイモン　ピラティ</small></i><br>
            </div>
        </div>

        <div id="right" style="max-width: 100%">
            <div class="section" style="height:auto;" id="batbarbmd">
			<?php
			$readmeUrl = 'https://raw.githubusercontent.com/simonquasar/add-pingbacks/main/README.md';
			$readmeContent = @file_get_contents($readmeUrl);
			if ($readmeContent === false) {
				echo '<h1>Error</h1><p>Unable to fetch README from <a href="https://wordpress.org/plugins/add-pingbacks/"; target="_blank" title="simonquasar">Wordpress repository</a>.</p>';
			} else {
				require_once 'Parsedown.php';
				$Parsedown = new Parsedown();
				echo $Parsedown->text($readmeContent);
			}
			?>
		
			</div>
			

        </div>
    </div>
    <script>
		const wrap = document.getElementById('wrap');
		const indicator = document.getElementById('scrollIndicator');
		function updateScrollbar() {
		  const st = wrap.scrollTop;
		  const max = wrap.scrollHeight - wrap.clientHeight;
		  const percent = st / Math.max(1, max);
		  const hue = 100 - Math.min(percent, 1) * 100;
		  wrap.style.setProperty('--hue', hue);
		}
		wrap.addEventListener('scroll', updateScrollbar);
		window.addEventListener('resize', updateScrollbar);
		updateScrollbar();
	</script>
</body>
</html>