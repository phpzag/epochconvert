<?php
header('Cache-Control: max-age=31536000');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Discord Timestamp Converter - Generate Discord Time Codes</title>
<meta name="description" content="Create and convert Discord timestamps easily. Generate time codes for all timezones and formats to use in Discord chats, embeds, and bots.">
<meta name="keywords" content="discord timestamp converter, discord time code generator, discord time formatting, unix to discord timestamp, discord date converter, discord embed time, timestamp for discord bots">
<meta property="og:title" content="Discord Timestamp Converter – Generate Discord Time Codes" />
<meta property="og:description" content="Easily generate and convert timestamps for use in Discord messages, embeds, and bots. Supports multiple formats and timezones." />
<meta property="og:url" content="https://www.epochconvert.com/discord-timestamp-converter" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.epochconvert.com/img/epochconvert-og-img.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Discord Timestamp Converter – Generate Discord Time Codes" />
<meta name="twitter:description" content="Convert or generate Discord-compatible timestamps instantly. Ideal for developers, bot creators, and server admins." />
<meta name="twitter:image" content="https://www.epochconvert.com/img/epochconvert-og-img.png" />
<link rel="canonical" href="https://www.epochconvert.com/" />
<link rel="icon" href="favicons/favicon.ico" sizes="any" />
<link rel="icon" href="favicons/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
<link rel="manifest" href="favicons/manifest.webmanifest" />
<link rel="stylesheet" href="css/style.css">
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Discord Timestamp Converter",
    "url": "https://www.epochconvert.com/discord-timestamp-converter",
    "applicationCategory": "Utility",
    "operatingSystem": "All",
    "description": "Create and convert Discord timestamps easily. Generate time codes for all timezones and formats to use in Discord chats, embeds, and bots.",
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "USD"
    },
    "keywords": "discord timestamp converter, discord time code generator, discord time formatting, unix to discord timestamp, discord embed time"
  }
