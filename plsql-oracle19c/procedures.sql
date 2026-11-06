CREATE SEQUENCE product_seq START WITH 106;

ALTER SEQUENCE product_seq RESTART START WITH 106;

CREATE OR REPLACE PROCEDURE add_product (
    p_name IN VARCHAR2,
    p_price IN NUMBER,
    p_quantities_available IN NUMBER,
    p_sale_id IN NUMBER,
    p_old_price IN NUMBER,
    p_description IN CLOB,
    p_category_id IN NUMBER
) IS
    v_new_id NUMBER;
    v_id_count NUMBER;
BEGIN
    LOOP
        SELECT product_seq.NEXTVAL INTO v_new_id FROM dual;

        /*
         * Check whether the ID already exists
         */
        SELECT COUNT(*) INTO v_id_count FROM products WHERE ID = v_new_id;

        EXIT WHEN v_id_count = 0;

        /*
         * Otherwise the sequence advances and the loop continues
         */
    END LOOP;

    INSERT INTO products (
        ID, NAME, PRICE, QUANTITIES_AVAILABLE, SALE_ID, OLD_PRICE, DESCRIPTION
    ) VALUES (
        v_new_id, p_name, p_price, p_quantities_available, p_sale_id, p_old_price, p_description
    );

    IF p_category_id IS NOT NULL THEN
        INSERT INTO products_categories (products_id, category_id)
        VALUES (v_new_id, p_category_id);
    END IF;
END;
/


CREATE OR REPLACE PROCEDURE delete_product_by_id (p_product_id IN NUMBER) IS
BEGIN
    DELETE FROM products_categories WHERE PRODUCTS_ID = p_product_id;
    DELETE FROM specifications WHERE PRODUCTS_ID = p_product_id;
    DELETE FROM photos_products WHERE PRODUCTS_ID = p_product_id;
    DELETE FROM products WHERE id = p_product_id;
    
    COMMIT;
END;
/


CREATE OR REPLACE PROCEDURE update_product_by_id (
    p_product_id IN NUMBER,
    p_name IN VARCHAR2,
    p_price IN NUMBER,
    p_quantities_available IN NUMBER,
    p_sale_id IN NUMBER,
    p_old_price IN NUMBER,
    p_description IN CLOB
) IS
BEGIN
    UPDATE products
    SET
        NAME = p_name,
        PRICE = p_price,
        QUANTITIES_AVAILABLE = p_quantities_available,
        SALE_ID = p_sale_id,
        OLD_PRICE = p_old_price,
        DESCRIPTION = p_description
    WHERE id = p_product_id;
    
    COMMIT;
END;
/


CREATE OR REPLACE PROCEDURE search_products_by_name (
    p_name IN VARCHAR2,
    p_cursor OUT SYS_REFCURSOR
) IS
BEGIN
    OPEN p_cursor FOR
    SELECT 
        p.id AS "ID",
        p.name AS "NAME",
        p.price AS "PRICE",
        p.quantities_available AS "QUANTITIES_AVAILABLE",
        p.sale_id AS "SALE_ID",
        p.old_price AS "OLD_PRICE",
        p.description AS "DESCRIPTION",
        c.description AS "CATEGORY_DESCRIPTION"
    FROM products p
    LEFT JOIN products_categories pc ON p.id = pc.products_id
    LEFT JOIN categories c ON pc.category_id = c.id
    WHERE LOWER(p.name) LIKE '%' || LOWER(p_name) || '%';
END;
/


CREATE OR REPLACE PROCEDURE search_customers_by_email (
    p_email IN VARCHAR2,
    p_cursor OUT SYS_REFCURSOR
) IS
BEGIN
    OPEN p_cursor FOR
    SELECT 
        id AS "ID",
        name AS "NAME",
        last_name AS "LAST_NAME",
        delivery_address AS "DELIVERY_ADDRESS",
        phone_number AS "PHONE_NUMBER",
        email AS "EMAIL"
    FROM customers
    WHERE LOWER(email) LIKE '%' || LOWER(p_email) || '%';
