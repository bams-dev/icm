# Utilise l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copie le code de l'application dans le dossier Apache
COPY / /var/www/html/

# Expose le port 80 pour le service web
EXPOSE 80
