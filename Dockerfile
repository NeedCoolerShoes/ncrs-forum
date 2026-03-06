FROM registry.nucc.tr/docker-phpbb:latest

ADD ./Caddyfile /etc/caddy/Caddyfile
ADD ./extensions/ /phpbb/www/ext
ADD ./themes/elegance/ /phpbb/www/styles/elegance
ADD ./smilies/ /phpbb/www/images/smilies