END;
/


CREATE OR REPLACE PROCEDURE delete_customer_by_id (
    p_customer_id IN NUMBER
) IS
BEGIN
    DELETE FROM opinions WHERE customers_id = p_customer_id;
    DELETE FROM newsletter WHERE CUSTOMERS_ID = p_customer_id;

    FOR order_rec IN (SELECT id FROM orders WHERE customers_id = p_customer_id) LOOP
        DELETE FROM complaints WHERE orders_id = order_rec.id;
        DELETE FROM order_product WHERE order_id = order_rec.id;
    END LOOP;

    DELETE FROM orders WHERE customers_id = p_customer_id;
    DELETE FROM customers WHERE id = p_customer_id;

    COMMIT;
END;
/



CREATE OR REPLACE PROCEDURE update_customer_by_id (
    p_customer_id IN NUMBER,
    p_name IN VARCHAR2,
    p_last_name IN VARCHAR2,
    p_delivery_address IN VARCHAR2,
    p_phone_number IN VARCHAR2,
    p_email IN VARCHAR2
) IS
BEGIN
    UPDATE customers
    SET
        NAME = p_name,
        LAST_NAME = p_last_name,
        DELIVERY_ADDRESS = p_delivery_address,
        PHONE_NUMBER = p_phone_number,
        EMAIL = p_email
    WHERE id = p_customer_id;

    COMMIT;
END;
/


CREATE OR REPLACE PROCEDURE register_customer (
    p_name IN VARCHAR2,
    p_last_name IN VARCHAR2,
    p_delivery_address IN VARCHAR2,
    p_phone_number IN VARCHAR2,
    p_email IN VARCHAR2,
    p_password IN VARCHAR2
) IS
BEGIN
    INSERT INTO customers (NAME, LAST_NAME, DELIVERY_ADDRESS, PHONE_NUMBER, EMAIL, PASSWORD)
    VALUES (p_name, p_last_name, p_delivery_address, p_phone_number, p_email, p_password);
    
    COMMIT;
END;
/
CREATE OR REPLACE PROCEDURE sp_get_promotional_products(p_products OUT SYS_REFCURSOR) AS
BEGIN
    OPEN p_products FOR
    SELECT * FROM products WHERE sale_id IS NOT NULL;
END;
/
CREATE OR REPLACE FUNCTION get_product_opinions(product_id IN NUMBER)
RETURN SYS_REFCURSOR IS
    opinions_cursor SYS_REFCURSOR;
BEGIN
    OPEN opinions_cursor FOR
        SELECT o.CONTENT_OPINION, o.RATING, c.NAME
        FROM OPINIONS o
        JOIN CUSTOMERS c ON o.CUSTOMERS_ID = c.ID
        WHERE o.PRODUCTS_ID = product_id;
    RETURN opinions_cursor;
END;
/
BEGIN
    DBMS_AQADM.CREATE_QUEUE_TABLE(
        queue_table => 'newsletter_queue_table',
        queue_payload_type => 'SYS.AQ$_JMS_TEXT_MESSAGE'
    );

    DBMS_AQADM.CREATE_QUEUE(
        queue_name => 'newsletter_queue',
        queue_table => 'newsletter_queue_table'
    );

    DBMS_AQADM.START_QUEUE(
        queue_name => 'newsletter_queue'
    );
END;
/
CREATE OR REPLACE FUNCTION fn_get_top_rated_products
RETURN SYS_REFCURSOR
IS
    top_rated_products_cursor SYS_REFCURSOR;
BEGIN
    OPEN top_rated_products_cursor FOR
        SELECT p.id, p.name, p.price, AVG(o.rating) AS average_rating
        FROM products p
        JOIN opinions o ON p.id = o.products_id
        GROUP BY p.id, p.name, p.price
        HAVING AVG(o.rating) >= 4
        ORDER BY average_rating DESC;
    RETURN top_rated_products_cursor;
