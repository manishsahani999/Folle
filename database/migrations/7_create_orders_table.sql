-- Create a new table called 'cart' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE orders
(
    -- Order details
    id INT NOT NULL AUTO_INCREMENT,
    customer_id INT NOT NULL,
    num INT,
    payment_id INT NOT NULL,
    status ENUM('pending', 'placed', 'delivered', 'completed') DEFAULT 'pending',
    total INT NOT NULL,
    no_items INT NOT NULL,
    -- Dilvery details 
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NULL,
    phone VARCHAR(10) NOT NULL,
    -- Shipping address
    h_no VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL DEFAULT 'INDIA',
    pincode INT NOT NULL,
    landmark TEXT NULL,

    -- CONSTRAINTS
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (payment_id) REFERENCES payments(id)
);