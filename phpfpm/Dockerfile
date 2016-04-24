# php-fpm
FROM phusion/baseimage
RUN \
    apt-get update && \
    apt-get install -y php5 php5-mysql php5-gd php5-fpm imagemagick unzip mysql-client && \
    sed -e 's/\/var\/run\/php5-fpm.sock/9000/' -i /etc/php5/fpm/pool.d/www.conf && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
	mkdir /etc/service/php-fpm && \
	echo "#!/bin/sh" >> /etc/service/php-fpm/run && \
	echo "set -e" >> /etc/service/php-fpm/run && \
	echo "exec php5-fpm --nodaemonize" >> /etc/service/php-fpm/run && \
	chmod +x /etc/service/php-fpm/run

    CMD ["/sbin/my_init"]
