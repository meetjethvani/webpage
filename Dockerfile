FROM nginx
COPY . usr/share/nginx/html
RUN yum update
RUN systemctl restart nginx
