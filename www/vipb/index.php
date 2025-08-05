<!DOCTYPE html> 
<html lang="en">
<<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>VIPB - Versatile IP Blacklister for Linux Firewalls | Automation & Security</title>

	<meta name="description" content="VIPB is a powerful Bash tool for managing IP blacklists on Linux firewalls. Automate IP bans, compress subnets, and integrate with iptables, firewalld, and fail2ban.">
	<meta name="keywords" content="VIPB, IP Blacklist, Linux Firewall, iptables, firewalld, ipset, fail2ban, cron, bash script, subnet compression, security automation">
	<meta name="author" content="simonquasar">

	<!-- Open Graph / Facebook -->
	<meta property="og:title" content="VIPB - Versatile IP Blacklister for Linux Firewalls">
	<meta property="og:description" content="Automate and manage IP blacklists with VIPB. Integrates with iptables, firewalld, and fail2ban. Includes subnet compression and daily cron jobs.">
	<meta property="og:image" content="https://raw.githubusercontent.com/simonquasar/vipb/main/vipb-screenshot.jpg">
	<meta property="og:url" content="https://vipb.simonquasar.net">
	<meta property="og:type" content="website">

	<!-- Shitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="VIPB - Versatile IP Blacklister for Linux Firewalls">
	<meta name="twitter:description" content="Automate and manage IP blacklists with VIPB. Integrates with iptables, firewalld, and fail2ban. Includes subnet compression and daily cron jobs.">
	<meta name="twitter:image" content="https://raw.githubusercontent.com/simonquasar/vipb/main/vipb-screenshot.jpg">

 
	<link rel="apple-touch-icon" sizes="180x180" href="vipb-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vipb-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="image_src" href="vipb-icon.png">
    <link rel="stylesheet" href="https://simonquasar.net/style.css"; type="text/css" media="screen, projection">
	<style>
		
		h1, h2, h3 {
			text-align: center;
		}
		h1, h2 {
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
			background-color: lightyellow;
			padding: 0 0.4em;
			display: inline-block;
		}
		pre{
			margin: 0 auto;
			width: fit-content;
			max-width: 100%;
			overflow: auto;
		}
		hr {
			margin-top: 2em;
			border: 1px solid plum;
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
		a {
		  color: steelblue;
		  text-decoration: underline;
		  font-style: italic;
		}
		a:hover {
		  color: goldenrod;
		  text-decoration: line-through;
		}
		.section {
			margin-left: 0 !important;
			padding-left: 0 !important;
		}
		div:has("[!CAUTION]") {
		  color: red;
		}
		#right {
			width: 100%;
		}
		#wrap {
		  --hue: 0;
		}
		::-webkit-scrollbar, #wrap::-webkit-scrollbar-thumb {
			background: plum;
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
                    <img class="header-img" id="qh" src="https://www.simonquasar.net/icons/sq.png"; alt="simonquasar">
                </a>
                <b><i>simonquasar</i></b><br>
                <i style="opacity: 0.7">simon pilati</i><br>
                <i style="opacity: 0.7"><small>サイモン　ピラティ</small></i><br>
            </div>
        </div>

        <div id="right" style="max-width: 100%">
			<img src="vipb-icon-round.png" style="width: 96px;margin: 0 auto;display: block;"> 
			<div class="section" style="height:auto;" id="vipbbmd">
			<?php
			$readmeUrl = 'https://raw.githubusercontent.com/simonquasar/vipb/main/README.md';
			$readmeContent = @file_get_contents($readmeUrl);
			if ($readmeContent === false) {
				echo '<h1>Error</h1><p>Unable to fetch README from <a href="https://www.github.com/simonquasar/vipb/"; target="_blank" title="simonquasar">GitHub repository</a>.</p>';
			} else {
				require_once 'Parsedown.php';
				$Parsedown = new Parsedown();
				echo $Parsedown->text($readmeContent);
			}
			?>
			
			</div>
			

        </div>
    </div>
</body>
</html>