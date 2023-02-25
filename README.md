# TwB-Knowledge-Box

The Knowledge Box is an offline server that brings educational content to schools without stable internet connection. We are deploying the great applications [Kiwix](https://github.com/kiwix/kiwix-tools) and [Kolibri](https://github.com/learningequality/kolibri) via docker compose on Linux machines.

## Content Storage
- **Kiwix:** Save zim files in ```kiwix/content``` and add desired images to the kiwix command in ```docker-compose.yml```.
- **Kolibri:** Downloaded content channels are saved within the container.
