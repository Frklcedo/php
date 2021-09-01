USE dbphp7;

CREATE TABLE tb_users (
iduser INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
despassword VARCHAR(256) NOT NULL,
dtreg TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_users (deslogin,despassword) VALUES('root','123456');

SELECT * FROM tb_users;

UPDATE tb_users SET despassword = 'r12345t' WHERE iduser = 1;

DELETE FROM tb_users WHERE iduser = 1;

TRUNCATE TABLE tb_users;