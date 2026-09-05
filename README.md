# EpochConvert

**EpochConvert** is a developer-focused toolkit for working with Unix timestamps, epoch time, dates, timezones, Discord timestamps, and time-based data.

🌐 **Website:** https://www.epochconvert.com/

## 🚀 Developer Tools

### Unix / Epoch Timestamp Converter

Convert Unix timestamps and human-readable dates quickly and accurately.

Supports:

* Unix timestamps
* Seconds
* Milliseconds
* Microseconds
* Nanoseconds
* UTC / GMT
* Local time
* ISO 8601
* Relative time

### Discord Timestamp Converter

Generate and convert Discord timestamps using Discord's timestamp syntax.

🔗 **Discord Timestamp Converter:**
https://www.epochconvert.com/discord-timestamp-converter

Example:

```text
<t:1757073600:F>
```

Supported Discord timestamp formats include:

* `F` — Long date and time
* `f` — Short date and time
* `D` — Long date
* `d` — Short date
* `t` — Short time
* `T` — Long time
* `R` — Relative time

Discord timestamps automatically display according to the viewer's local timezone.

### Developer API

EpochConvert provides a lightweight JSON API for developers who need timestamp, date, timezone, IP, and Discord time conversions programmatically.

🔗 **Developer API:**
https://www.epochconvert.com/developer

**API endpoint:**

```text
https://www.epochconvert.com/developer/api
```

Example requests:

```text
Timestamp → Date
/developer/api?timestamp=1710000000
```

```text
Date → Timestamp
/developer/api?date=2024-03-10 12:00:00
```

```text
Current Time
/developer/api?time=1
```

```text
Timezone Information
/developer/api?timezone=Asia/Kolkata
```

```text
IP Information
/developer/api?ip=8.8.8.8
```

```text
Discord Timestamp → Date
/developer/api?discord=<t:1710000000:R>
```

```text
Bulk Timestamp Conversion
/developer/api?bulk=true&timestamps=1710000000,1710000500
```

The API also supports ISO 8601 output, timezone-aware conversion, and millisecond precision. A free tier is available with daily limits.

## Other Tools

EpochConvert includes additional tools for developers and users working with dates and time:

* **Batch Epoch Converter**
* **Timezone Converter**
* **Difference Between Two Dates Calculator**
* **Days Until Calculator**
* **SAS Timestamp Converter**
* **Server Log Timestamp Parser**
* **JSON Formatter & Timestamp Processor**
* **ISO 8601 Parser**
* **Current Clock**
* **World Holidays Calendar**
* **Daylight Saving Time (DST) Tools**

## Use Cases

EpochConvert is useful for:

* Software developers
* Backend and frontend developers
* API developers
* DevOps engineers
* System administrators
* QA engineers
* Database administrators
* Log analysis
* API debugging
* Database timestamp conversion
* Discord bot development
* Timezone-aware applications

## Technology

The project uses web technologies and developer-focused tools including:

* PHP
* JavaScript
* HTML5
* CSS3
* JSON
* REST APIs
* MySQL

## Contributing

Contributions are welcome.

1. Fork the repository.
2. Create a feature branch.

```bash
git checkout -b feature/my-new-feature
```

3. Make your changes.
4. Test your changes.
5. Commit your changes.

```bash
git commit -m "Add new timestamp utility"
```

6. Push your branch.

```bash
git push origin feature/my-new-feature
```

7. Open a Pull Request.

## Issues

If you find a bug or have a feature request, please create an issue:

https://github.com/phpzag/epochconvert/issues

Please include:

* Description of the issue
* Steps to reproduce
* Expected behavior
* Actual behavior
* Example input/timestamp
* Browser or environment information where applicable

## Roadmap

The goal of EpochConvert is to evolve into a complete **developer toolkit for Unix timestamps, dates, timezones, and time-based data**.

Future development may include:

* More timestamp formats
* Expanded Developer API
* JSON timestamp processing
* Server log parsing
* ISO 8601 utilities
* Additional timezone tools
* Programming-language timestamp references
* Bulk processing tools
* More developer utilities

## Links

* 🌐 **Epoch Converter:** https://www.epochconvert.com/
* 🕐 **Developer Timestamp Formats:** https://epochconvert.com/developer-timestamp-formats
* 💬 **Discord Timestamp Converter:** https://www.epochconvert.com/discord-timestamp-converter
* 🔌 **Developer API:** https://www.epochconvert.com/developer
* 💻 **GitHub:** https://github.com/phpzag/epochconvert
* 🐛 **Issues:** https://github.com/phpzag/epochconvert/issues

---

### About EpochConvert

EpochConvert is built as a practical, developer-friendly toolkit for working with **Unix timestamps, epoch time, dates, timezones, Discord timestamps, and time-based data**.

Whether you are debugging an API response, checking a database timestamp, analyzing server logs, creating Discord timestamps, or integrating time conversion into an application, EpochConvert provides tools to make working with time easier.
