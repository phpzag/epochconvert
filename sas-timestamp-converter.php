<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - SAS Timestamp Converter</title>
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
     <h2>SAS Timestamp Converter</h2>	 
	 <br>
	 <p>
	 
	 </p>
     <p>Convert between SAS datetime, Unix timestamp, and human-readable time</p>   
	 <br>	
	 <div class="panel">
      
	  
      <p>
        <strong>Current SAS Timestamp:</strong>
        <span class="timestamp-container">
          <span class="timestamp" id="sasNow"></span>
          <button class="copy-btn" onclick="copyText('sasNow', event)">📋</button>
        </span>
      </p>
      <p>
        <strong>Current SAS Datestamp:</strong>
        <span class="timestamp-container">
          <span class="timestamp" id="sasDate"></span>
          <button class="copy-btn" onclick="copyText('sasDate', event)">📋</button>
        </span>
      </p>
      <p>
        <strong>Current ISO 8601 (E8601DT.):</strong>
        <span class="iso-container">
          <span class="iso" id="sasIso"></span>
          <button class="copy-btn" onclick="copyText('sasIso', event)">📋</button>
        </span>
      </p>      
    </div>

    <!-- SAS → Unix -->
    <div class="panel">
      <h2>SAS Datetime → Unix Timestamp</h2>
      <label for="sasInput">Enter SAS Datetime (seconds since 1960-01-01):</label>
      <input type="number" id="sasInput" placeholder="e.g., 2084802345" />
      <button onclick="convertSasToUnix()">Convert SAS → Unix</button>
      <div class="result" id="sasToUnixResult">Enter a SAS datetime to convert.</div>
    </div>

    <!-- Unix → SAS -->
    <div class="panel">
      <h2>Unix Timestamp → SAS Datetime</h2>
      <label for="unixInput">Enter Unix Timestamp (seconds since 1970-01-01):</label>
      <input type="number" id="unixInput" placeholder="e.g., 1733967930" />
      <button onclick="convertUnixToSas()">Convert Unix → SAS</button>
      <div class="result" id="unixToSasResult">Enter a Unix timestamp to convert.</div>
    </div>
	
	<p><strong>SAS (Statistical Analysis System)</strong> is a powerful programming language and software suite developed by SAS Institute for advanced data management, statistical analysis, and predictive modeling.</p>
	<br> 
	<h3>What is SAS Timestamp?</h3>
	<p>A SAS timestamp or SAS datetime is the number of seconds since January 1, 1960, used by SAS to represent date and time values numerically for analysis, storage, and computation.</p>
	
	<br>
	<h3>What is SAS Datestamp?</h3>
	<p>A SAS datestamp is stored as a numeric value that counts the number of days since January 1, 1960.</p>
	<br>
	<p><strong>For exmaple:</strong>  
	<br>Current SAS Datestamp = Number of days from Jan 1, 1960 → current date
	</p>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="origg-js/right-panel.js"></script>
  <script src="origg-js/sas-converter.js"></script>
</body>
</html>
