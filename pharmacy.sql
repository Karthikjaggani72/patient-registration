CREATE DATABASE IF NOT EXISTS pharmacy_db;
USE pharmacy_db;

CREATE TABLE pharmacy_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255),
    category VARCHAR(100),
    quantity INT,
    price DECIMAL(10,2),
    expiry_date DATE,
    added_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