</script>
</head>
<body>  
  <?php include "header.php"; ?>
  <?php include "nav.php"; ?>
  <main>   
    <h2>Discord Timestamp Converter</h2>
    <?php include "epoch-counter.php"; ?>
	<section class="discord-timestamp-converter">
		<h3>Convert Date Time to Discord Timestamps</h3>

		<div class="timestamp-inputs">
		<div class="input-group">      
		  <input type="date" id="date-input" required>
		</div>

	    <div class="time-picker-container">
		  <input type="text" id="time-picker" readonly placeholder="Select time">
		  <svg class="dropdown-icon" viewBox="0 0 24 24">
			<path fill="none" stroke="black" stroke-width="2" d="M6 9l6 6 6-6"/>
		  </svg>
		  <div id="time-dropdown"></div>
		</div>

		<div class="input-group">      
		  <select id="timezone-input">
			<?php include "timezone-list.php"; ?>
		  </select>
		</div>

		<button id="convert-discord-timestamp" type="button">Convert</button>
		</div>		
		<div id="discord-timestamp-output" class="output-section">    
		<ul>
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="long-dt" class=""></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="long-dt-detail" class="discord-timestamps-details"></span></div></li>
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="short-dt" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="short-dt-detail" class="discord-timestamps-details"></span></div></li>	
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="long-date" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="long-date-detail" class="discord-timestamps-details"></span></div></li>			
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="short-date" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="short-date-detail" class="discord-timestamps-details"></span></div></li>		
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="short-full" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="short-full-detail" class="discord-timestamps-details"></span></div></li>
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="long-full" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="long-full-detail" class="discord-timestamps-details"></span></div></li>
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="relative-dt" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="relative-dt-detail" class="discord-timestamps-details"></span></div></li>
			<li><div class="discord-timestamps-row"><div class="discord-timestamps"><code id="unix-time" class="discord-timestamps"></code>&nbsp;<svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></div><span id="unix-time-detail" class="discord-timestamps-details"></span></div></li>			
		</ul>
		</div>
	</section>  
	<section class="discord-converter-card">
	  <h2>Convert Discord Timestamp to Date/Time</h2>
	  <p>Paste a Discord timestamp (e.g. <code>&lt;t:1625097600:R&gt;</code>) or a Unix epoch (seconds) below to convert.</p>
	  
	  <div class="converter-form">
		<input type="text" id="timestamp-input" placeholder="Enter Discord timestamp or epoch">
		<button id="convert-btn">Convert</button>
	  </div>
	  
	  <div class="converter-result" id="conversion-output">
		<!-- Display results here -->
	  </div>
	</section>
	<p>
	 
	</p>
	<p>	
    <br>	
	<h3>What is Discord Timestamp?</h3><br>
	<p>A <strong>Discord timestamp</strong> is a special formatting feature that allows users to display a specific date and time in various formats, which will automatically adjust to the local time zone of anyone viewing the timestamp. This ensures that users across different time zones see a consistent time reference based on their own region.</p>
	<br>
	<p>Discord timestamps are generated using a specific syntax with:
    <br> <br>
	<code><strong>&lt;t:TIMESTAMP:FORMAT&gt;</strong></p></code>
	<br>
	<h3>Understanding and Using Discord Timestamp Formats</h3>
	<br>
	<table>
    	<thead>
        	<tr>
        	<th style="text-align: center">Formats</th>
        	<th style="text-align: center">Input</th>
        	<th style="text-align: center">Output</th>
        	<th style="text-align: center">Description</th>
        	</tr>
    	</thead>
    	<tbody>	
        	<tr><td style="text-align: center"><strong>F</strong></td><td style="text-align: center">&lt;t:1755419280:F&gt;</td><td style="text-align: center">Sunday, August 17, 2025 at 1:58 PM</td><td style="text-align: center"><strong>Long Date/Time (F)</strong> <br>(Full date and time with day of week)</td></tr>
        	<tr><td style="text-align: center"><strong>f</strong></td><td style="text-align: center">&lt;t:1755419280:f&gt;</td><td style="text-align: center">August 17, 2025 at 1:58 PM</td><td style="text-align: center"><strong>Short Date/Time (f)</strong><br>Shows date and time, perfect for events.</td></tr>	
        	<tr><td style="text-align: center"><strong>D</strong></td><td style="text-align: center">&lt;t:1755419280:D&gt;</td><td style="text-align: center">August 17, 2025</td><td style="text-align: center"><strong>Long Date (D)</strong><br>Displays the full date, ideal for formal announcements.</td></tr>
        	<tr><td style="text-align: center"><strong>d</strong></td><td style="text-align: center">&lt;t:1755419280:d&gt;</td><td style="text-align: center">8/17/2025</td><td style="text-align: center"><strong>Short Date (d)</strong><br>Shows the date in a compact format, good for upcoming dates.</td></tr>
        	<tr><td style="text-align: center"><strong>t</strong></td><td style="text-align: center">&lt;t:1755419280:t&gt;</td><td style="text-align: center">1:58 PM</td><td style="text-align: center"><strong>Short Time (t)</strong><br>Displays only the time, great for quick time references.</td></tr>
        	<tr><td style="text-align: center"><strong>T</strong></td><td style="text-align: center">&lt;t:1755419280:T&gt;</td><td style="text-align: center">1:58:00 PM</td><td style="text-align: center"><strong>Long Time (T)</strong><br>Shows the time with seconds, useful for precise timing.</td></tr>	
        	<tr><td style="text-align: center"><strong>R</strong></td><td style="text-align: center">&lt;t:1755419280:R&gt;</td><td style="text-align: center">7 hours ago</td><td style="text-align: center"><strong>Relative Time (R)</strong><br>Shows time relative to now, great for countdowns and recent items.</td></tr>
        </tbody>
    </table>
    
    <p style="font-size:0.85rem;"><strong>📅 Last updated:<time datetime="2025-08-17T20:45:00+05:30"> August 17, 2025</time></strong></p><br>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="js/discord-converter.js"></script>
</body>
</html>
