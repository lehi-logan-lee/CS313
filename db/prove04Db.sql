CREATE TABLE public.user
( user_id            SERIAL       CONSTRAINT pk_user_1 PRIMARY KEY    
, user_name          VARCHAR(30) CONSTRAINT nn_user_1 NOT NULL UNIQUE
, user_password      VARCHAR(30) CONSTRAINT nn_user_2 NOT NULL
, user_user_name     VARCHAR(30) CONSTRAINT nn_user_3 NOT NULL);

CREATE TABLE occasion
( occasion_id        SERIAL       CONSTRAINT pk_occasion_1 PRIMARY KEY    
, occasion_type      VARCHAR(30) CONSTRAINT nn_occasion_1 NOT NULL);

CREATE TABLE item_size
( size_id        SERIAL       CONSTRAINT pk_size_1 PRIMARY KEY    
, size_type      VARCHAR(30) CONSTRAINT nn_size_1 NOT NULL);


CREATE TABLE vase
( vase_id            SERIAL             CONSTRAINT pk_vase_1 PRIMARY KEY    
, vase_size          INT                CONSTRAINT nn_vase_1 NOT NULL 
, vase_price         DOUBLE PRECISION   CONSTRAINT nn_vase_2 NOT NULL 
, vase_type          INT                CONSTRAINT nn_vase_3 NOT NULL 
, CONSTRAINT fk_vase_1  FOREIGN KEY(vase_size) REFERENCES item_size(size_id)        
, CONSTRAINT fk_vase_2  FOREIGN KEY(vase_type) REFERENCES occasion(occasion_id));

CREATE TABLE flower
( flower_id            SERIAL             CONSTRAINT pk_flower_1 PRIMARY KEY        
, flower_type          INT                CONSTRAINT nn_flower_1 NOT NULL 
, flower_size          INT                CONSTRAINT nn_flower_2 NOT NULL
, flower_price         DOUBLE PRECISION   CONSTRAINT nn_flower_3 NOT NULL 
, base_type            INT                CONSTRAINT nn_flower_4 NOT NULL
, CONSTRAINT fk_flower_1  FOREIGN KEY(flower_type) REFERENCES occasion(occasion_id)
, CONSTRAINT fk_flower_2  FOREIGN KEY(flower_size) REFERENCES item_size(size_id)
, CONSTRAINT fk_flower_3  FOREIGN KEY(base_type) REFERENCES vase(vase_id));

CREATE TABLE cart
( cart_id            SERIAL             CONSTRAINT pk_cart_1 PRIMARY KEY        
, user_id            INT                CONSTRAINT nn_cart_1 NOT NULL blu
, flower_id          INT                CONSTRAINT nn_cart_2 NOT NULL
, CONSTRAINT fk_cart_1  FOREIGN KEY(user_id) REFERENCES public.user(user_id)
, CONSTRAINT fk_cart_2  FOREIGN KEY(flower_id) REFERENCES flower(flower_id));


INSERT INTO flower (flower_type, flower_size, flower_price, base_type, description, image)
VALUES
(1, 1, 2.00, 1, 'Small Blue', 'BlueF.jpg'),
(2, 2, 3.00, 2, 'Medium Red', 'RedF.jpg'),
(3, 3, 4.00 , 3, 'Large Yellow', 'YellowF.jpg'),
(1, 2, 5.00 , 2, 'Large Purple', 'PurpleF.jpg');

INSERT INTO vase (vase_size, vase_price, vase_type)
VALUES
(1, 2.00, 1),
(2, 3.00, 2),
(3, 4.00, 3),


INSERT INTO item_size (size_type)
VALUES
('SM'),
('MED'),
('LG');

INSERT INTO public.user (user_name, user_password, user_user_name) 
VALUES
	('Me', 'pass', 'Metoo'),
	('You', 'password', 'Youtoo');
	

INSERT INTO occasion (occasion_type)
VALUES
	('Mother Day'),
	('Anniversary'),
	('Birthday');


INSERT INTO public.user (user_name, user_password, user_user_name)
VALUES
('John', 'hello', 'coolguy'),
('Jane', 'happy' , 'coolchick');