END;
/
CREATE OR REPLACE VIEW vw_order_details AS
SELECT 
    o.id AS order_id,
    c.name AS customer_name,
    c.last_name AS customer_last_name,
    e.name AS employee_name,
    e.last_name AS employee_last_name,
    o.date_order,
    o.status AS order_status,
    p.id AS product_id,
    p.name AS product_name,
    op.quantity AS product_quantity,
    s.delivery_company,
    s.track_id,
    s.delivery_status,
    s.delivery_time,
    cp.cause AS complaint_cause,
    cp.status AS complaint_status,
    cp.submission_date AS complaint_submission_date
FROM 
    orders o
JOIN 
    customers c ON o.customers_id = c.id
JOIN 
    employees e ON o.employees_id = e.id
JOIN 
    order_product op ON o.id = op.order_id
JOIN 
    products p ON op.product_id = p.id
LEFT JOIN 
    shipments s ON o.id = s.orders_id
LEFT JOIN 
    complaints cp ON o.id = cp.orders_id;
/
CREATE OR REPLACE VIEW vw_product_details AS
SELECT 
    p.id AS product_id,
    p.name AS product_name,
    p.price,
    p.old_price,
    p.description,
    o.content_opinion,
    o.rating,
    c.category_name,
    c.description AS category_description
FROM 
    products p
LEFT JOIN 
    opinions o ON p.id = o.products_id
LEFT JOIN 
    products_categories pc ON p.id = pc.products_id
LEFT JOIN 
    categories c ON pc.category_id = c.id;
/
CREATE OR REPLACE FUNCTION fn_avg_rating(product_id NUMBER) RETURN NUMBER IS
    avg_rating NUMBER;
BEGIN
    SELECT AVG(rating) INTO avg_rating
    FROM opinions
    WHERE products_id = product_id;

    RETURN avg_rating;
END;
/
CREATE OR REPLACE OPERATOR op_avg_rating
BINDING (NUMBER) RETURN NUMBER
USING fn_avg_rating;
/
SELECT id, name, op_avg_rating(id) AS average_rating
FROM products;
CREATE OR REPLACE FUNCTION fn_is_available(product_id NUMBER) RETURN VARCHAR2 IS
    quantities_available NUMBER;
BEGIN
    SELECT quantities_available INTO quantities_available
    FROM products
    WHERE id = product_id;

    IF quantities_available > 0 THEN
        RETURN 'Available';
    ELSE
        RETURN 'Out of Stock';
    END IF;
END;
/
CREATE OR REPLACE OPERATOR op_is_available
BINDING (NUMBER) RETURN VARCHAR2
USING fn_is_available;
/
SELECT id, name, op_is_available(id) AS availability
FROM products;
BEGIN
    -- Create a queue table
    DBMS_AQADM.CREATE_QUEUE_TABLE(
        queue_table => 'complaints_queue_table',
        queue_payload_type => 'SYS.AQ$_JMS_TEXT_MESSAGE'
    );

    -- Create a queue
    DBMS_AQADM.CREATE_QUEUE(
        queue_name => 'complaints_queue',
        queue_table => 'complaints_queue_table'
    );

    -- Start the queue
    DBMS_AQADM.START_QUEUE(
        queue_name => 'complaints_queue'
    );
END;
/
CREATE OR REPLACE PACKAGE pkg_complaints AS
    PROCEDURE add_complaint(
        p_order_id IN NUMBER,
        p_cause IN VARCHAR2,
        p_status IN VARCHAR2,
        p_submission_date IN DATE
    );
    
    PROCEDURE update_complaint_status(
        p_complaint_id IN NUMBER,
        p_status IN VARCHAR2
    );
    
    FUNCTION get_complaint_details(
        p_complaint_id IN NUMBER
    ) RETURN SYS_REFCURSOR;
