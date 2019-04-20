-- Create a new table called 'vendors' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE vendors
(
    id INT NOT NULL AUTO_INCREMENT, 
    first_name VARCHAR(255) NOT NULL,
    last_ame VARCHAR(255),
    phone VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    h_no VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL DEFAULT 'INDIA',
    pincode INT NOT NULL,
    website VARCHAR(255) NULL,
    
    -- constraints
    PRIMARY KEY (id)
);