Database week 2
1.1 Assignment 1
Continue with the WC_1_MoviesDB.sql database from week 1.
1. Write an SQL query to add the following movies in the movies table:

(id, title, year)
(80684, 'Star Wars: Episode V - The Empire Strikes Back', 1980),
(86190, 'Star Wars: Episode VI - Return of the Jedi', 1983),
(120915, 'Star Wars: Episode I - The Phantom Menace', 1999),
(121765, 'Star Wars: Episode II - Attack of the Clones', 2002),
(121766, 'Star Wars: Episode III - Revenge of the Sith', 2005);

INSERT INTO movies (id, title, year)
VALUES
	(80684, 'Star Wars: Episode V - The Empire Strikes Back', 1980),
	(86190, 'Star Wars: Episode VI - Return of the Jedi', 1983),
	(120915, 'Star Wars: Episode I - The Phantom Menace', 1999),
	(121765, 'Star Wars: Episode II - Attack of the Clones', 2002),
	(121766, 'Star Wars: Episode III - Revenge of the Sith', 2005);


2. Write an SQL query to add the following people in the people table:

(id, name, birth),
(191, 'Ewan Gordon McGregor', 1971),
(204, 'Natalie Portman', 1981),
(159789, 'Hayden Christensen', 1981),
(184, 'George Lucas', 1944);

INSERT INTO people (id, name, birth)
VALUES
	(191, 'Ewan Gordon McGregor', 1971),
	(204, 'Natalie Portman', 1981),
	(159789, 'Hayden Christensen', 1981),
	(184, 'George Lucas', 1944);


3.Write an SQL query linking the first three people of question 2 as stars of the film
Revenge of the Sith.

SELECT id, title
FROM movies
WHERE title LIKE '%Revenge of the Sith'

INSERT INTO stars (movie_id, person_id)
VALUES
	(121766, 191),
	(121766, 204),
	(121766, 159789);

4. Write an SQL query linking George Lucas as director for all Star Wars films.

SELECT id, title
FROM movies
WHERE title LIKE 'Star Wars%'

SELECT id, name
FROM people
WHERE name = 'George Lucas'

INSERT INTO directors (movie_id, person_id)
VALUES
	(80684, 184),
	(86190, 184),
	(120915, 184),
	(121765, 184),
	(121766, 184);

5. Write an SQL query where all Star Wars films are rated 8.0.

SELECT id, title
FROM movies
WHERE title LIKE 'Star Wars%'

INSERT INTO ratings (movie_id, rating, votes)
VALUES
	(80684, 8.0, 1),
	(86190, 8.0, 1),
	(120915, 8.0, 1),
	(121765, 8.0, 1),
	(121766, 8.0, 1);

6. Write an SQL query where the film Star Wars "Return of the Jedi" with a rating of 8.0
becomes a 10.0.

SELECT id, title
FROM movies
WHERE title LIKE '%Return of the Jedi'

UPDATE ratings
SET rating = 10.0
WHERE movie_id = 86190

1.2 Assignment 2 - ERD assignments
Give the cardinality diagrams for the examples below.
• Replace many to many relations by relation tables.
• Write reference keys by which the relation is implemented.
• Do not use unnecessary artificial keys.
• Give several relevant attributes from each table.

Be aware that a database never contains only the situation at a given moment in time,
but always contains historical data. Always ask yourself if you can retrieve all the desired
information unambiguously.

A. A trading company has clients. A client places orders with the company. Each
order contains one or more articles.

B. A medical practice is composed of several doctors. In principle, each doctor has
his own patients but in cases of sickness and holidays, his patients may consult
one of the other doctors. Each month, the patient receives an invoice for
consultations during the month in question. The invoice is provided with a date
and the system must keep track of when an invoice is paid.

C. A large company comprises a number of departments. A department carries out
various projects. Each project is manned by one or more co-workers from the
department. There is an agreement that in order not to endanger the regular
work, a co-worker may only work on one project at a time.

D. As in C, however, now a co-worker may work on several projects at the same
time. A publishing company has various writers. Each writer has written one or more
books and we assume that each book has been written by only one writer. A
book is classified into a category by the publishing company. A writer receives,
over the course of time, one or more remunerations for each book he has
written.