END pkg_complaints;
/
CREATE OR REPLACE PACKAGE BODY pkg_complaints AS
    PROCEDURE add_complaint(
        p_order_id IN NUMBER,
        p_cause IN VARCHAR2,
        p_status IN VARCHAR2,
        p_submission_date IN DATE
    ) IS
    BEGIN
        INSERT INTO complaints (ORDERS_ID, CAUSE, STATUS, SUBMISSION_DATE)
        VALUES (p_order_id, p_cause, p_status, p_submission_date);
        COMMIT;
    END add_complaint;

    PROCEDURE update_complaint_status(
        p_complaint_id IN NUMBER,
        p_status IN VARCHAR2
    ) IS
    BEGIN
        UPDATE complaints
        SET STATUS = p_status
        WHERE ID = p_complaint_id;
        COMMIT;
    END update_complaint_status;

    FUNCTION get_complaint_details(
        p_complaint_id IN NUMBER
    ) RETURN SYS_REFCURSOR IS
        complaint_details SYS_REFCURSOR;
    BEGIN
        OPEN complaint_details FOR
        SELECT * FROM complaints
        WHERE ID = p_complaint_id;
        RETURN complaint_details;
    END get_complaint_details;
END pkg_complaints;
/
CREATE OR REPLACE PACKAGE pkg_products AS
    PROCEDURE add_product(
        p_name IN VARCHAR2,
        p_price IN NUMBER,
        p_quantities_available IN NUMBER,
        p_sale_id IN NUMBER,
        p_old_price IN NUMBER,
        p_description IN VARCHAR2
    );

    PROCEDURE update_product_price(
        p_product_id IN NUMBER,
        p_price IN NUMBER
    );
    
    FUNCTION get_product_details(
        p_product_id IN NUMBER
    ) RETURN SYS_REFCURSOR;
    
    FUNCTION get_top_rated_products RETURN SYS_REFCURSOR;
END pkg_products;
/
CREATE OR REPLACE PACKAGE BODY pkg_products AS
    PROCEDURE add_product(
        p_name IN VARCHAR2,
        p_price IN NUMBER,
        p_quantities_available IN NUMBER,
        p_sale_id IN NUMBER,
        p_old_price IN NUMBER,
        p_description IN VARCHAR2
    ) IS
    BEGIN
        INSERT INTO products (NAME, PRICE, QUANTITIES_AVAILABLE, SALE_ID, OLD_PRICE, DESCRIPTION)
        VALUES (p_name, p_price, p_quantities_available, p_sale_id, p_old_price, p_description);
        COMMIT;
    END add_product;

    PROCEDURE update_product_price(
        p_product_id IN NUMBER,
        p_price IN NUMBER
    ) IS
    BEGIN
        UPDATE products
        SET PRICE = p_price
        WHERE ID = p_product_id;
        COMMIT;
    END update_product_price;

    FUNCTION get_product_details(
        p_product_id IN NUMBER
    ) RETURN SYS_REFCURSOR IS
        product_details SYS_REFCURSOR;
    BEGIN
        OPEN product_details FOR
        SELECT * FROM products
        WHERE ID = p_product_id;
        RETURN product_details;
    END get_product_details;
    
    FUNCTION get_top_rated_products RETURN SYS_REFCURSOR IS
        top_rated_products SYS_REFCURSOR;
    BEGIN
        OPEN top_rated_products FOR
        SELECT p.id, p.name, p.price, AVG(o.rating) AS average_rating
        FROM products p
        JOIN opinions o ON p.id = o.products_id
        GROUP BY p.id, p.name, p.price
        HAVING AVG(o.rating) >= 4
        ORDER BY average_rating DESC;
        RETURN top_rated_products;
    END get_top_rated_products;
END pkg_products;
/