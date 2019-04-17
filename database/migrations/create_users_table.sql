-- Create a new database called 'test'
-- Connect to the 'master' database to run this snippet
USE times
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'test'
)
CREATE DATABASE test
GO