CREATE DATABASE IF NOT EXISTS laptop_shop;
USE laptop_shop;

CREATE TABLE IF NOT EXISTS laptops (
  id INT(11) NOT NULL AUTO_INCREMENT,
  brand VARCHAR(50) NOT NULL,
  model VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  stock INT NOT NULL,
  release_year YEAR,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data
INSERT INTO laptops (brand, model, price, stock, release_year) VALUES
('Dell', 'XPS 13', 1200.00, 10, 2022),
('Apple', 'MacBook Air M2', 1400.00, 5, 2023),
('HP', 'Spectre x360', 1100.00, 7, 2021);
