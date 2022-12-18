-- Database week 5 Answers

-- Assignment 1: SQL
-- Use the following ER-diagram to answer the questions.

-- 1. Show all the tutors that are available for help online.

SELECT Name, isOnline
FROM TUTOR
WHERE isOnline = 'Yes'

-- 2. Show a list of clients whose name end with “ van der Meulen”.

SELECT LastName
FROM CLIENT
WHERE LastName LIKE '%van der Meulen'

-- 3. Show all tutors that have used a laptop as a resource during their sessions. Use a subquery.

-- Table??? Column???

-- 4. Write a query that changes the isPaid status of all the invoices after March 22nd of 2022 to TRUE.

UPDATE INVOICE
SET isPaid = TRUE
WHERE Date > '2022-03-22'

-- 5. Show all clients that have not booked a session yet.

-- NOT IT or RIGHT JOIN

-- 6. Write the query that can create the SESSION table.

CREATE TABLE 'SESSION' (
--	'Id' int(11) NOT NULL,
--	'FirstName' varchar(40) NOT NULL,
	CONSTRAINT PK_date PRIMARY KEY(date)
	CONSTRAINT PK_time PRIMARY KEY(time)
	CONSTRAINT FK_invoiceID FOREIGN KEY(invoiceID) REFERENCES INVOICE(invoiceID)
	CONSTRAINT FK_resourceID FOREIGN KEY(resourceID) REFERENCES RESOURCE(resourceID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 7. Show a list of all clients that have a session with a tutor that is online right now. The list should have the names of client and tutor and the phone numbers of client and tutor.

-- ???
