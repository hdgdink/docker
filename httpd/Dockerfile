FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install httpd php -y
ADD conf/httpd.conf /etc/httpd/httpd.conf
ADD conf/start.sh /start.sh
ADD conf/index.php /var/www

EXPOSE 8080

RUN chmod 0755 /start.sh
CMD ["bash", "start.sh"]
