function padToTwoDigits(num) {
  return num.toString().padStart(2, "0");
}

function convertTo24Hour(timeStr) {
  const [time, modifier] = timeStr.split(" ");
  let [hours, minutes] = time.split(":");
  hours = parseInt(hours, 10);
  if (modifier === "PM" && hours !== 12) hours += 12;
  if (modifier === "AM" && hours === 12) hours = 0;
  return padToTwoDigits(hours) + ":" + minutes;
}

function convertDiscordTime(dateInput, timeInput, timezone) {
  if (!dateInput || !timeInput) return;

  const dateTime = new Date(`${dateInput}T${timeInput}:00`);
  let unixTimestamp = Math.floor(dateTime.getTime() / 1000);

  if (timezone === "Local") {
    unixTimestamp = Math.floor(new Date().getTime() / 1000);
  }

  const longFullFormat = dateTime.toLocaleString("en-US", {
    weekday: "long", year: "numeric", month: "long", day: "numeric",
    hour: "numeric", minute: "numeric", hour12: true
  });
  const shortFullFormat = dateTime.toLocaleString("en-US", {
    year: "numeric", month: "long", day: "numeric",
    hour: "numeric", minute: "numeric", hour12: true
  });
  const longDateFormat = dateTime.toLocaleDateString("en-US", {
    year: "numeric", month: "long", day: "numeric"
  });
  const shortDateFormat = dateTime.toLocaleDateString("en-US");
  const longTimeFormat = dateTime.toLocaleTimeString("en-US", {
    hour: "numeric", minute: "numeric", second: "numeric", hour12: true
  });
  const shortTimeFormat = dateTime.toLocaleTimeString("en-US", {
    hour: "numeric", minute: "numeric", hour12: true
  });

  const now = new Date();
  const timeDifference = Math.floor((dateTime - now) / 1000);
  const rtf = new Intl.RelativeTimeFormat("en", { numeric: "auto" });
  const formatRelative = (value, unit) => rtf.format(value, unit);

  let relativeTime = "";
  if (timeDifference > 0) {
    if (timeDifference < 60) relativeTime = formatRelative(timeDifference, "second");
    else if (timeDifference < 3600) relativeTime = formatRelative(Math.floor(timeDifference / 60), "minute");
    else if (timeDifference < 86400) relativeTime = formatRelative(Math.floor(timeDifference / 3600), "hour");
    else if (timeDifference < 2592000) relativeTime = formatRelative(Math.floor(timeDifference / 86400), "day");
    else if (timeDifference < 31536000) relativeTime = formatRelative(Math.floor(timeDifference / 2592000), "month");
    else relativeTime = formatRelative(Math.floor(timeDifference / 31536000), "year");
  } else {
    const past = Math.abs(timeDifference);
    if (past < 60) relativeTime = formatRelative(-past, "second");
    else if (past < 3600) relativeTime = formatRelative(-Math.floor(past / 60), "minute");
    else if (past < 86400) relativeTime = formatRelative(-Math.floor(past / 3600), "hour");
    else if (past < 2592000) relativeTime = formatRelative(-Math.floor(past / 86400), "day");
    else if (past < 31536000) relativeTime = formatRelative(-Math.floor(past / 2592000), "month");
    else relativeTime = formatRelative(-Math.floor(past / 31536000), "year");
  }

  document.getElementById("discord-timestamp-output").style.display = "block";
  document.getElementById("long-dt").textContent = `<t:${unixTimestamp}:F>`;
  document.getElementById("long-dt-detail").innerHTML = `<span class="readable">${longFullFormat}</span>`;
  document.getElementById("short-dt").textContent = `<t:${unixTimestamp}:f>`;
  document.getElementById("short-dt-detail").innerHTML = `<span class="readable">${shortFullFormat}</span>`;
  document.getElementById("long-date").textContent = `<t:${unixTimestamp}:D>`;
  document.getElementById("long-date-detail").innerHTML = `<span class="readable">${longDateFormat}</span>`;
  document.getElementById("short-date").textContent = `<t:${unixTimestamp}:d>`;
  document.getElementById("short-date-detail").innerHTML = `<span class="readable">${shortDateFormat}</span>`;
  document.getElementById("short-full").textContent = `<t:${unixTimestamp}:t>`;
  document.getElementById("short-full-detail").innerHTML = `<span class="readable">${shortTimeFormat}</span>`;
  document.getElementById("long-full").textContent = `<t:${unixTimestamp}:T>`;
  document.getElementById("long-full-detail").innerHTML = `<span class="readable">${longTimeFormat}</span>`;
  document.getElementById("relative-dt").textContent = `<t:${unixTimestamp}:R>`;
  document.getElementById("relative-dt-detail").innerHTML = `<span class="readable">${relativeTime}</span>`;
  document.getElementById("unix-time").textContent = `${unixTimestamp}`;
  document.getElementById("unix-time-detail").innerHTML = `${unixTimestamp}`;
}

