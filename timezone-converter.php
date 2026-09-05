<?php
header('Cache-Control: max-age=31536000');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Timezone Converter – Convert Time Across Timezones</title>
<meta name="description" content="Convert time between different timezones instantly with our free timezone converter. Supports UTC, local time, and all major global timezones.">
<meta name="keywords" content="timezone converter, convert timezones, UTC to local time, time zone conversion tool, time converter online, time difference calculator, epoch timezones">
<meta property="og:title" content="Timezone Converter – Convert Time Across Timezones" />
<meta property="og:description" content="Convert between timezones quickly and accurately. Enter a time and select source and destination zones to get instant results." />
<meta property="og:url" content="https://www.epochconvert.com/timezone-converter" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.epochconvert.com/img/epochconvert-og-img.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Timezone Converter – Convert Time Across Timezones" />
<meta name="twitter:description" content="Easily convert times across global timezones with this free online tool. Supports UTC and all major time standards." />
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
    <h2>Unix Time Conversion With Timezones</h2>
    <?php include "epoch-counter.php"; ?>
    <section class="timestamp-conversion">
	<h3>Convert Epoch (seconds, ms) To Other Timezone</h3>
    <form id="timestamp-form">
      <!-- Input field for timestamp or date -->
      <div class="input-group">        
        <input type="text" id="timestamp" placeholder="1729322754525 Or 1729322283" required>
      </div>
      
      <!-- Timezone dropdown -->
      <div class="input-group">        
        <select id="timezone">			
		<?php include "timezone-list.php"; ?>
        </select>
      </div>

      <!-- Convert Button -->
      <button type="button" id="convert-btn">Convert</button>
    </form>

    <!-- Output Section -->
    <div id="conversion-results" class="results-section">      
      <ul>
        <li>Local Time: <span id="local-time"></span> <svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></li>
        <li>GMT Time: <span id="gmt-time"></span> <svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></li>
        <li>ISO Format (ISO-8601): <span id="iso-format"></span> <svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></li>
        <li>Unix Timestamp (Seconds): <span id="unix-seconds"></span> <svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></li>
        <li>Unix Timestamp (Milliseconds): <span id="unix-milliseconds"></span> <svg class="copy-btn" viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM350 856.2L263.9 770H350v86.2zM664 888H414V746c0-22.1-17.9-40-40-40H232V264h432v624z"></path></svg></li>
      </ul>
    </div>
  </section>
  <br>
  <p>
  <strong>Note : </strong>Daylight Saving Times (DST) To convert from normal/standard time to daylight saving time add 1 hour ( or +3600 seconds ). For example: Eastern Standard Time = GMT-5, add 1 hour: Eastern Daylight Time = GMT-4
  </p>
  <p><br>
  </p>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="js/timezone-converter.js"></script>
</body>
</html>
