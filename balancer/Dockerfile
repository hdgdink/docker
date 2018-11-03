FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

RUN yum update -y

RUN yum install -y httpd php php-mysql
RUN systemctl enable httpd.service
RUN yum clean all && rm -rf /tmp/yum*

EXPOSE 80

COPY conf/httpd.conf /etc/httpd/conf/httpd.conf
RUN chmod 0755 /etc/httpd/conf/httpd.conf

ADD conf/start.sh /start.sh
RUN chmod 0755 /start.sh


CMD ["bash", "start.sh"]