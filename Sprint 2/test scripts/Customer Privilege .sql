CREATE ROLE 'clientrole', 'superuser';

GRANT UPDATE ON superglobals39.customers TO 'clientrole';
GRANT UPDATE ON superglobals39.appointments TO 'clientrole';

GRANT SELECT, INSERT, UPDATE, DELETE,CREATE ON superglobals39.* TO 'superuser';


