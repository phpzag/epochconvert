<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - AI Powered Epoch Converter</title>
<meta name="description" content="AI Powered Online Epoch Converter Tools to convert natural language dates.">
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
    <h2>AI Powered Converter</h2>
    <?php include "epoch-counter.php"; ?>	
	<section class="ai-epoch-converter" aria-labelledby="converter-title">
	  <div class="header">
		<div>
		  <h3>AI-Powered Epoch / Date Time Converter</h3>
		  <p class="lead">Type natural language dates (e.g. "next Friday 3pm PST", "in 2 weeks", "tomorrow 14:30") and get epoch timestamps instantly.</p>
		</div>
	  </div>
	  <div class="grid">
		<!-- left column -->
		<div class="card" role="region" aria-label="Converter controls">
		  <label class="input-label" for="nlInput">Enter date / time (natural language)</label>
		  <input id="nlInput" class="nl-input" type="text" placeholder='e.g. "next Friday 3pm PST", "in 90 minutes", "2025-08-15 09:00"' aria-describedby="examples-tip" />

		  <div class="helpers" aria-hidden="false">
			<div class="chip" data-insert="now">now</div>
			<div class="chip" data-insert="tomorrow 9am">tomorrow 9am</div>
			<div class="chip" data-insert="in 2 hours">in 2 hours</div>
			<div class="chip" data-insert="next friday 18:30">next friday 18:30</div>
			<div class="chip" data-insert="next month">next month</div>
			<div class="chip" data-insert="next year">next year</div>
		  </div>

		  <div class="results" id="results" aria-live="polite">
			<div class="result-row">
			  <div>
				<div class="result-left" id="epochSec">—</div>
				<div class="result-sub">Epoch (seconds)</div>
			  </div>
			  <div>
				<button class="copy-btn" data-copy-target="epochSec">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
						<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v16h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H8V7h11v16z"/>
					</svg>
				</button>
			  </div>
			</div>

			<div class="result-row">
			  <div>
				<div class="result-left" id="epochMs">—</div>
				<div class="result-sub">Epoch (milliseconds)</div>
			  </div>
			  <div>
				<button class="copy-btn" data-copy-target="epochMs">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
						<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v16h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H8V7h11v16z"/>
					</svg>
				</button>
			  </div>
			</div>

			<div class="result-row">
			  <div>
				<div class="result-left" id="localTime">—</div>
				<div class="result-sub">Local time</div>
			  </div>
			  <div>
				<button class="copy-btn" data-copy-target="localTime">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
						<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v16h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H8V7h11v16z"/>
					</svg>
				</button>
			  </div>
			</div>

			<div class="result-row">
			  <div>
				<div class="result-left" id="utcTime">—</div>
				<div class="result-sub">UTC time</div>
			  </div>
			  <div>
				<button class="copy-btn" data-copy-target="utcTime">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
						<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v16h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H8V7h11v16z"/>
					</svg>
				</button>
			  </div>
			</div>

			<div class="result-row" title="Time until / since this date">
			  <div>
				<div class="result-left" id="countdown">—</div>
				<div class="result-sub">Countdown (time until / since)</div>
			  </div>
			  <div>
				<button class="copy-btn" id="copy-readable" data-copy-target="readableAll">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
						<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v16h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H8V7h11v16z"/>
					</svg>
				</button>
			  </div>
			</div>
		  </div>

		  <div class="footer-note" id="examples-tip">Use phrases like "in 3 days", "tomorrow 10am", "next Monday 5pm", "next month", "next year" or exact timestamps like "2025-12-01 14:30"</div>
		</div>

		<!-- right column -->
		<aside class="meta" aria-label="Preview and examples">
		  <div class="preview card" role="region" aria-label="Preview">
			<div style="font-weight:700">Preview</div>
			<div class="time" id="previewLocal">Local: —</div>
			<div class="time" id="previewUTC">UTC: —</div>
			<div class="time" id="previewEpoch">Epoch (s): —</div>
		  </div>

		  <div class="card" aria-label="Examples">
			<div style="font-weight:700; margin-bottom:8px;">Examples — click to use</div>
			<div class="examples" id="examplesList">
			  <div class="example" data-example="now">now</div>
			  <div class="example" data-example="tomorrow 9am">tomorrow 9am</div>
			  <div class="example" data-example="in 48 hours">in 48 hours</div>
			  <div class="example" data-example="next friday 18:30">next friday 18:30</div>
			  <div class="example" data-example="2025-12-01 09:00">2025-12-01 09:00</div>
			  <div class="example" data-example="aug 15 2025 00:00 UTC">aug 15 2025 00:00 UTC</div>
			  <div class="example" data-example="next month">next month</div>
			  <div class="example" data-example="next year">next year</div>
			</div>
		  </div>
		</aside>
	  </div>
	</section>
	<p>	
    </p>
  </main> 
  <?php include "footer.php"; ?> 
  <script src="js/ai-converter.js"></script>
</body>
</html>
