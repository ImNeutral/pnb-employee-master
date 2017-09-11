CREATE TABLE employees (
	id 				INT 		 NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name 		VARCHAR(255) NOT NULL,
    middle_name 	VARCHAR(255) NULL,
    last_name 		VARCHAR(255) NOT NULL,
    sex 			VARCHAR(255) NOT NULL,
    civil_status 	VARCHAR(255) NOT NULL,
    birthdate 		DATE 		 NOT NULL,
    contact_number	VARCHAR(255) NULL,
    address 		TEXT 		 NULL,
    pisition		VARCHAR(255) NULL,
    active 			BOOLEAN 	 NOT NULL DEFAULT true
);


CREATE TABLE accounts (
	id 				INT 		 NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    employee_id		INT			 NOT NULL,
    username		VARCHAR(255) NOT NULL,
    password		TEXT		 NOT NULL,
    active			BOOLEAN		 NOT NULL DEFAULT true,
    
    CONSTRAINT accounts_employee_id_fk 
    	FOREIGN KEY (employee_id) REFERENCES employees (id) ON DELETE CASCADE
);

CREATE TABLE access_type (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    account_id INT NOT NULL,
    access_type VARCHAR(255),
    
    CONSTRAINT access_type_account_id_fk 
    	FOREIGN KEY (account_id) REFERENCES accounts (id) ON DELETE CASCADE
);

INSERT INTO ACCESS_TYPES VALUES(1, 100, 'WAITER'); 
INSERT INTO employees VALUES(1, 'Christian','Lucenss','Garillo', 'M', 'Single', '1996-12-04', '09467983198', 'Bayugan City, Taglatawan', 'WAITER', true);
INSERT INTO ACCOUNTS VALUES(100,1, 'testing', '', true);
