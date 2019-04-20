-- Create a new table called 'cart' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE cart
(
    customer_id INT NOT NULL, 
    product_id INT NOT NULL,

    -- CONSTRAINTS
    PRIMARY KEY (customer_id, product_id),
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);