document.addEventListener("DOMContentLoaded", function () {
  const timePicker = document.getElementById("time-picker");
  const dropdown = document.getElementById("time-dropdown");
  const container = document.querySelector(".time-picker-container");

  // Generate AM → PM in order
  function generateTimes() {
    const times = [];
    for (let hour = 12; hour >= 1; hour--) {
      for (let min = 0; min < 60; min++) {
        times.push(`${hour}:${padToTwoDigits(min)} AM`);
      }
    }
    for (let hour = 12; hour >= 1; hour--) {
      for (let min = 0; min < 60; min++) {
        times.push(`${hour}:${padToTwoDigits(min)} PM`);
      }
    }
    return times.reverse(); // ensures 12:00AM → 11:59PM
  }

  generateTimes().forEach(time => {
    const div = document.createElement("div");
    div.classList.add("time-option");
    div.textContent = time;
    div.addEventListener("click", () => {
      timePicker.value = time;
      dropdown.style.display = "none";
      container.classList.remove("open");
    });
    dropdown.appendChild(div);
  });

  timePicker.addEventListener("click", () => {
    const isOpen = dropdown.style.display === "block";
    dropdown.style.display = isOpen ? "none" : "block";
    container.classList.toggle("open", !isOpen);
  });

  document.addEventListener("click", (e) => {
    if (!container.contains(e.target)) {
      dropdown.style.display = "none";
      container.classList.remove("open");
    }
  });

  // Set default date/time
  const now = new Date();
  const currentDate = now.getFullYear() + "-" +
    padToTwoDigits(now.getMonth() + 1) + "-" +
    padToTwoDigits(now.getDate());
  document.getElementById("date-input").value = currentDate;
  let hours = now.getHours();
  const minutes = padToTwoDigits(now.getMinutes());
  const ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12 || 12;
  timePicker.value = hours + ":" + minutes + " " + ampm;

  convertDiscordTime(currentDate, convertTo24Hour(timePicker.value), document.getElementById("timezone-input").value);
});

document.getElementById("convert-discord-timestamp").addEventListener("click", () => {
  const dateInput = document.getElementById("date-input").value;
  const timeInput = convertTo24Hour(document.getElementById("time-picker").value);
  const timezone = document.getElementById("timezone-input").value;
  convertDiscordTime(dateInput, timeInput, timezone);
});

/// discord timeatmp to date time 

document.getElementById('convert-btn').addEventListener('click', () => {
  const inp = document.getElementById('timestamp-input').value.trim();
  const out = document.getElementById('conversion-output');
  
  // Parse Discord tag or raw number
  const m = inp.match(/<t:(\d+):?.*>/);
  const ts = m ? m[1] : inp;

  if (!/^\d+$/.test(ts)) {
    out.textContent = 'Enter a numeric Discord timestamp or epoch.';
    return;
  }

  const date = new Date(Number(ts) * 1000);
  out.textContent = `Human readable date time: ${date.toLocaleString()}`;
});
