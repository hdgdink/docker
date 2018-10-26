FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python

EXPOSE 3306

ENV MYSQL_DATABASE test
ENV MYSQL_USER root
ENV MYSQL_PASSWORD rootroot