#!/bin/bash

cd ../
docker-compose up -d
docker exec -it nginx rm -f /var/www/public/storage
docker exec -it nginx ln -s /var/www/storage/app/public /var/www/public/storage
open http://projetolaravel.local/
