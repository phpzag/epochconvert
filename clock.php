<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - Clock</title>
<meta name="description" content="Online Epoch Converter Tools to convert SAS timestamp to human readable date.">
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
  <h2>Your Local Time & Location</h2>
  <div id="local">
    <div id="location">Synchronizing your lo…</div>
    <div id="localTime" class="time">--:--:--</div>
    <div id="localDate" class="date">--</div> <!-- ✅ Date display -->
    <div id="localTz" class="tzinfo"></div>
  </div>
  <br>
  <h2>Time in Major Cities</h2>
  <div class="world-clocks" id="worldClocks"></div>    
  <p>
  </p>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="origg-js/right-panel.js"></script>
  <script src="origg-js/clock.js"></script>
</body>
</html>
