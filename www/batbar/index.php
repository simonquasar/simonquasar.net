<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>BatBar | Ultra-Minimalist 1px Battery Indicator by Simon Quasar</title>

    <meta name="description" content="BatBar is a 1-pixel-wide, always-on-top battery bar for Windows, Linux, and macOS—minimal by design, crafted by Simon Quasar.">
    <meta name="keywords" content="BatBar, battery indicator, one-pixel bar, minimalist widget, Simon Quasar">
    <meta name="author" content="Simon Quasar">
    
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="BatBar | The 1-px wide battery bar">
    <meta property="og:description" content="A nearly invisible 1px battery indicator for streamers, designers and productivity purists.">
    <meta property="og:url"         content="https://batbar.simonquasar.net/">
    <meta property="og:site_name"   content="batbar.simonquasar.net">
    
    <!-- Shitter -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="BatBar | The 1-px wide battery bar">
    <meta name="twitter:description" content="The minimalist battery bar you barely see but always feel.">
 
	<link rel="apple-touch-icon" sizes="180x180" href="batbar-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="batbar-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="image_src" href="batbar-icon.png">
    <link rel="stylesheet" href="https://simonquasar.net/style.css"; type="text/css" media="screen, projection">
	<style>
		
		h1 {
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
                    <img class="header-img" id="qh" src="https://www.simonquasar.net/icons/sq.png" alt="simonquasar">
                </a>
                <b><i>simonquasar</i></b><br>
                <i style="opacity: 0.7">simon pilati</i><br>
                <i style="opacity: 0.7"><small>サイモン　ピラティ</small></i><br>
            </div>
        </div>

        <div id="right" style="max-width: 100%">
            <div class="section" style="height:auto;" id="batbarbmd">
			<?php
			$readmeUrl = 'https://raw.githubusercontent.com/simonquasar/BatBar/main/README.md';
			$readmeContent = @file_get_contents($readmeUrl);
			if ($readmeContent === false) {
				echo '<h1>Error</h1><p>Unable to fetch README from <a href="https://www.github.com/simonquasar/BatBar/"; target="_blank" title="simonquasar">GitHub repository</a>.</p>';
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