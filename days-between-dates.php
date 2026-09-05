<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Epoch Convert - Difference Between Two Dates Calculator</title>
<meta name="description" content="Calculate the exact number of days between two dates with our free date difference calculator. Includes leap years, calendar picker, and detailed time conversions.">
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
"name": "Date Difference Calculator",
"applicationCategory": "UtilityApplication",
"operatingSystem": "Web",
"description": "Free online tool to calculate the number of days between two dates with accurate calendar calculations.",
"url": "https://yourdomain.com/date-difference",
"offers": {
  "@type": "Offer",
  "price": "0",
  "priceCurrency": "USD"
}
}
</script>
</head>
<body>  
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<main> 
<h2>Days Calculator : Difference Between Two Dates</h2>
 <br>
    <br>
<section class="date_diff_page">
	<div class="date_diff_wrapper">
		<!-- TOOL -->
		<section class="date_diff_tool">
			<label><strong>Start Date</strong></label>
			<div class="date_diff_picker">
				<select id="start_day"></select>
				<select id="start_month"></select>
				<input type="number" id="start_year" placeholder="Year">

					<!--<div class="date_diff_calendar_wrap">
					<button type="button" onclick="openCalendar('start')">ðŸ“…</button>
					<input type="date" id="start_calendar" class="hidden_input">
				</div>-->
				<div class="date_diff_calendar_wrap">
                    <input type="date" id="start_calendar" class="real_date_input">
                    <button type="button">📅</button>
                </div>
			</div>
			<label><strong>End Date</strong></label>
			<div class="date_diff_picker">
				<select id="end_day"></select>
				<select id="end_month"></select>
				<input type="number" id="end_year" placeholder="Year">

				<!--	<div class="date_diff_calendar_wrap">
					<button type="button" onclick="openCalendar('end')">ðŸ“…</button>
					<input type="date" id="end_calendar" class="hidden_input">
				</div>-->
				
				<div class="date_diff_calendar_wrap">
                    <input type="date" id="end_calendar" class="real_date_input">
                    <button type="button">📅</button>
                </div>
                
			</div>
			<label class="date_diff_checkbox">
				<input type="checkbox" id="include">
				<span>Include end date in calculation</span>
			</label>
			<button class="date_diff_btn" onclick="calc()">Calculate Duration</button>
		</section>
		<!-- RESULTS -->
		<section class="date_diff_results" id="results">
			<div class="date_diff_result_card">
				<div class="date_diff_result_header" id="resultHeader"></div>
					<div class="date_diff_section">
					<h3>Other time units</h3>
					<div id="units"></div>
				</div>
			</div>
		</section>
		<!-- SEO CONTENT -->
		<section class="date_diff_content">
			<h2>Calculate Days Between Two Dates</h2>
			<p>
			This online date difference calculator helps you quickly determine the exact number of days between two dates. It uses precise calendar calculations that account for leap years, varying month lengths, and real-world date transitions. Integrated with an <a href="https://www.epochconvert.com">epoch converter</a> and <a href="https://www.epochconvert.com/discord-timestamp-converter">Discord timestamp converter</a>, it also allows seamless conversion between human-readable dates and Unix timestamps, making it ideal for <a href="https://www.epochconvert.com/developer">developers</a>, content creators, and everyday users.
			</p>
			<h2>How This Date Calculator Works</h2>
			<p>
			The tool calculates the difference by subtracting the start date from the end date.
			If the option to include the end date is selected, one additional day is added to the total.
			</p>
			<h2>Common Use Cases</h2>
			<ul>
				<li>Project duration tracking</li>
				<li>Age calculation</li>
				<li>Event planning</li>
				<li>Deadline management</li>
				<li>Difference between two dates</li>
			</ul>
		</section>
		<section class="date_diff_faq">
			<h2>Frequently Asked Questions</h2>
			<div class="faq_item">
				<button class="faq_question">
					How do you calculate days between two dates?
					<span>+</span>
				</button>
				<div class="faq_answer">
					<p>The difference is calculated using accurate calendar math including leap years.</p>
				</div>
			</div>
			<div class="faq_item">
				<button class="faq_question">
					Does this include leap years?
					<span>+</span>
				</button>
				<div class="faq_answer">
					<p>Yes, leap years are automatically considered.</p>
				</div>
			</div>
			<div class="faq_item">
				<button class="faq_question">
					What does include end date mean?
					<span>+</span>
				</button>
				<div class="faq_answer">
					<p>It adds one extra day so both start and end dates are counted.</p>
				</div>
			</div>
		</section>
	</div>
</section>
</main> 
<?php include "footer.php"; ?> 
<script src="origg-js/right-panel.js"></script>
<script src="origg-js/dates_difference.js"></script>
</body>
</html>
