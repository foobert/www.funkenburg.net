#!/bin/bash
# Startup script for docker. Starts php and nginx
/etc/init.d/php5-fpm start
nginx -g "daemon off;"
