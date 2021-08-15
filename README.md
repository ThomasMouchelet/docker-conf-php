### CONFIG
php 8.0.9
nginx
mysql
phpmyadmin
mercure

### GET STARTED

```
docker-compose up -d
```

### KILL CONTAINERS
```
docker-compose down
docker-compose down  --remove-orphans
```
### CLEAN VOLUMES
```
docker volume rm $(docker volume ls -q)
```

