# Docker-compose for HRMS Sentrifugo

Sentrifugo is a free and powerful new-age Human Resource Management System that can be easily configured to adapt to your organizational processes.

## Installing Sentrifugo

To install Sentrifugo you need Docker and Docker-compose.

1) Build images

```bash
sudo docker-compose build
```

2) Run containers
```bash
sudo docker-compose up -d
```

3) Create database and user
```bash
sudo docker exec -i database /usr/bin/mysql -u root --password=password < db/dump.txt
```

4) After installation you need to run the following command
```bash
sudo docker exec -i application rm -r /var/www/html/install
```
Hello World