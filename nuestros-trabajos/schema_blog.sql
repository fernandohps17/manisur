DROP DATABASE IF EXISTS servynet_manisur;

CREATE DATABASE IF NOT EXISTS servynet_manisur;

USE servynet_manisur;

CREATE TABLE users(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR(255),
	password VARCHAR(255),
	email VARCHAR(255),
	slug VARCHAR(255)
);

CREATE TABLE posts(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255),
	description VARCHAR(255),
	content TEXT,
	fecha VARCHAR(255),
	img_portada VARCHAR(255),
	img_portada_web VARCHAR(255),
	img_mobile VARCHAR(255),
	img_mobile_web VARCHAR(255),
	uri VARCHAR(255),
	meta_title VARCHAR(255),
	published VARCHAR(255),
	seo VARCHAR(255)
);

CREATE TABLE comentarys(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	email VARCHAR(255),
	web VARCHAR(255),
	comentary VARCHAR(255),
	public VARCHAR(255) default 'false',
	id_post INTEGER,
	FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE
);

INSERT INTO
	users(user, password, email, slug)
VALUES
	(
		'admin',
		'admin',
		'fernandohps17@gmail.com',
		'admin'
	);

ALTER TABLE
	posts
ADD
	sitemap VARCHAR(255) default 'true';


	-- DATOS PARA LA BASE DE DATOS EN EL DOMINIO SERVYNET
	-- usuario: manisur 
	-- clave: Khgd62?10