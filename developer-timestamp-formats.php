<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unix Timestamp Formats for Developers - EpochConvert</title>
<meta name="description" content="Convert Unix timestamps and dates into Discord, Slack, ISO 8601, JavaScript, Python, PHP, SQL, JSON and other developer timestamp formats.">
<link rel="canonical" href="https://www.epochconvert.com/" />
<link rel="icon" href="favicons/favicon.ico" sizes="any" />
<link rel="icon" href="favicons/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
<link rel="manifest" href="favicons/manifest.webmanifest" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="origg-css/developer-timestamp-format.css">
</head>
<body>  
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<main> 
<h2>Unix Timestamp Formats for Developers</h2>
<p class="intro">
Enter a Unix timestamp or date and instantly convert it into
Discord, Slack, ISO 8601, JavaScript, Python, PHP, MySQL,
PostgreSQL, JSON, HTML and other developer-friendly timestamp formats.
</p>
    <section class="converter">
        <label class="input-label" for="timestampInput">
            Enter a date or Unix timestamp
        </label>
        <div class="input-row">
            <input
                type="text"
                id="timestampInput"
                placeholder="Example: 1767225600 or 2026-01-01 00:00:00 UTC"
            >
            <button type="button" onclick="convertTimestamp()">
                Convert
            </button>
        </div>
        <div class="quick-actions">
            <button type="button" class="secondary-btn" onclick="setCurrentTime()">
                Current Time
            </button>            
            <button type="button" class="secondary-btn" onclick="clearConverter()">
                Clear
            </button>
        </div>
        <div id="status" class="status"></div>
    </section>
    <section class="results-grid" id="results">
        <!-- Unix Seconds -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">Unix Timestamp (Seconds)</span>
                <button class="copy-btn" data-copy="unixSeconds">Copy</button>
            </div>
            <div class="format-description">
                Standard Unix epoch timestamp in seconds.
            </div>
            <div class="code-output" id="unixSeconds">-</div>
        </div>
        <!-- Unix Milliseconds -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">Unix Timestamp (Milliseconds)</span>
                <button class="copy-btn" data-copy="unixMilliseconds">Copy</button>
            </div>
            <div class="format-description">
                Commonly used by JavaScript.
            </div>
            <div class="code-output" id="unixMilliseconds">-</div>
        </div>
        <!-- ISO -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">ISO 8601</span>
                <button class="copy-btn" data-copy="iso8601">Copy</button>
            </div>
            <div class="format-description">
                Standard international date and time format.
            </div>
            <div class="code-output" id="iso8601">-</div>
        </div>
        <!-- UTC -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">UTC Date</span>
                <button class="copy-btn" data-copy="utcDate">Copy</button>
            </div>
            <div class="format-description">
                Human-readable Coordinated Universal Time.
            </div>
            <div class="code-output" id="utcDate">-</div>
        </div>
        <!-- Discord -->
        <div class="format-card full-width">
            <div class="format-header">
                <span class="format-title">Discord Timestamp Syntax</span>
                <button class="copy-btn" data-copy="discordFormats">Copy All</button>
            </div>
            <div class="format-description">
                Discord timestamp formats for use in messages.
            </div>
            <div class="code-output" id="discordFormats">-</div>
        </div>
        <!-- Slack -->
        <div class="format-card full-width">
            <div class="format-header">
                <span class="format-title">Slack Date Syntax</span>
                <button class="copy-btn" data-copy="slackFormat">Copy</button>
            </div>
            <div class="format-description">
                Slack date formatting syntax using a Unix timestamp.
            </div>
            <div class="code-output" id="slackFormat">-</div>
        </div>
        <!-- JavaScript -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">JavaScript</span>
                <button class="copy-btn" data-copy="javascriptFormat">Copy</button>
            </div>
            <div class="format-description">
                JavaScript Date object examples.
            </div>
            <div class="code-output" id="javascriptFormat">-</div>
        </div>
        <!-- Python -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">Python</span>
                <button class="copy-btn" data-copy="pythonFormat">Copy</button>
            </div>
            <div class="format-description">
                Python datetime examples.
            </div>
            <div class="code-output" id="pythonFormat">-</div>
        </div>
        <!-- PHP -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">PHP</span>
                <button class="copy-btn" data-copy="phpFormat">Copy</button>
            </div>
            <div class="format-description">
                PHP DateTime examples.
            </div>
            <div class="code-output" id="phpFormat">-</div>
        </div>
        <!-- MySQL -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">MySQL</span>
                <button class="copy-btn" data-copy="mysqlFormat">Copy</button>
            </div>
            <div class="format-description">
                Convert Unix timestamps in MySQL.
            </div>
            <div class="code-output" id="mysqlFormat">-</div>
        </div>
        <!-- PostgreSQL -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">PostgreSQL</span>
                <button class="copy-btn" data-copy="postgresFormat">Copy</button>
            </div>
            <div class="format-description">
                PostgreSQL timestamp conversion.
            </div>
            <div class="code-output" id="postgresFormat">-</div>
        </div>
        <!-- SQL Server -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">SQL Server</span>
                <button class="copy-btn" data-copy="sqlServerFormat">Copy</button>
            </div>
            <div class="format-description">
                Convert Unix seconds using DATEADD.
            </div>
            <div class="code-output" id="sqlServerFormat">-</div>
        </div>
        <!-- JSON -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">JSON</span>
                <button class="copy-btn" data-copy="jsonFormat">Copy</button>
            </div>
            <div class="format-description">
                Useful timestamp values for APIs and JSON data.
            </div>
            <div class="code-output" id="jsonFormat">-</div>
        </div>
        <!-- HTML -->
        <div class="format-card">
            <div class="format-header">
                <span class="format-title">HTML &lt;time&gt;</span>
                <button class="copy-btn" data-copy="htmlTimeFormat">Copy</button>
            </div>
            <div class="format-description">
                Semantic HTML date and time markup.
            </div>
            <div class="code-output" id="htmlTimeFormat">-</div>
        </div>
    </section>
    <section class="section">
        <h2>Supported Timestamp Formats</h2>
        <table class="info-table">
            <thead>
                <tr>
                    <th>Platform / Language</th>
                    <th>Example</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Discord</td>
                    <td><code>&lt;t:1767225600:F&gt;</code></td>
                </tr>
                <tr>
                    <td>Slack</td>
                    <td><code>&lt;!date^1767225600^{date_long}|Date&gt;</code></td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td><code>new Date(1767225600000)</code></td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td><code>datetime.fromtimestamp(1767225600, timezone.utc)</code></td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td><code>date('c', 1767225600)</code></td>
                </tr>
                <tr>
                    <td>MySQL</td>
                    <td><code>FROM_UNIXTIME(1767225600)</code></td>
                </tr>
                <tr>
                    <td>PostgreSQL</td>
                    <td><code>TO_TIMESTAMP(1767225600)</code></td>
                </tr>
                <tr>
                    <td>ISO 8601</td>
                    <td><code>2026-01-01T00:00:00.000Z</code></td>
                </tr>
            </tbody>
        </table>
    </section>    
</main>
  <?php include "footer.php"; ?> 
  <script src="origg-js/right-panel.js"></script>
  <script src="origg-js/developer-timestamp-format.js"></script>
</body>
</html>