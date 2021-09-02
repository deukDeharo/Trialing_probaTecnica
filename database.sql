CREATE DATABASE IF NOT EXISTS trialing;

USE trialing;

CREATE TABLE users (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  email varchar(255) NOT NULL,
  fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
  fecha_modificacion DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE posts(
	id int UNSIGNED NOT NULL AUTO_INCREMENT ,
	user_id int UNSIGNED NOT NULL,
	titulo varchar(30) NOT NULL,
	contenido varchar(255),
	fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
	fecha_modificacion DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
);

ALTER TABLE posts
ADD FOREIGN KEY (user_id) REFERENCES users(id);

