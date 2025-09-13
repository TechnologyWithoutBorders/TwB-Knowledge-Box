# TwB-Knowledge-Box

The Knowledge Box is an offline server that brings educational content to schools without stable internet connection. We are deploying the great applications [Kiwix](https://github.com/kiwix/kiwix-tools), [Kolibri](https://github.com/learningequality/kolibri), and [Moodle](https://github.com/moodle/moodle) via docker compose.

## Content Storage
- **Kiwix:** Save zim files in ```kiwix/content```.
- **Kolibri:** All data including content is stored in ```kolibri/data```.
- **Moodle:** All data is stored in persistent docker volumes.
