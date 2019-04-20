-- Create a new table called 'users' in schema '
-- Drop the table if it already exists

-- Create the table in the specified schema
CREATE TABLE categories
(
    id INT NOT NULL AUTO_INCREMENT,  -- primary key column
    title TEXT NOT NULL,
    details LONGTEXT NOT NULL,

    -- CONSTRAINTS
    PRIMARY KEY (id)
);