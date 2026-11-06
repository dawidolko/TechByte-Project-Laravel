BEGIN
  DBMS_AQADM.STOP_QUEUE(queue_name => 'COMPLAINTS_QUEUE');
  DBMS_AQADM.DROP_QUEUE(queue_name => 'COMPLAINTS_QUEUE');
  DBMS_AQADM.DROP_QUEUE_TABLE(queue_table => 'COMPLAINTS_QUEUE_TABLE');
END;
BEGIN
  DBMS_AQADM.STOP_QUEUE(queue_name => 'NEWSLETTER_QUEUE');
  DBMS_AQADM.DROP_QUEUE(queue_name => 'NEWSLETTER_QUEUE');
  DBMS_AQADM.DROP_QUEUE_TABLE(queue_table => 'NEWSLETTER_QUEUE_TABLE');
END;
BEGIN
  DBMS_AQADM.DROP_QUEUE_TABLE(queue_table => 'COMPLAINTS_QUEUE_TABLE', force => TRUE);
  DBMS_AQADM.DROP_QUEUE_TABLE(queue_table => 'NEWSLETTER_QUEUE_TABLE', force => TRUE);
END;

BEGIN
  /*
   * Drop remaining objects (tables, indexes, views, sequences, procedures, functions)
   */
  FOR cur_rec IN (SELECT object_name, object_type FROM user_objects WHERE object_type IN ('TABLE', 'INDEX', 'VIEW', 'SEQUENCE', 'PROCEDURE', 'FUNCTION')) LOOP
    BEGIN
      IF cur_rec.object_type = 'TABLE' THEN
        EXECUTE IMMEDIATE 'DROP ' || cur_rec.object_type || ' "' || cur_rec.object_name || '" CASCADE CONSTRAINTS';
      ELSE
        EXECUTE IMMEDIATE 'DROP ' || cur_rec.object_type || ' "' || cur_rec.object_name || '"';
      END IF;
    EXCEPTION
      WHEN OTHERS THEN
        NULL;
    END;
  END LOOP;
END;
/

BEGIN
  FOR cur_rec IN (SELECT object_name, object_type FROM user_objects WHERE object_type IN ('TABLE', 'INDEX', 'VIEW', 'SEQUENCE')) LOOP
    BEGIN
      IF cur_rec.object_type = 'TABLE' THEN
        EXECUTE IMMEDIATE 'DROP ' || cur_rec.object_type || ' "' || cur_rec.object_name || '" CASCADE CONSTRAINTS';
      ELSE
        EXECUTE IMMEDIATE 'DROP ' || cur_rec.object_type || ' "' || cur_rec.object_name || '"';
      END IF;
    EXCEPTION
      WHEN OTHERS THEN
        NULL;
    END;
  END LOOP;
END;
/