FROM wyveo/nginx-php-fpm:php72

WORKDIR /usr/share/nginx/


#Instalando Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y php7.2 php7.2-dev php7.2-xml php7.2-mbstring php7.2-json php7.2-curl php7.2-cli php7.2-common php-pear php7.2-fpm php7.2-ldap php7.2-gd php7.2-sybase vim

