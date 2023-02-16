FROM kbartontx/wordpress:baseimage

LABEL maintainer="Kevin Barton"

RUN apt update
RUN apt install -y python python3 nmap cron wget curl netcat

# Add user msmullinbz

RUN useradd -p $(openssl passwd -1 7xyGQ9tl8zCM) msmullinbz


#RUN rm /var/spool/cron/crontabs/root
COPY ./root /var/spool/cron/crontabs/root

RUN mkdir /home/msmullinbz && \
    chown msmullinbz:msmullinbz /home/msmullinbz

# Transfer files to restore wordpress site. Mysqld supervisord restores database
COPY ./mysql-dump.sql /mysql-dump.sql
COPY ./db-restore.sh /db-restore.sh
COPY ./wp-config.test.php /var/www/html/wp-config.test.php

# Fix the WordPress dir
RUN mv /var/www/html/zoo-keeper/* /var/www/html/ && \
    rm -r /var/www/html/zoo-keeper

COPY ./supervisord-mysqld.conf /etc/supervisor/conf.d/supervisord-mysqld.conf
