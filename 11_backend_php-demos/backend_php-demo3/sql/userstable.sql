DROP TABLE IF EXISTS users;
CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username TEXT NOT NULL,
    pwd TEXT,
    email TEXT
); 
INSERT INTO users(id, username, pwd, email) VALUES (2, 'Bart', 'bart123', 'bart@gmail.com');
INSERT INTO users(id, username, pwd, email) VALUES (3, 'John', 'hartje', 'john.doe@gmail.com');
INSERT INTO users(id, username, pwd, email) VALUES (7, 'Danny', '123', 'danny@hotmail.com');

