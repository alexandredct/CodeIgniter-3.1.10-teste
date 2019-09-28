# Imagem do docker
FROM php:7.3.5-apache

# ajuste de timezone para Sao_Paulo
RUN rm /etc/localtime \
    && ln -s /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime

# Comandos a ser executados no container
RUN apt update \
    && apt upgrade -y \
    && apt install -y \
        apt-utils \
        libpq-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        git \
        zip \
        unzip \
    && a2enmod rewrite

# Para conexao com o PGSQL
RUN docker-php-ext-install pgsql pdo_pgsql

# Para conexao com o Sybase
RUN apt install -y \
    zlib1g-dev \
    unixodbc \
    unixodbc-dev \
    freetds-dev \
    freetds-bin \
    tdsodbc \
    apt-utils \
    libpq-dev \
    libicu-dev && \
    rm -rf /var/lib/apt/lists/*;

# Para o uso de QR Code
RUN docker-php-ext-configure gd \
    --with-gd \
    --with-jpeg-dir \
    --with-png-dir \
    --with-zlib-dir \
    --enable-gd-native-ttf
RUN docker-php-ext-install gd

# Permissões para as extensões
RUN chmod -R 777 /usr/local/lib/php/extensions/
RUN docker-php-ext-install pdo intl mbstring
RUN docker-php-ext-install pgsql pdo_pgsql
RUN docker-php-ext-configure pdo_dblib --with-libdir=/lib/x86_64-linux-gnu

# install xdebug
#RUN pecl install xdebug
RUN docker-php-ext-install pdo_dblib
RUN docker-php-ext-enable intl mbstring pdo_dblib
#RUN docker-php-ext-enable xdebug intl mbstring pdo_dblib

# Configuração das variáveis de ambiente do APACHE
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV HTDOCS /var/www/html

# Limpeza da pasta
RUN rm -R $HTDOCS

# Cópia inicial para o HTDOCS
WORKDIR $HTDOCS

# Configuracao do Apache e PHP
COPY docker_config/apache-config.conf /etc/apache2/sites-enabled/000-default.conf
COPY docker_config/apache2.conf /etc/apache2/apache2.conf
COPY docker_config/php.ini /usr/local/etc/php/php.ini

# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND

# Allow
VOLUME $HTDOCS
RUN chmod -R 777 $HTDOCS

# Expose apache.
EXPOSE 80
