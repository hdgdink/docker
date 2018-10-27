#!/bin/bash

echo "GRANT ALL ON *.* TO admin@'%' IDENTIFIED BY 'changeme' WITH GRANT OPTION; FLUSH PRIVILEGES" | mysql
