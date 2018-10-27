FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

RUN yum update -y
RUN yum install -y httpd php
RUN yum clean all && rm -rf /tmp/yum*

ADD conf/httpd.conf /etc/httpd/conf/httpd.conf
ADD conf/start.sh /start.sh
ADD src/index.php /var/www/html/index.php

EXPOSE 8080

RUN chmod 0755 /start.sh
CMD ["bash", "start.sh"]