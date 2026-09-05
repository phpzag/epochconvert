# EpochConvert

[![Website](https://img.shields.io/badge/Website-EpochConvert.com-blue)](https://www.epochconvert.com/)
[![GitHub](https://img.shields.io/badge/GitHub-phpzag%2Fepochconvert-black)](https://github.com/phpzag/epochconvert)

**EpochConvert** is a collection of developer-focused tools for working with Unix timestamps, epoch time, dates, timezones, and time-based data.

🌐 **Live website:** https://www.epochconvert.com/

The project is designed to make common date and time conversions simple, fast, and easy to use for developers, system administrators, testers, and anyone working with timestamp-based data.

## Features

### Unix / Epoch Timestamp Converter

Convert Unix timestamps between human-readable dates and epoch timestamps.

Supported timestamp units include:

* Seconds
* Milliseconds
* Microseconds
* Nanoseconds

The converter provides useful representations including:

* UTC / GMT
* Local time
* ISO 8601
* Relative time
* Date and time formats

### Date to Unix Timestamp

Convert a date and time into a Unix timestamp.

### Timezone Converter

Convert dates and times between different timezones and work with IANA timezone names.

Examples:

```text
UTC
America/New_York
Europe/London
Asia/Kolkata
Asia/Tokyo
Australia/Sydney
```

### Discord Timestamp Converter

Create and convert Discord timestamps using Discord's timestamp syntax.

Example:

```text
<t:1757073600:F>
```

Discord automatically displays the timestamp according to the viewer's local timezone.

### Batch Timestamp Converter

Convert multiple timestamps at once instead of processing them individually.

This is useful when working with:

* Application logs
* Database records
* API responses
* Server logs
* Debugging data
* Large datasets

### Days Between Dates

Calculate the difference between two dates and determine the number of:

* Days
* Weeks
* Months
* Years

### Developer Timestamp Tools

EpochConvert is intended to provide a broader toolkit for developers working with time-based data, including timestamp formats commonly used by programming languages, APIs, databases, and distributed systems.

## Why EpochConvert?

Unix timestamps are widely used in software systems because they provide a timezone-independent representation of time.

However, timestamps can become difficult to interpret when debugging logs, APIs, databases, or application responses.

EpochConvert provides a simple interface for converting and understanding these values without requiring command-line tools or custom scripts.

## Example

A Unix timestamp such as:

```text
1757073600
```

can be converted into a human-readable date and time.

You can also convert a date such as:

```text
2025-09-05 12:00:00 UTC
```

back into a Unix timestamp.

## Use Cases

EpochConvert can be useful for:

* Software developers
* Backend developers
* Frontend developers
* DevOps engineers
* System administrators
* QA engineers
* Database administrators
* API developers
* Debugging timestamp-related issues
* Working with Unix/Linux logs
* Converting API timestamps
* Understanding database timestamp values

## Technology

The project is primarily focused on web-based tools and developer utilities.

Depending on the specific tool, the project may use technologies such as:

* PHP
* JavaScript
* HTML5
* CSS3
* MySQL
* JSON
* REST APIs

## Getting Started

Clone the repository:

```bash
git clone https://github.com/phpzag/epochconvert.git
cd epochconvert
```

Then configure the project according to your local PHP/web-server environment.

For the latest production version, visit:

https://www.epochconvert.com/

## Project Structure

The repository contains the source code and resources used to build EpochConvert and its collection of timestamp and date-related developer tools.

As the project evolves, additional documentation will be added for individual tools, configuration, APIs, and development workflows.

## Contributing

Contributions are welcome.

If you find a bug, have an improvement, or want to add a new developer-focused time utility:

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

6. Push the branch.

```bash
git push origin feature/my-new-feature
```

7. Open a Pull Request.

Please keep contributions focused, well-documented, and compatible with the existing project.

## Issues

If you find a bug or have a feature request, please create an issue in the GitHub repository:

https://github.com/phpzag/epochconvert/issues

When reporting a problem, include:

* Description of the issue
* Steps to reproduce it
* Expected behavior
* Actual behavior
* Browser/environment information where applicable
* Example timestamp or input that causes the problem

## Roadmap

The goal of EpochConvert is to grow from a simple epoch converter into a comprehensive **developer toolkit for Unix timestamps, dates, timezones, and time-based data**.

Potential areas of development include:

* More timestamp formats
* Developer API
* JSON timestamp processing
* Log timestamp parsing
* Additional timezone utilities
* ISO 8601 tools
* More programming-language timestamp references
* Batch processing tools
* Additional date calculators
* Improved developer documentation

## License

Please see the `LICENSE` file in this repository for licensing information.

## Links

* **Website:** https://www.epochconvert.com/
* **GitHub:** https://github.com/phpzag/epochconvert
* **Issues:** https://github.com/phpzag/epochconvert/issues

---

### About EpochConvert

EpochConvert is built to be a practical, developer-friendly toolkit for working with **Unix timestamps, epoch time, dates, timezones, and time-based data**.

Whether you are debugging an API response, checking a database timestamp, analyzing server logs, converting Discord timestamps, or simply converting a date to Unix time, EpochConvert provides tools to make the process easier.
