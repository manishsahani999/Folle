-- Create a new table called 'users' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE products
(
    id INT NOT NULL AUTO_INCREMENT,  -- primary key column
    title TEXT NOT NULL,
    details LONGTEXT NOT NULL,
    vendor_id INT NOT NULL,
    category_id INT NOT NULL,
    quantity_available INT NOT NULL DEFAULT 0,
    picture TEXT NOT NULL,
    discount INT DEFAULT 0,
    brought_by INT DEFAULT 0,

    -- CONSTRAINTS
    PRIMARY KEY (id),
    FOREIGN KEY (vendor_id) REFERENCES vendors(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
    
);