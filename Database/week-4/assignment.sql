--  Database week 4 Assignments

--  1.1 Assignment 1 (easy) Model Cars

--  Download WC_Week4_1_ModelCars.sql
--  Import it into PhpMyAdmin.
--  Database Schema:
--  It concerns the database of a factory that makes scale models of, among other things, cars,
--  motorcycles and trains. Tables for customers, products, orders and linking tables are available.


--  1. Show the EmployeeNumber, full name and email of all the ‘Sales Representatives’ (Sales Rep).

SELECT employeeNumber, CONCAT(firstName, ' ', lastName) AS fullName, email
FROM employees
WHERE jobTitle = 'Sales Rep'

--  2. Show all orders that have been cancelled (status cancelled).

SELECT orderNumber, status
FROM orders
WHERE status = "Cancelled"

--  3. Show all the data from all the Canadian customers.

SELECT *
FROM customers
WHERE country = Canada

--  4. Show the productname and productline of all products that are either classic cars or vintage cars.

SELECT productName, productLine
FROM products
WHERE productLine = 'Classic Cars' OR productLine = 'Vintage Cars'

--  5. Write a query that joins the customer and employees table. You may Select all data for this query.

SELECT *
FROM customers JOIN employees

--  6. Show the contacts of all the customers that have no credit limit.

SELECT customerName, CONCAT(contactFirstName, ' ', contactLastName)
FROM customers
WHERE creditLimit = 0

--  7. Show the officecode, city and country of all offices that have a ‘02’ in their postalcode.

SELECT officeCode, city, country
FROM offices
WHERE postalCode LIKE '%02%'

--  8. Show a list of all Ford model classic cars. Show the productname and the productline.

SELECT productName, productLine
FROM products
WHERE productName LIKE '%Ford%' AND productLine = 'Classic Cars'


--  1.2 Assignment 2 (Medium) Model Cars

--  1. Show all payments made during the year 2004.

SELECT *
FROM payments
WHERE paymentDate LIKE '2004%'

--  2. Show all customer names and customernumbers that have a 2nd adressline.

SELECT customerName, customerNumber
FROM customers
WHERE NOT addressLine2='null'


--  1.3 Assignment 3 (Hard) Model Cars

--  1. Write an update query that assigns the EmployeeNumber of Julie Firrelli to all customers from the Netherlands.

SELECT employeeNumber
FROM employees
WHERE firstName = 'Julie' AND lastName = 'Firrelli'

-- Is this ok???

UPDATE customers
SET salesRepEmployeeNumber = 1188
WHERE country = Netherlands


--  1.4 Assignment 4 Marcia’s Dry Cleaning

--  Download WC_Week4_2_Marcia'sDrycleaning_CreateTables.sql en
--  WC_Week4_2_Marcia'sDrycleaning_Insert.sql
--  Import it into PhpMyAdmin

--  A. Show all data in each of the tables.

SELECT *
FROM CUSTOMER

SELECT *
FROM INVOICE

SELECT *
FROM INVOICE_ITEM

--  B. List the LastName, FirstName, and Phone of all customers.

SELECT LastName, FirstName, Phone
FROM CUSTOMER

--  C. List the LastName, FirstName, and Phone for all customers with a FirstName of “Nikki”.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
WHERE FirstName = 'Nikki'

--  D. List the LastName, FirstName, Phone, DateIn, and DateOut of all orders in excess of $100.00.

SELECT LastName, FirstName, Phone, DateIn, DateOut
FROM CUSTOMER, INVOICE
WHERE CUSTOMER.CustomerID = INVOICE.CustomerNumber AND TotalAmount > 100.00

--  E. List the LastName, FirstName, and Phone of all customerswhose first name startswith 'B'.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
WHERE FirstName LIKE 'B%'

--  F. List the LastName, FirstName, and Phone of all customers whose last name includes the characters 'cat'.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
WHERE LastName LIKE '%cat%'

--  G. List the LastName, FirstName, and Phone for all customers whose second and third digits (from the left) of their phone number are 23. For example, any phone number with an area code of ‘723’ would meet the criteria.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
WHERE Phone LIKE '%23-%'

--  H. Determine the maximum and minimum TotalAmount.

-- Whats wrong???

SELECT MAX(TotalAmount) AND MIN(TotalAmount)
FROM INVOICE

--  I. Determine the average TotalAmount.

SELECT AVG(TotalAmount)
FROM INVOICE

--  J. Count the number of customers.

SELECT COUNT(*)
FROM CUSTOMER

--  K. Group customers by LastName and then by FirstName.

SELECT LastName, FirstName
FROM CUSTOMER
GROUP BY LastName, FirstName

--  L. Count the number of customers having each combination of LastName and FirstName.

-- How???

--  M. Show the LastName, FirstName, and Phone of all customers who have had an order with TotalAmount greater than $100.00. Use a subquery. Present the results sorted by LastName in ascending order and then FirstName in descending order.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
-- ???
ORDER BY LastName ASC, FirstName DESC

