Create Database User;

CREATE TABLE users
(
  id INTEGER NOT NULL AUTO_INCREMENT,
  email varchar(100) NOT NULL,
  name varchar(100) NOT NULL,  
  password varchar(100) NOT NULL,
  remember_token varchar(200) NOT NULL,
  updated_at date, 
  created_at date,
  PRIMARY KEY (id)
  
);