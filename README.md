# CONFIG
- php 8.0.9
- nginx
- mysql
- phpmyadmin
- mercure

# GET STARTED

```
docker-compose up -d
```

### Show logs

click to button

# With Postman

### Methode : POST
### Auth : Bearer Token 
> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsiKiJdfX0.igEPFS-VblsI_at_-WbC7s1nQETOZspaNuwVl3gCQ5M

### Body : x-www-form-urlencoded
| topic | http://example.com/books/1 |
|-------|----------------------------|
| data  | test                       |

# KILL CONTAINERS
```
docker-compose down
docker-compose down  --remove-orphans
```
# CLEAN VOLUMES
```
docker volume rm $(docker volume ls -q)
```

