<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - Time Zone Difference Calculator</title>
<meta name="keywords" content="time zone difference, world clock, time converter, time zone calculator, time difference calculator, global time zones, meeting planner, international time, UTC offset, city time zones" />
<meta name="description" content="Use our Time Zone Difference Calculator to quickly find the time difference between any two cities or time zones worldwide. Perfect for travel, meetings, and global scheduling." />
<link rel="canonical" href="https://www.epochconvert.com/" />
<link rel="icon" href="favicons/favicon.ico" sizes="any" />
<link rel="icon" href="favicons/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
<link rel="manifest" href="favicons/manifest.webmanifest" />
<link rel="stylesheet" href="origg-css/style.css">
</head>
<body>  
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<main> 
<div class="time-diff-convert">
<h2>Time Zone Difference Calculator</h2><br>
<p>
</p>
<p>Easily convert times between cities worldwide—accurately handling Daylight Saving Time, your local time zone, and any past, present, or future date.</p><br>

<label>From City / Timezone:</label>
<div class="dropdown">
  <input type="text" id="fromSearch" placeholder="Search for city or time zone..." autocomplete="off">
  <div class="dropdown-list" id="fromList"></div>
</div>

<label>To City / Timezone:</label>
<div class="dropdown">
  <input type="text" id="toSearch" placeholder="Search for city or time zone..." autocomplete="off">
  <div class="dropdown-list" id="toList"></div>
</div>

<div id="showDateTime" style="display:none;">
	<label for="datetime">Edit Date / Time:</label>
	<input type="datetime-local" id="datetime" />
	<div class="buttons" style="display:none;">
	  <button id="nowBtn" type="button">Use Current Time</button>
	  <button id="flipBtn" type="button">Flip From ↔ To</button>
	</div>
</div>

<div class="result" id="result"></div>
<div class="share" id="share-url"></div>
<div class="buttons" style="margin-top:10px;">
  <button id="copyBtn">Copy Link</button>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main> 
<?php include "footer.php"; ?> 
<script src="origg-js/right-panel.js"></script>
<script src="origg-js/time-diff-convert.js"></script>
</body>
</html>
