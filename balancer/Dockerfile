FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

RUN yum update -y

RUN yum install -y httpd
RUN systemctl enable httpd.service

ADD conf/lb.conf /etc/httpd/conf/lb.conf
ADD conf/httpd.conf /etc/httpd/conf/httpd.conf
ADD src/index.php /var/www/html

