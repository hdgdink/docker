FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python
RUN systemctl start mariadb.service
RUN systemctl enable mariadb.service

EXPOSE 3306

