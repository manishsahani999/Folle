CREATE TABLE orders
(
    id INT NOT NULL AUTO_INCREMENT,
    customer_id INT NOT NULL,
    num INT,
    payment_id INT NOT NULL,
    status ENUM('pending', 'placed', 'delivered', 'completed') DEFAULT 'pending',
    total INT NOT NULL

    -- CONSTRAINTS
    PRIMARY KEY (id),
    -- FOREIGN KEY (customer_id) REFERENCES customers(id),
    -- FOREIGN KEY (product_id) REFERENCES products(id)
);