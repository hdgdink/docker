FROM amazonlinux:latest
MAINTAINER Andrey_Vassilyev <hdgdink@list.ru>

USER root
RUN yum update -y
RUN yum install -y  mariadb-server MySQL-python
RUN yum clean all && rm -rf /tmp/yum*

COPY src/fix-permissions.sh ./
RUN chmod 0755 /fix-permissions.sh
RUN ./fix-permissions.sh /var/lib/mysql/   && \
    ./fix-permissions.sh /var/log/mariadb/ && \
    ./fix-permissions.sh /var/run/


COPY src/docker-entrypoint.sh /
RUN chmod 0755 /docker-entrypoint.sh
ENTRYPOINT ["/docker-entrypoint.sh"]

VOLUME /var/lib/mysql

USER 27

ENV MYSQL_HOSTNAME: "mariaDB"
ENV MYSQL_USER: "root"
ENV MYSQL_PASSWORD: "rootroot"
ENV MYSQL_DATABASE: "my_database"
ENV MYSQL_ROOT_PASSWORD: "rootroot"
ENV MYSQL_ALLOW_EMPTY_PASSWORD: "yes"
ENV MYSQL_CHARSET: "cp1251"
ENV MYSQL_COLLATION: "cp1251_bin"


EXPOSE 3306
CMD ["mysqld_safe"]