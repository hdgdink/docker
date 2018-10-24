FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN sudo yum update
RUN sudo yum install httpd php
ADD conf /etc/httpd/httpd.conf
ADD conf /start.sh
ADD conf /var/www

RUN chmod 0755 /start.sh
CMD ["bash", "start.sh"]