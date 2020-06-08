CREATE DATABASE shop;

CREATE TABLE goods(
  code SERIAL,
  name TEXT,
  price INT,
  comment TEXT
);

INSERT INTO goods(name,price,comment) VALUES('Chinese Ramen',7,'Cheap and delicious');
INSERT INTO goods(name,price,comment) VALUES('Japanese Soba',12,'Tasty');
INSERT INTO goods(name,price,comment) VALUES('Italian Pasta',10,'Now 10% off');
INSERT INTO goods(name,price,comment) VSLUES('Tokyo Udon',9,'Buy one get two');
INSERT INTO goods(name,price,comment) VSLUES('Japan Ramen'11,'Big volume');