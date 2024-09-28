# READ ME
![alt text](image-1.png) 

![alt text](image.png)

![alt text](image-2.png)

![alt text](image-3.png)

![alt text](image-4.png)

![alt text](image-5.png)

![alt text](image-6.png)
### install apache
sudo apt update
sudo apt install apache2
sudo apt install php libapache2-mod-php


## start apache 
sudo systemctl start apache2

## url
http://localhost/asah_otak/index.html

## Table
CREATE DATABASE asah_otak;

USE asah_otak;

CREATE TABLE master_kata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kata VARCHAR(255) NOT NULL,
    clue VARCHAR(255) NOT NULL
);

CREATE TABLE point_game (
    id_point INT AUTO_INCREMENT PRIMARY KEY,
    nama_user VARCHAR(255) NOT NULL,
    total_point INT(20) NOT NULL
);

CREATE TABLE scores (
    id SERIAL PRIMARY KEY,
    user_name VARCHAR(255),
    points INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



