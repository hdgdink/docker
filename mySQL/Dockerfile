FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python
RUN yum clean all && rm -rf /tmp/yum*


EXPOSE 3306