FROM alpine:latest

RUN apk update && apk add \
    bash \
    python3 \
    curl

RUN curl -o kolibri -L https://github.com/learningequality/kolibri/releases/download/v0.15.10/kolibri-0.15.10.pex

RUN chmod +x kolibri

RUN mkdir /root/.kolibri

EXPOSE 8080

CMD ./kolibri start && tail -f /root/.kolibri/server.log
