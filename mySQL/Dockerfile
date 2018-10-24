FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN sudo yum update -y
RUN sudo yum install -y  mariadb-server

EXPOSE 3306

ENV MYSQL_DATABASE test
ENV MYSQL_USER root
ENV MYSQL_PASSWORD rootroot