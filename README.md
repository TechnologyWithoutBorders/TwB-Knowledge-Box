# TwB-Knowledge-Box

The Knowledge Box is an offline server that brings educational content to schools without stable internet connection. We are deploying the great applications [Kiwix](https://github.com/kiwix/kiwix-tools) and [Kolibri](https://github.com/learningequality/kolibri) via docker compose.

## Content Storage
- **Kiwix:** Save zim files in ```kiwix/content``` and add desired images to the kiwix command in ```docker-compose.yml```.
- **Kolibri:** All data including content is stored in ```kolibri/data```.
