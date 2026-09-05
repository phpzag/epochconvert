<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Days Until Calculator - Live Countdown | Epoch Convert</title>
<meta name="description" content="Calculate how many days until any date, holiday, event, birthday, or special occasion. View a live countdown with days, hours, minutes, and seconds instantly.">
<link rel="canonical" href="https://www.epochconvert.com/days-until" />
<link rel="icon" href="favicons/favicon.ico" sizes="any" />
<link rel="icon" href="favicons/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
<link rel="manifest" href="favicons/manifest.webmanifest" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="origg-css/until.css">
</head>
<body>  
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<main>
<h2>Days Until Calculator</h2>
<br>
<p>Calculate how many days until or countdowns for upcoming holidays, months, weekdays and important dates.
</p>
<p>
    
</p>
<br>
<div class="calculator">
    <div class="form-row">
        <div class="form-group">
            <label for="eventInput">Event Name</label>
            <input
                type="text"
                id="eventInput"
                placeholder="Search Christmas, New Year, Birthday..."
                autocomplete="off">
            <div id="suggestions"></div>
        </div>
        <div class="or-divider">
            <span>OR</span>
        </div>
        <div class="form-group">
            <label for="targetDate">Select Date</label>
            <input 
                type="date" 
                id="targetDate">
        </div>
    </div>
    <button id="calculateBtn" class="calculate-btn">
        Calculate Days Until
    </button>
    <div class="summary" id="summary" style="display:none;">
        Select an event or date or click a link below to see days until.
    </div>
</div>
<div class="countdown-grid">
	<div class="countdown-card">
		<div class="value" id="days">0</div>
		<div class="label">Days</div>
	</div>
	<div class="countdown-card">
		<div class="value" id="hours">0</div>
		<div class="label">Hours</div>
	</div>
	<div class="countdown-card">
		<div class="value" id="minutes">0</div>
		<div class="label">Minutes</div>
	</div>
	<div class="countdown-card">
		<div class="value" id="seconds">0</div>
		<div class="label">Seconds</div>
	</div>
</div>
<div class="results">
	<button class="accordion-btn" onclick="toggleDetails()">
		<span>📊 Detailed Results</span>
		<span id="accordionIcon">+</span>
	</button>
	<div id="detailsContent" class="accordion-content">
		<table>
			<tr><td>Total Days</td><td id="totalDays">-</td></tr>
			<tr><td>Total Weeks</td><td id="totalWeeks">-</td></tr>
			<tr><td>Total Months</td><td id="totalMonths">-</td></tr>
			<tr><td>Total Hours</td><td id="totalHours">-</td></tr>
			<tr><td>Total Minutes</td><td id="totalMinutes">-</td></tr>
			<tr><td>Total Seconds</td><td id="totalSeconds">-</td></tr>
			<tr><td>Unix Timestamp</td><td id="unixTimestamp">-</td></tr>
			<tr><td>Milliseconds Timestamp</td><td id="msTimestamp">-</td></tr>
			<tr><td>ISO Date</td><td id="isoDate">-</td></tr>
		</table>
	</div>
</div>
<!-- Countdown Categories -->
<div class="countdown-categories">	
	<p class="popular-subtitle">
        Quickly find countdowns for upcoming holidays, months, weekdays and important dates.
    </p>	
    <!-- Major Holidays -->
    <div class="category-section">
        <h3>🎄 Days Until Holidays</h3>
        <ul class="category-links">
            <li><a href="#" onclick="return loadEvent('Christmas')">Days Until Christmas</a></li>
            <li><a href="#" onclick="return loadEvent('New Year')">Days Until New Year</a></li>
            <li><a href="#" onclick="return loadEvent('Halloween')">Days Until Halloween</a></li>
            <li><a href="#" onclick="return loadEvent('Valentine\'s Day')">Days Until Valentine's Day</a></li>
            <li><a href="#" onclick="return loadEvent('Thanksgiving')">Days Until Thanksgiving</a></li>
            <li><a href="#" onclick="return loadEvent('Independence Day')">Days Until Independence Day</a></li>
            <li><a href="#" onclick="return loadEvent('Tax Day')">Days Until Tax Day</a></li>
        </ul>
    </div>
    <!-- Popular Dates -->
    <div class="category-section">
        <h3>📅 Days Until Popular Dates</h3>
        <ul class="category-links">
            <li><a href="#" onclick="return loadRelativeDate('Tomorrow')">Days Until Tomorrow</a></li>
            <li><a href="#" onclick="return loadRelativeDate('Friday')">Days Until Friday</a></li>
            <li><a href="#" onclick="return loadRelativeDate('Weekend')">Days Until Weekend</a></li>
            <li><a href="#" onclick="return loadRelativeDate('Payday')">Days Until Payday</a></li>
            <li><a href="#" onclick="return loadRelativeDate('Vacation')">Days Until Vacation</a></li>
        </ul>
    </div>
    <!-- Seasons -->
    <div class="category-section">
        <h3>🌤 Days Until Seasons</h3>
        <ul class="category-links">
            <li><a href="#" onclick="return loadEvent('Spring')">Days Until Spring</a></li>
            <li><a href="#" onclick="return loadEvent('Summer')">Days Until Summer</a></li>
            <li><a href="#" onclick="return loadEvent('Fall')">Days Until Fall</a></li>
            <li><a href="#" onclick="return loadEvent('Winter')">Days Until Winter</a></li>
        </ul>
    </div>
    <!-- Shopping Events -->
    <div class="category-section">
        <h3>🛍 Days Until Shopping Events</h3>
        <ul class="category-links">
            <li><a href="#" onclick="return loadEvent('Black Friday')">Days Until Black Friday</a></li>
            <li><a href="#" onclick="return loadEvent('Cyber Monday')">Days Until Cyber Monday</a></li>
        </ul>
    </div>
</div>
<!-- Popular Countdowns -->
<section class="popular-countdowns">
    <!-- Upcoming Weekdays -->
    <div class="popular-section">
        <h3>📆 Days Until Weekdays</h3>
        <ul class="popular-links" id="upcomingWeekdaysList"></ul>
    </div>	
	<!-- Upcoming Months -->
    <div class="popular-section">
        <h3>🗓 Days Until Months</h3>
        <ul class="popular-links" id="upcomingMonthsList"></ul>
    </div>
    <!-- Upcoming Years -->
    <div class="popular-section">
        <h3>📅 Days Until Years</h3>
        <ul class="popular-links" id="upcomingYearsList"></ul>
    </div>	
	<!-- Upcoming Calendar Dates -->
    <div class="popular-section">
        <h3>📅 How Many Days Until Dates</h3>
        <ul class="popular-links" id="upcomingCalendarDatesList"></ul>
    </div> 
</section>
</main> 
<?php include "footer.php"; ?> 
<script src="origg-js/right-panel.js"></script>
<script src="origg-js/until.js"></script>
</body>
</html>