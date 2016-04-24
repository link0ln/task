# nginx
FROM phusion/baseimage

RUN \
    add-apt-repository -y ppa:nginx/stable &&  \
    apt-get update &&  \
    apt-get install -y nginx &&  \
	apt-get clean -y && \
	rm -rf /var/lib/apt/lists/* && \
    echo "\ndaemon off;" >> /etc/nginx/nginx.conf &&  \
    chown -R www-data:www-data /var/lib/nginx &&  \
	mkdir /etc/service/nginx && \
	echo "#!/bin/sh" >> /etc/service/nginx/run && \
	echo "exec /usr/sbin/nginx -c /etc/nginx/nginx.conf" >> /etc/service/nginx/run && \
	chmod +x /etc/service/nginx/run
	
	CMD ["/sbin/my_init"]
