FROM ubuntu:latest
MAINTAINER Stephen La Pierre <stephen.lapierre@groupm.coms>

# Install apache, PHP, and supplimentary programs. openssh-server, curl are for debugging the container.
RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php7.4-gd php7.4-mysql libapache2-mod-php7.4 php7.4-mbstring php-xml curl nano \
    net-tools nfs-common rpcbind portmap dnsutils iputils-ping mysql-client tcpdump

# Enable apache mods.@
RUN a2enmod php7.4
RUN a2enmod rewrite
RUN a2enmod headers
# RUN a2enmod proxy
RUN a2enmod ssl
# Update the PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.4/apache2/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.4/apache2/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_HTTP_PROTOCOLS http/1.1
ENV APACHE_SERVER_NAME apiportal.mplatform.com
# new SSL env settings
ENV APACHE_SSL_CERTS wildcard.mplatform.com.crt
ENV APACHE_SSL_LOG_LEVEL info
ENV APACHE_HTTP_PROTOCOLS http/1.1
ENV APACHE_SERVER_NAME apiportal.mplatform.com

# apache port env config

# Expose apache & MySql.
EXPOSE  80 443 8000 3306

# Update the default apache site with the config we created, SSL or HTTP
# ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
ADD default-ssl.conf /etc/apache2/sites-enabled/000-default.conf
ADD ports.conf /etc/apache2/ports.conf
ADD apache2.conf /etc/apache2/apache2.conf

# CERTS
ADD wildcard.mplatform.com.crt /etc/ssl/certs/wildcard.mplatform.com.crt
ADD wildcard.mplatform.com.key /etc/ssl/certs/wildcard.mplatform.com.key
ADD wildcard.mplatform.com.crt /etc/ssl/private/wildcard.mplatform.com.crt


COPY . /var/www
# NOTE: sometimes the container did not have these files.
COPY ./web/profiles/contrib/apigee_devportal_kickstart/. /var/www/web/profiles/contrib/apigee_devportal_kickstart/

# create Mount point
RUN mkdir /data

# Clean up the container
RUN rm /var/www/*.conf
RUN env >> /etc/environment
RUN echo ". /etc/environment" >> /etc/apache2/envvars
RUN chown -R www-data:www-data /var/www/*
RUN chown -R www-data:www-data /var/log/apache2
# CERTS
RUN rm /var/www/wildcard.mplatform.com.crt
RUN rm /var/www/wildcard.mplatform.com.key
RUN c_rehash

# --mount type=bind,source=/var/lib/docker/default,target=/var/www/web/sites/default
# docker run --mount type=bind,source=/Users/stephen.lapierre/docker-mount/default,target=/var/www/web/sites/default \
# --env-file=/usr/local/var/www/env_common.env -i -t -p 8000:443 -p 3306:3306 --hostname apiportal.mplatform.com \
# mplatform-portal /bin/bash


# docker build -t mplatform-portal .
# docker run --env-file=/usr/local/var/www/env_common.env -i -t -p 8000:8000 -p 3306:3306 --hostname apiportal.mplatform.com mplatform-portal /bin/bash
# docker run -p 8000:8000 -p 3306:3306 -d mplatform-portal


# ENTRYPOINT ["docker-entrypoint.sh"]
CMD /usr/sbin/apache2ctl -D FOREGROUND

