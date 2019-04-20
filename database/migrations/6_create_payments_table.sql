-- Create a new table called 'payments' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE payments
(
    id INT NOT NULL AUTO_INCREMENT,
    amount INT NOT NULL,
    customer_id INT NOT NULL,

    -- CONSTRAINTS
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);