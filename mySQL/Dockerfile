FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python; yum clean all; systemctl enable httpd.service


EXPOSE 3306