--  N. Show the LastName, FirstName and Phone of all customers who have had an order with TotalAmount greater than $100.00. Use a join, but do not use JOIN ON syntax. Present the results sorted by LastName in ascending order and then FirstName in descending order.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
-- ???
ORDER BY LastName ASC, FirstName DESC

--  O. Show the LastName, FirstName and Phone of all customers who have had an order with TotalAmount greater than $100.00. Use a join using JOIN ON syntax. Present the results sorted by LastName in ascending order and then FirstName in descending order.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
-- ???
ORDER BY LastName ASC, FirstName DESC

--  P. Show the LastName, FirstName and Phone of all customers who have had an order with an Item named “Dress Shirt”. Use a subquery. Present the results sorted by LastName in ascending order and then FirstName in descending order.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
-- ???
ORDER BY LastName ASC, FirstName DESC

--  Q. Show the LastName, FirstName and Phone of all customers who have had an order with an Item named “Dress Shirt”. Use a join, but do not use JOIN ON syntax. Present the results sorted by LastName in ascending order and then FirstName in descending order.

SELECT LastName, FirstName, Phone
FROM CUSTOMER
-- ???
ORDER BY LastName ASC, FirstName DESC


--  1.5 Assignment 5 Morgan Import

--  Download WC_Week4_3_MorganImporting_CreateTables.sql en
--  WC_Week4_3_MorganImporting_Insert.sql
--  Import it into PhpMyAdmin

--  A. Show all data in each of the tables.

SELECT *
FROM ITEM

SELECT *
FROM SHIPMENT

SELECT *
FROM SHIPMENT_ITEM

--  B. List the ShipmentID, ShipperName, and ShipperInvoiceNumber of all shipments.

SELECT ShipmentID, ShipperName, ShipperInvoiceNumber
FROM SHIPMENT

--  C. List the ShipmentID, ShipperName, and ShipperInvoiceNumber for all shipments that have an insured value greater than $10,000.00.

SELECT ShipmentID, ShipperName, ShipperInvoiceNumber
FROM SHIPMENT
WHERE InsuredValue > 10000.00

--  D. List the ShipmentID, ShipperName, and ShipperInvoiceNumber of all shippers whose name starts with “AB”.

SELECT ShipmentID, ShipperName, ShipperInvoiceNumber
FROM SHIPMENT
WHERE LIKE 'AB%'

--  E. Assume DepartureDate and ArrivalDate are in the format MM/DD/YY. List the ShipmentID, ShipperName, ShipperInvoiceNumber, and ArrivalDate of all shipments that departed in December.

SELECT ShipmentID, ShipperName, ShipperInvoiceNumber, ArrivalDate
FROM SHIPMENT
WHERE DepartureDate LIKE '%-12-%'

-- Error! #1054 - Unknown column 'ShipmentID' in 'field list'.
-- How to I display the date in the format MM/DD/YY?

--  F. Assume DepartureDate and ArrivalDate are in the format MM/DD/YY. List the ShipmentID, ShipperName, ShipperInvoiceNumber, and ArrivalDate of all shipments that departed on the tenth day of any month.

SELECT ShipmentID, ShipperName, ShipperInvoiceNumber, ArrivalDate
FROM SHIPMENT
WHERE DepartureDate LIKE '%-10'

-- Error! #1054 - Unknown column 'ShipmentID' in 'field list'.
-- How to I display the date in the format MM/DD/YY?

--  G. Determine the maximum and minimum InsuredValue.

SELECT MAX(InsuredValue), MIN(InsuredValue)
FROM SHIPMENT

--  H. Determine the average InsuredValue.

SELECT AVG(InsuredValue)
FROM SHIPMENT

--  I. Count the number of shipments.

SELECT COUNT(*)
FROM SHIPMENT

--  J. Show ItemID, Description, Store, and a calculated column named USCurrencyAmount that is equal to LocalCurrencyAmount times the ExchangeRate for all rows of ITEM.



--  K. Group item purchases by City and Store.

SELECT City, Store
FROM ITEM
GROUP BY City, Store

--  L. Count the number of purchases having each combination of City and Store.



--  M. Show the ShipperName, ShipmentID and DepartureDate of all shipments that have an item with a value of $1,000.00 or more. Use a subquery. Present results sorted by ShipperName in ascending order and then DepartureDate in descending order.



--  N. Show the ShipperName, ShipmentID, and DepartureDate of all shipments that have an item with a value of $1000.00 or more. Use a join. Present results sorted by ShipperName in ascending order and then DepartureDate in descending order.



--  O. Show the ShipperName, ShipmentID, and DepartureDate of the shipments for items that were purchased in Singapore. Use a subquery. Present results sorted by ShipperName in ascending order and then DepartureDate in descending order.



--	P. Show the ShipperName, ShipmentID, and DepartureDate of all shipments that have an item that was purchased in Singapore. Use a join, but do not use JOIN ON syntax. Present results sorted by ShipperName in ascending order and then DepartureDate in descending order.



--  Q. Show the ShipperName, ShipmentID, and DepartureDate of all shipments that have an item that was purchased in Singapore. Use a join using JOIN ON syntax. Present results sorted by ShipperName in ascending order and then DepartureDate in descending order.



