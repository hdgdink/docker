FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

RUN yum update -y
RUN yum install -y httpd php php-mysql
RUN yum clean all && rm -rf /tmp/yum*



COPY conf/httpd.conf /etc/httpd/conf/httpd.conf
RUN chmod 0755 /etc/httpd/conf/httpd.conf

COPY conf/start.sh /start.sh

COPY src/index.php /var/www/html/index.php
RUN chmod 0755 /var/www/html/index.php

EXPOSE 8080

RUN chmod 0755 /start.sh
CMD ["bash", "start.sh"]