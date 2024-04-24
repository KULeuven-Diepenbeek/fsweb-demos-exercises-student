DROP TABLE IF EXISTS comments;
CREATE TABLE comments(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username TEXT NOT NULL,
    comment_text TEXT
); 
INSERT INTO comments(username, comment_text) VALUES ('Bart', 'hihi1');
INSERT INTO comments(username, comment_text) VALUES ('Bart', 'hihi2');
INSERT INTO comments(username, comment_text) VALUES ('Bart', 'hihi3');
INSERT INTO comments(username, comment_text) VALUES ('John', 'haha');
INSERT INTO comments(username, comment_text) VALUES ('John', 'haha2');