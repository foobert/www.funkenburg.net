FROM nginx
RUN apt-get update && apt-get install -y php5-fpm php5-mysqlnd
RUN usermod -a -G www-data nginx
COPY conf/default.conf /etc/nginx/conf.d/
COPY conf/fastcgi_params /etc/nginx/fastcgi_params
COPY startup.sh /
COPY www /usr/share/nginx/html/
EXPOSE 80
CMD ["/startup.sh"]
