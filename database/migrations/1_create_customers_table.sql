-- Create a new table called 'customers' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE customers
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    first_name VARCHAR(255) NOT NULL,
    last_ame VARCHAR(255),
    phone VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL
);