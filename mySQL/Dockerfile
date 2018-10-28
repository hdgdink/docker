FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python
RUN yum clean all && rm -rf /tmp/yum*

ADD src/init.sh /init.sh

EXPOSE 3306

RUN chmod 0755 /init.sh
CMD ["bash", "init.sh"]