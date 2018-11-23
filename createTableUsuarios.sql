+----------+-----------------------------------------------------------------------------------+
| Table    | Create Table                                                                                                                                                       |
+----------+-----------------------------------------------------------------------------------+
| Usuarios | CREATE TABLE `Usuarios` (
  `username` varchar(10) NOT NULL,
  `password` varchar(512) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 |
+----------+-----------------------------------------------------------------------------------+



+----------+-----------------------------------------------------------------------------------+
CREATE TABLE usuarios (
username VARCHAR(10) PRIMARY KEY,
password VARCHAR(512) NOT NULL);

INSERT INTO usuarios (username, password)
VALUES ('bob', SHA2('bobby', 512));
VALUES ('alice', SHA2('alicet', 512));
VALUES ('trudy', SHA2('alisia', 512));