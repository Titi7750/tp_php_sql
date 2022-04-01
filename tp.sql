CREATE DATABASE tp_sql;

CREATE TABLE garages (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    garage_name VARCHAR(64),
    garage_city VARCHAR(64),
    garage_creation DATETIME,
    garage_turnover INT
)

CREATE TABLE cars (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    car_model VARCHAR(64),
    car_color VARCHAR(64),
    car_price INT,
    car_garage_id INT,
    FOREIGN KEY (car_garage_id) REFERENCES garages(id)
)

INSERT INTO `garages` (garage_name, garage_city, garage_creation, garage_turnover)
VALUES ('garage_L1', 'Briançon', '2001-04-21 19:00:00', 100000),
('garage_2', 'Lyon', '2013-06-02 20:00:00', 200000),
('garage_3', 'Gap', '2019-12-01 21:00:00', 300000),
('garage_4', 'Grenoble', '2002-10-21 16:00:00', 400000),
('garage_5', 'Lyon', '2021-09-30 10:00:00', 500000),
('garage_L6', 'Lyon', '2020-04-22 13:00:00', 600000),
('garage_7', 'Annecy', '2016-02-06 17:00:00', 700000),
('garage_8', 'Paris', '2019-07-17 09:00:00', 800000),
('garage_9', 'Strasbourg', '2011-08-12 07:00:00', 900000),
('garage_L10', 'Lyon', '2012-06-26 12:00:00', 1000000);

INSERT INTO `cars` (car_model, car_color, car_price, car_garage_id)
VALUES ('eugeot', 'red', 10000, 1),
('eugeot', 'blue', 10000, 1),
('eugeot', 'grey', 10000, 1),
('eugeot', 'purple', 10000, 1),
('eugeot', 'yellow', 10000, 1),
('renault', 'blue', 20000, 2),
('renault', 'purple', 20000, 2),
('renault', 'green', 20000, 2),
('renault', 'pink', 20000, 2),
('renault', 'black', 20000, 2),
('citroen', 'yellow', 30000, 3),
('citroen', 'green', 30000, 3),
('citroen', 'blue', 30000, 3),
('citroen', 'grey', 30000, 3),
('citroen', 'brown', 30000, 3),
('fiat', 'green', 40000, 4),
('fiat', 'black', 40000, 4),
('fiat', 'purple', 40000, 4),
('fiat', 'pink', 40000, 4),
('fiat', 'grey', 40000, 4),
('ford', 'black', 50000, 5),
('ford', 'white', 50000, 5),
('ford', 'orange', 50000, 5),
('ford', 'yellow', 50000, 5),
('ford', 'green', 50000, 5),
('mercedes', 'white', 60000, 6),
('mercedes', 'black', 60000, 6),
('mercedes', 'green', 60000, 6),
('mercedes', 'pink', 60000, 6),
('mercedes', 'orange', 60000, 6),
('jeep', 'grey', 70000, 7),
('jeep', 'black', 70000, 7),
('jeep', 'blue', 70000, 7),
('jeep', 'green', 70000, 7),
('jeep', 'yellow', 70000, 7),
('audi', 'purple', 80000, 8),
('audi', 'black', 80000, 8),
('audi', 'pink', 80000, 8),
('audi', 'brown', 80000, 8),
('audi', 'blue', 80000, 8),
('toyota', 'pink', 90000, 9),
('toyota', 'yellow', 90000, 9),
('toyota', 'purple', 90000, 9),
('toyota', 'black', 90000, 9),
('toyota', 'white', 90000, 9),
('honda', 'orange', 220000, 10),
('honda', 'grey', 220000, 10),
('honda', 'green', 220000, 10),
('honda', 'blue', 220000, 10),
('honda', 'black', 220000, 10)


SELECT * FROM cars;

SELECT * FROM garages WHERE garage_name LIKE '%L%';

SELECT * FROM cars ORDER BY car_price DESC;

SELECT garage_name, COUNT(car_model) FROM cars JOIN garages ON cars.car_garage_id = garages.id GROUP BY garage_name;

SELECT garage_name, SUM(car_price) FROM cars JOIN garages ON cars.car_garage_id = garages.id GROUP BY garage_name ORDER BY SUM(car_price) DESC;

DELETE FROM cars WHERE car_model LIKE 'E%';

DELETE FROM garages WHERE garage_city = 'Lyon';

UPDATE cars SET car_color = 'green' WHERE car_price > 200000;

UPDATE cars SET car_price = 35000 WHERE car_garage_id = 2;