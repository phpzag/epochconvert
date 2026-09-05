# EpochConvert

**EpochConvert** is a developer-focused toolkit for working with **Unix timestamps, epoch time, dates, timezones, Discord timestamps, and time-based data**.

Whether you're debugging an API response, working with database timestamps, analyzing server logs, developing Discord bots, or building timezone-aware applications, EpochConvert provides practical tools to make working with time easier.

[![Website](https://img.shields.io/badge/Website-EpochConvert-blue)](https://www.epochconvert.com/)
[![GitHub Stars](https://img.shields.io/github/stars/phpzag/epochconvert?style=flat)](https://github.com/phpzag/epochconvert)
[![GitHub Issues](https://img.shields.io/github/issues/phpzag/epochconvert)](https://github.com/phpzag/epochconvert)

🌐 **Website:** https://www.epochconvert.com/

---

## 🚀 Quick Start

Visit **[EpochConvert](https://www.epochconvert.com/)** to quickly:

* Convert Unix timestamps to human-readable dates
* Convert dates to Unix timestamps
* Work with seconds, milliseconds, microseconds, and nanoseconds
* Convert timestamps between UTC and local time
* Generate Discord timestamps
* Convert dates and times between timezones
* Calculate the difference between two dates
* Process timestamps in bulk
* Parse ISO 8601 dates
* Analyze server log timestamps
* Use timestamp conversion through a JSON API

---

## 📸 Screenshots

### Unix Timestamp Converter

![EpochConvert Unix Timestamp Converter](screenshots/unix-timestamp-converter.png)

### Discord Timestamp Converter

![EpochConvert Discord Timestamp Converter](screenshots/discord-timestamp-converter.png)

### Developer API

![EpochConvert Developer API](screenshots/developer-api.png)

> Screenshots are provided to give an overview of the EpochConvert developer tools and user interface.

---

## ✨ Features

### Unix / Epoch Timestamp Converter

Convert Unix timestamps and human-readable dates quickly and accurately.

Supported timestamp precision includes:

* Seconds
* Milliseconds
* Microseconds
* Nanoseconds

Supported date and time formats include:

* UTC / GMT
* Local time
* ISO 8601
* Relative time

🔗 **[Unix Timestamp Converter](https://www.epochconvert.com/)**

---

### 💬 Discord Timestamp Converter

Generate and convert timestamps using Discord's timestamp syntax.

🔗 **[Discord Timestamp Converter](https://www.epochconvert.com/discord-timestamp-converter)**

Example:

```text
<t:1757073600:F>
```

Supported Discord timestamp formats include:

| Format | Description         |
| ------ | ------------------- |
| `F`    | Long date and time  |
| `f`    | Short date and time |
| `D`    | Long date           |
| `d`    | Short date          |
| `t`    | Short time          |
| `T`    | Long time           |
| `R`    | Relative time       |

Discord automatically displays timestamps according to the viewer's local timezone.

---

## 🔌 Developer API

EpochConvert provides a lightweight **JSON API** for developers who need programmatic timestamp, date, timezone, IP, and Discord time conversions.

🔗 **[EpochConvert Developer API](https://www.epochconvert.com/developer)**

### API Endpoint

```text
https://www.epochconvert.com/developer/api
```

### Timestamp → Date

```text
/developer/api?timestamp=1710000000
```

### Date → Timestamp

```text
/developer/api?date=2024-03-10%2012:00:00
```

### Current Time

```text
/developer/api?time=1
```

### Timezone Information

```text
/developer/api?timezone=Asia/Kolkata
```

### IP Information

```text
/developer/api?ip=8.8.8.8
```

### Discord Timestamp → Date

```text
/developer/api?discord=<t:1710000000:R>
```

### Bulk Timestamp Conversion

```text
/developer/api?bulk=true&timestamps=1710000000,1710000500
```

---

## 📋 API Response Example

For example, a timestamp request:

```text
https://www.epochconvert.com/developer/api?timestamp=1710000000
```

returns JSON data similar to:

```json
{
  "success": true,
  "timestamp": 1710000000,
  "datetime": "2024-03-09T16:00:00Z",
  "utc": "2024-03-09 16:00:00",
  "iso8601": "2024-03-09T16:00:00+00:00"
}
```

> **Note:** Keep this response example synchronized with the actual API response returned by EpochConvert. If the live API uses different field names or includes additional fields, update this example accordingly.

The API supports timestamp conversion, timezone-aware processing, ISO 8601 output, Discord timestamps, and millisecond precision.

For current API capabilities, authentication, usage instructions, and rate limits, see the **[Developer API documentation](https://www.epochconvert.com/developer)**.

---

## 🛠️ Other Tools

EpochConvert includes additional tools for developers and users working with dates, timestamps, and time-based data.

* **[Batch Epoch Converter](https://www.epochconvert.com/batch-converter)** — Convert multiple timestamps at once.
* **[Timezone Converter](https://www.epochconvert.com/timezone-converter)** — Convert dates and times between timezones.
* **[Difference Between Two Dates](https://www.epochconvert.com/days-between-dates)** — Calculate the difference between two dates.
* **[Days Until Calculator](https://www.epochconvert.com/days-until)** — Calculate how many days remain until a date or event.
* **SAS Timestamp Converter** — Convert SAS timestamps and dates.
* **Server Log Timestamp Parser** — Work with timestamps from server and application logs.
* **JSON Formatter & Timestamp Processor** — Format JSON and work with timestamp data.
* **ISO 8601 Parser** — Parse and work with ISO 8601 date and time values.
* **Current Clock** — View current time information.
* **World Holidays Calendar** — Explore holidays and dates around the world.
* **DST Tools** — Work with Daylight Saving Time information.

---

## 💡 Why EpochConvert?

EpochConvert goes beyond being a simple Unix timestamp converter.

It is designed as a **developer toolkit for Unix timestamps, dates, timezones, and time-based data**, bringing commonly needed time-related utilities together in one place.

It can be useful when working with:

* Unix and epoch timestamps
* API responses
* JSON data
* Database timestamps
* Server and application logs
* ISO 8601 dates
* UTC and GMT
* Timezones
* Discord timestamps
* Date calculations
* Time-based applications

---

## 👨‍💻 Use Cases

EpochConvert can be useful for:

* Software developers
* Backend developers
* Frontend developers
* API developers
* DevOps engineers
* System administrators
* QA engineers
* Database administrators
* Discord bot developers
* Log analysis
* API debugging
* Database timestamp conversion
* Timezone-aware applications

---

## 🧑‍💻 Developer Resources

### Developer Timestamp Formats

Learn about common timestamp formats and how different programming languages and systems represent time.

🔗 **[Developer Timestamp Formats](https://www.epochconvert.com/developer-timestamp-formats)**

This resource can be useful when working with Unix timestamps, epoch time, Unix time, milliseconds, microseconds, nanoseconds, and other common date and time representations.

---

## 🔧 Technology

EpochConvert uses web technologies and developer-focused tools including:

* PHP
* JavaScript
* HTML5
* CSS3
* JSON
* Web APIs
* MySQL

---

## 🤝 Contributing

Contributions, bug reports, suggestions, and improvements are welcome.

### Development Workflow

1. Fork the repository.
2. Clone your fork.
3. Create a feature branch.

```bash
git checkout -b feature/my-new-feature
```

4. Make your changes.
5. Test your changes.
6. Commit your changes.

```bash
git commit -m "Add new timestamp utility"
```

7. Push your branch.

```bash
git push origin feature/my-new-feature
```

8. Open a Pull Request.

Please provide a clear description of your changes and explain how they were tested.

---

## 🐛 Issues and Feature Requests

Found a bug or have an idea for a new feature?

Please create an issue:

**https://github.com/phpzag/epochconvert/issues**

When reporting an issue, include as much relevant information as possible:

* Description of the issue
* Steps to reproduce
* Expected behavior
* Actual behavior
* Example input or timestamp
* Browser information
* Operating system
* Environment details, where applicable

---

## 🗺️ Roadmap

EpochConvert is continuously evolving as a developer toolkit for time and date-related data.

Potential future improvements include:

* Additional timestamp formats
* Expanded API functionality
* More programming-language examples
* Improved bulk processing
* Additional timezone utilities
* More server log formats
* Additional date and time parsers
* Developer-focused integrations
* Command-line utilities
* Additional API examples and SDK resources

Suggestions and feature requests are welcome through **[GitHub Issues](https://github.com/phpzag/epochconvert/issues)**.

---

## 🌐 Links

* 🌐 **[EpochConvert](https://www.epochconvert.com/)**
* 🕐 **[Unix Timestamp Converter](https://www.epochconvert.com/)**
* 💬 **[Discord Timestamp Converter](https://www.epochconvert.com/discord-timestamp-converter)**
* 🔌 **[Developer API](https://www.epochconvert.com/developer)**
* 🕐 **[Developer Timestamp Formats](https://www.epochconvert.com/developer-timestamp-formats)**
* 🌍 **[Timezone Converter](https://www.epochconvert.com/timezone-converter)**
* 📦 **[Batch Epoch Converter](https://www.epochconvert.com/batch-converter)**
* 📅 **[Difference Between Two Dates](https://www.epochconvert.com/days-between-dates)**
* 💻 **[GitHub Repository](https://github.com/phpzag/epochconvert)**
* 🐛 **[GitHub Issues](https://github.com/phpzag/epochconvert/issues)**

---

## 📄 License

Please see the repository license file for licensing information.

---

## About EpochConvert

**EpochConvert** is a practical, developer-friendly toolkit for working with **Unix timestamps, epoch time, dates, timezones, Discord timestamps, and time-based data**.

Whether you are debugging an API response, checking a database timestamp, analyzing server logs, creating Discord timestamps, comparing dates across timezones, or integrating time conversion into an application, EpochConvert provides tools to make working with time easier.

🌐 **Explore EpochConvert:**

https://www.epochconvert.com/
