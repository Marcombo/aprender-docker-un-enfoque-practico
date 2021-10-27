FROM ubuntu:21.04

ENV DEBIAN_FRONTEND=noninteractive 
ENV TZ=Europe/Madrid

RUN apt-get update \
    && apt-get install -y apache2 \
    && apt-get install -y php \
    && apt-get install -y libapache2-mod-php \
    && apt-get install -y php-mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 80

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]