<?php
header('Cache-Control: max-age=31536000');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Batch Epoch Converter – Convert Multiple Unix Timestamps</title>
<meta name="description" content="Easily convert multiple Unix timestamps to readable date and time formats. Use our free batch epoch converter online for fast, accurate results.">
<meta name="keywords" content="batch epoch converter, convert multiple timestamps, bulk timestamp converter, unix time list converter, timestamp to date online, unix time tool">
<meta property="og:title" content="Batch Epoch Converter – Convert Multiple Unix Timestamps" />
<meta property="og:description" content="Free online tool to convert multiple Unix timestamps to readable dates instantly. Paste your list and get formatted results in seconds." />
<meta property="og:url" content="https://www.epochconvert.com/batch-converter" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.epochconvert.com/img/epochconvert-og-img.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Batch Epoch Converter – Convert Multiple Unix Timestamps" />
<meta name="twitter:description" content="Convert multiple Unix timestamps to human-readable date formats quickly and easily. Try our free online batch converter." />
<meta name="twitter:image" content="https://www.epochconvert.com/img/epochconvert-og-img.png" />
<link rel="canonical" href="https://www.epochconvert.com/" />
<link rel="icon" href="favicons/favicon.ico" sizes="any" />
<link rel="icon" href="favicons/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
<link rel="manifest" href="favicons/manifest.webmanifest" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>  
  <?php include "header.php"; ?>
  <?php include "nav.php"; ?>
  <main>   
    <h2>Epoch or Human-readable Dates Batch Converter</h2>
    <?php include "epoch-counter.php"; ?>
	<section class="batch-input-section">
		<label for="batch-timestamps">Enter Epoch Timestamps or Human-readable Dates (one per line):</label>
		<textarea id="batch-timestamps" placeholder="e.g. 1633555800 or Sat, 09 Nov 2024 08:30:22 GMT"></textarea>
		<button id="batch-convert-btn">Convert</button>
	</section>
	<section class="batch-output-section" id="batch-output"></section>	
	<p><br>
</p>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="js/batch-converter.js"></script>
</body>
</html>
