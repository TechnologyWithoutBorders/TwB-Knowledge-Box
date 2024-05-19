FROM alpine:3.13

RUN apk update && apk add \
    bash \
    python3 \
    curl

RUN curl -o kolibri -L https://github.com/learningequality/kolibri/releases/download/v0.16.1/kolibri-0.16.1.pex

RUN chmod +x kolibri

RUN mkdir /root/.kolibri

CMD python3 ./kolibri start && tail -f /root/.kolibri/logs/kolibri.txt
