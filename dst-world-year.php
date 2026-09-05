<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - Daylight Saving Time Around the World</title>
<meta name="description" content="Daylight Saving Time Around the World by country.">
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
<h2 id="pageTitle">Daylight Saving Time Around the World</h2>  
 <br>
 
<br>
<div id="mapWrapper">
  <h3>World Map – DST</h3>
  <div id="svgContainer"></div>
  <p>
    <span class="legend-box dst"></span> <span id="dstSection">Areas that have DST during some period in 2025</span>  
	<br>
    <span class="legend-box nodst"></span> <span id="noDst">No DST in 2025</span>
  </p>
</div>

<section>
<br>
<p>Daylight Saving Time (DST), also known as daylight savings or summer time, changes the clock to make better use of daylight.
Places that do not observe it stay on standard time.</p><br>
<p>The list below shows all countries and territories that use DST by year.</p>

<!-- YEAR DROPDOWN -->
<div class="year-select-box">
  <label for="yearSelect"><strong>Year (DST):</strong></label>
  <select id="yearSelect"></select>
</div>

<!-- DST TABLE -->
<table id="dstTable">
<thead>
<tr>
  <th data-col="country" data-order="asc">Country</th>
  <th data-col="regions">Regions</th>
  <th data-col="start">Start</th>
  <th data-col="end">End</th>
</tr>
</thead>
<tbody></tbody>
</table>
</section>
</main> 
<?php include "footer.php"; ?> 
<script src="origg-js/right-panel.js"></script>
<script src="origg-js/dst-time.js"></script>
</body>
</html>
