FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

USER root
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python
RUN yum clean all && rm -rf /tmp/yum*

COPY src/fix-permissions.sh ./
RUN ./fix-permissions.sh /var/lib/mysql/   && \
    ./fix-permissions.sh /var/log/mariadb/ && \
    ./fix-permissions.sh /var/run/

COPY src/docker-entrypoint.sh /

ENTRYPOINT ["/docker-entrypoint.sh"]

VOLUME /var/lib/mysql

USER 27

EXPOSE 3306
CMD ["mysqld_safe"]