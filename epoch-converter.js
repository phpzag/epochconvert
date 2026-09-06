window.onload = function() {
  const timestamp = Date.now();
  document.getElementById('epoch-input').value = timestamp;
  convertEpochTime(timestamp);
  
  // manual date converion
  const now = new Date();
  const year = now.getFullYear();
  const month = now.getMonth() + 1;
  const day = now.getDate();
  const hour = now.getHours();
  const minute = now.getMinutes();
  const second = now.getSeconds();
  const timezone = document.getElementById('timezone').value;  
  document.getElementById('year').value = year;
  document.getElementById('month').value = month;
  document.getElementById('day').value = day;
  document.getElementById('hour').value = hour;
  document.getElementById('minute').value = minute;
  document.getElementById('second').value = second;  
  convertHumanReadableToEpoch (year, month, day, hour, minute, second, timezone);
};
document.getElementById('convert-btn').addEventListener('click', function() {
  const timestampInput = document.getElementById('epoch-input').value.trim();
  if(!timestampInput) {
	  const timestamp = Date.now();  
	  document.getElementById('epoch-input').value = timestamp;
  }
  convertEpochTime(timestampInput);
});
function convertEpochTime (input) {
  const resultsSection = document.getElementById('results');
  const gmtSpan = document.getElementById('gmt-time');
  const localSpan = document.getElementById('local-time');
  const timeZoneSpan = document.getElementById('time-zone'); 
  const relativeSpan = document.getElementById('relative-time');
  const isoSpan = document.getElementById('iso-time');  
  const unixSecondsSpan = document.getElementById('unix-seconds'); 
  const unixMillisecondsSpan = document.getElementById('unix-milliseconds'); 

  let date;
  if (input === '') {
    date = new Date(); 
  } else if (/^\d+$/.test(input)) {    
    const num = BigInt(input);
    if (num < 1_000_000_000_000n) { 
      date = new Date(Number(num) * 1000);
    } else if (num < 1_000_000_000_000_000n) { 
      date = new Date(Number(num));
    } else if (num < 1_000_000_000_000_000_000n) { 
      date = new Date(Number(num / 1000n));
    } else {
      date = new Date(Number(num / 1_000_000n));
    }
  } else {    
    date = new Date(input);
  }
  
  if (isNaN(date.getTime())) {    
    date = new Date(); 
  }
  
  resultsSection.style.display = 'block';
  gmtSpan.textContent = date.toUTCString(); 
  localSpan.textContent = date.toLocaleString(); 
  
  const timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
  timeZoneSpan.textContent = timeZone; 

  relativeSpan.textContent = getRelativeTime(date); 
  isoSpan.textContent = date.toISOString(); 
  
  const unixTimestampSeconds = Math.floor(date.getTime() / 1000); 
  const unixTimestampMilliseconds = date.getTime();
  unixSecondsSpan.textContent = unixTimestampSeconds; 
  unixMillisecondsSpan.textContent = unixTimestampMilliseconds; 
}

function getRelativeTime(date) {
  const now = new Date();
  const diffInSeconds = Math.floor((now - date) / 1000);  
  if (diffInSeconds < 60) {
    return `${diffInSeconds} seconds ago`;
  } else if (diffInSeconds < 3600) {
    const minutes = Math.floor(diffInSeconds / 60);
    return `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
  } else if (diffInSeconds < 86400) {
    const hours = Math.floor(diffInSeconds / 3600);
    return `${hours} hour${hours > 1 ? 's' : ''} ago`;
  } else {
    const days = Math.floor(diffInSeconds / 86400);
    return `${days} day${days > 1 ? 's' : ''} ago`;
  }
}

function convertHumanReadableToEpoch (year, month, day, hour, minute, second, timezone) {
  let date;
  if (timezone === 'GMT') {
    date = new Date(Date.UTC(year, month, day, hour, minute, second));
  } else {
    date = new Date(year, month, day, hour, minute, second);
  }  
  if (isNaN(date.getTime())) {    
    return;
  }    
  
  let formattedDate = date.toLocaleString('en-US', {
	  weekday: 'long',   // Include the day of the week
	  year: 'numeric',
	  month: 'long',     // Month name
	  day: 'numeric',
	  hour: 'numeric',
	  minute: 'numeric',
	  second: 'numeric',
	  hour12: true       // Display in 12-hour format with AM/PM
  });

  const unixTimestampSeconds = Math.floor(date.getTime() / 1000);
  const unixTimestampMilliseconds = date.getTime();
  const unixTimestampMicroseconds = unixTimestampMilliseconds * 1000;
  const unixTimestampNanoseconds = unixTimestampMilliseconds * 1_000_000;  
  
  
  
  document.getElementById('manual-results').style.display = 'block';
  document.getElementById('human-gmt-time').textContent = date.toUTCString();
  document.getElementById('human-local-time').textContent = formattedDate;
  document.getElementById('manual-unix-seconds').textContent = unixTimestampSeconds;
  document.getElementById('manual-unix-milliseconds').textContent = unixTimestampMilliseconds;
  document.getElementById('manual-unix-microseconds').textContent = unixTimestampMicroseconds;
  document.getElementById('manual-unix-nanoseconds').textContent = unixTimestampNanoseconds;
}

document.getElementById('manual-convert-btn').addEventListener('click', function() {
  const year = document.getElementById('year').value;
  const month = document.getElementById('month').value - 1;
  const day = document.getElementById('day').value;
  const hour = document.getElementById('hour').value;
  const minute = document.getElementById('minute').value;
  const second = document.getElementById('second').value;
  const timezone = document.getElementById('timezone').value;  
  convertHumanReadableToEpoch (year, month, day, hour, minute, second, timezone);
});




