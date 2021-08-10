FROM ubuntu/apache2

RUN apt-get -y update && \
	apt-get -y install software-properties-common && \
	add-apt-repository -y ppa:ondrej/php && \
	apt-get install -y \
		php7.2 \
		ibapache2-mod-php7.2 \
		php7.2-common \
		php7.2-mbstring \
		php7.2-xmlrpc \
		php7.2-soap \
		php7.2-gd \
		php7.2-xml \
		php7.2-intl \
		php7.2-mysql \
		php7.2-cli \
		php7.2-ldap \
		php7.2-zip \
		php7.2-curl

COPY sentrifugo.conf /etc/apache2/sites-available/sentrifugo.conf
COPY --chown=www-data:www-data sentrifugo /var/www/html/

RUN a2ensite sentrifugo && \
	a2enmod rewrite && \
	service apache2 restart && \
	rm /var/www/html/index.html