CREATE DATABASE shop;

CREATE TABLE public.user
( user_id            SERIAL       CONSTRAINT puser_1 PRIMARY KEY    
, user_name          VARCHAR(30) CONSTRAINT user_1 NOT NULL UNIQUE
, user_password      VARCHAR(30) CONSTRAINT user_2 NOT NULL
, user_net_name     VARCHAR(30) CONSTRAINT user_3 NOT NULL);

CREATE TABLE Discount
( discount_id        SERIAL       CONSTRAINT pdiscount_1 PRIMARY KEY    
, discount_day      VARCHAR(30) CONSTRAINT discount_1 NOT NULL);

CREATE TABLE item_size
( size_id        SERIAL       CONSTRAINT psize_1 PRIMARY KEY    
, size_type      VARCHAR(30) CONSTRAINT size_1 NOT NULL);


CREATE TABLE cloth
( cloth_id            SERIAL             CONSTRAINT pcloth_1 PRIMARY KEY    
, cloth_size          INT                CONSTRAINT cloth_1 NOT NULL 
, cloth_price         DOUBLE PRECISION   CONSTRAINT cloth_2 NOT NULL 
, cloth_type          INT                CONSTRAINT cloth_3 NOT NULL 
, CONSTRAINT fcloth_1  FOREIGN KEY(cloth_size) REFERENCES item_size(size_id)        
, CONSTRAINT fcloth_2  FOREIGN KEY(cloth_type) REFERENCES discount(discount_id));

CREATE TABLE model
( model_id            SERIAL             CONSTRAINT pmodel_1 PRIMARY KEY        
, model_type          INT                CONSTRAINT model_1 NOT NULL 
, model_size          INT                CONSTRAINT model_2 NOT NULL
, model_price         DOUBLE PRECISION   CONSTRAINT model_3 NOT NULL 
, base_type            INT                CONSTRAINT model_4 NOT NULL
, CONSTRAINT fmodel_1  FOREIGN KEY(model_type) REFERENCES discount(discount_id)
, CONSTRAINT fmodel_2  FOREIGN KEY(model_size) REFERENCES item_size(size_id)
, CONSTRAINT fmodel_3  FOREIGN KEY(base_type) REFERENCES cloth(cloth_id));

CREATE TABLE cart
( cart_id            SERIAL             CONSTRAINT pcart_1 PRIMARY KEY        
, user_id            INT                CONSTRAINT cart_1 NOT NULL blu
, model_id          INT                CONSTRAINT cart_2 NOT NULL
, CONSTRAINT fcart_1  FOREIGN KEY(user_id) REFERENCES public.user(user_id)
, CONSTRAINT fcart_2  FOREIGN KEY(model_id) REFERENCES model(model_id));


INSERT INTO model (model_type, model_size, model_price, base_type, description, image)
VALUES
(1, 1, 100.00, 1, 'Small', 'S.jpg'),
(2, 2, 200.00, 2, 'Medium', 'M.jpg'),
(3, 3, 300.00 , 3, 'Large', 'L.jpg'),
(1, 3, 400.00 , 2, 'Urtra Large', 'UL.jpg');

INSERT INTO cloth (cloth_size, cloth_price, cloth_type)
VALUES
(1, 20.00, 1),
(2, 30.00, 2),
(3, 40.00, 3),


INSERT INTO item_size (size_type)
VALUES
('S'),
('M'),
('L');

INSERT INTO public.user (user_name, user_password, user_user_name) 
VALUES
	('Li', 'StrongPass', 'Lehi'),
	('Katie', 'Herpass', 'Kate');
	

INSERT INTO discount (discount_day)
VALUES
	('Chrismas'),
	('Anniversary'),
	('Birthday');


INSERT INTO public.user (user_name, user_password, user_net_name)
VALUES
('Jack', 'Hi', 'Jackson'),
('Lily', 'Hey' , 'Lucy');