E. A transport company employs a number of drivers, with a number of different
lorries at their disposal. Freight is transported by the lorries. The company must
at all times be able to retrieve the date, with which driver and with which lorry, a
freight has been transported.

F. An energy company has a number of members. Each member may have some
faults. A fault relates to a particular device type. Invoices are sent to the
members periodically

G. A video shop has many video tapes, with several copies of the same title. Clients
can borrow tapes and reserve titles. For the benefit of the service to the clients,
the information system also contains data on directors and actors. To facilitate
the replacement or removal of the tapes, the system must be able to retrieve
data on how often a tape has been rented out during a given period.

H. A hotel wants an information system with which clients can reserve rooms and
whereby the bill can be printed out on departure. The hotel has various types of
rooms with various prices. Devise a minimum of 5 tables with relevant attributes.

1.3 Assignment 2 - Primary school

A primary school would like to start a digital registration of the new students and their
progress throughout the upcoming years.
A student must be registered using their first- and last name. Other information that is
required is as follows: Address, postal code, date-of-birth, and gender.

During the 8 years of primary school a student has to complete several individual
assignments which will be graded with a number between 1 and 10 (1 and 10 included).
The assignments are unique per student. All the assignments have a theme and include
the date that they were completed.

The students will be taught their classes by a single teacher for a full year. The teacher
changes every year. The system should be able to track what teachers have been
‘appointed’ to which students and in which of the students’ 8 years this has taken place.

Regarding the teachers, the system should track the name, date-of-birth, and specialism
of the teacher.

For the above information requirement, provide the data model in the form of:
a) Indicate the Entity Relationship Diagram with foreign keys at the relationship line
and no many-to-many relationships.
b) A list of entity types with their keys and some relevant attributes (the attribute
type may be listed).

1.4 Assignment 3 - Theatre (Extra)

A theatre wants to set up a reservation system in which the following data should be
stored: for each customer, name, address, place of residence and telephone are kept.

A customer books a number of seats for a performance. The seats fall into a certain
category with a corresponding price. No additional data is stored for the seats.

Performances of a particular show are held on various dates in one of the available
venues.

It is possible that the same show is performed several times in one of the venues. No
further details of the venues are stored.

For a performance, the name, address, place of residence and telephone number of the
performing company are also stored.

For the above information requirement, provide the data model in the form of:
c) Indicate the Entity Relationship Diagram with foreign keys at the relationship line
and no many-to-many relationships.
d) A list of entity types with their keys and some relevant attributes (the attribute
type may be listed).

1.5 Assignment 4 - DropOff (Extra)

You are hired to create a software system that can track deliveries for the new meal
delivery company DropOff. The company's director has a few requirements for the
system.

All drivers must be registered in the system. The director believes that he should have
access to the first and last name, date of birth and expiry date of the driver's licence
when needed. This way, he can send his drivers a reminder that they need to renew
their licence when needed.

Customers can order a meal included in the weekly menu. This means the customer has
a different meal every day, but as far as the weekly menu goes, it is the same every
week. Customers have the option to specify whether the meal is vegetarian, vegan, or
low salt.

Customers have to provide a delivery address and they also have to provide their name
for verification upon delivery. To help elderly customers prepare for delivery, drivers call
them 10 minutes before arrival.

As far as meals are concerned, the system should keep track of which meals are
delivered. The system should be able to track the date, start time and end time of the
delivery route and which driver used which van in case there is ever a complaint about
the meal, driver, or delivery.

Drivers all have access to the same pool of vans. As far as van choice, first-come, first-
served applies. The vans are all enrolled in a maintenance programme so that they can
have their annual check-up. Since the vans have to be driven to the garage for their
check-up, the system should be able to send a reminder 2 weeks, before the check-up
is due.

For the above information requirement, provide the data model in the form of:
e) Indicate the Entity Relationship Diagram with foreign keys at the relationship line
and no many-to-many relationships.
f) A list of entity types with their keys and some relevant attributes (the attribute
type may be listed).
