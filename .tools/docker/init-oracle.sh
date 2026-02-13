#!/bin/bash
set -e

echo "Initializing Oracle database for TechByte..."

# Wait for Oracle to be available
sleep 10

# Create user if not exists and grant privileges
sqlplus sys/admin@localhost/XEPDB1 as sysdba <<EOF
    -- Create user if not exists
    BEGIN
       EXECUTE IMMEDIATE 'CREATE USER sklep IDENTIFIED BY admin';
    EXCEPTION
       WHEN OTHERS THEN
          IF SQLCODE != -1920 THEN
             RAISE;
          END IF;
    END;
    /

    -- Grant privileges
    GRANT CONNECT, RESOURCE, DBA TO sklep;
    GRANT UNLIMITED TABLESPACE TO sklep;
    
    -- Enable session
    ALTER USER sklep QUOTA UNLIMITED ON USERS;
    
    EXIT;
EOF

echo "Oracle initialization complete!"
