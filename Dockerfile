FROM php:8.2-apache

# Enable Apache Rewrite Module
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy project files
COPY . .

# Use PORT env (Render supplies this). Provide fallback 80.
ENV PORT=80

# Try to update Apache config to listen on $PORT (non-destructive)
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf || true \
 && sed -i "s/<VirtualHost \\*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf || true

EXPOSE 80

CMD ["apache2-foreground"]
