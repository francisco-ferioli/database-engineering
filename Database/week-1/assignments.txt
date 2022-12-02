Database week 1

SELECT [columns]
FROM [tables]
WHERE [condition for row]
GROUP BY [columns]
HAVING [condition for group]
ORDER BY [column]

1.1 Assignment 1

Download WC_1_SongsDB.sql
Import into PhpMyAdmin

1.write a SQL query to list the names of all songs in the database.
• Your query should output a table with a single column for the name of each
song.
SELECT name
FROM songs

2.write a SQL query to list the names of all songs in increasing order of tempo.
• Your query should output a table with a single column for the name of each
song.
SELECT name, tempo
FROM songs
ORDER BY tempo

3.write a SQL query to list the names of the top 5 longest songs, in descending order
of length.
• Your query should output a table with a single column for the name of each
song.
SELECT name, duration_ms
FROM songs
WHERE duration_ms >= 263400
ORDER BY duration_ms DESC

4.write a SQL query that lists the names of any songs that have danceability, energy,
and valence greater than 0.75.
• Your query should output a table with a single column for the name of each
song.
SELECT name
FROM songs
WHERE danceability > 0.75 AND energy > 0.75 AND valence > 0.75

5.write a SQL query that returns the average energy of all the songs.
• Your query should output a table with a single column and a single row
containing the average energy.
SELECT AVG(energy)
FROM songs

6.write a SQL query that lists the names of songs that are by Post Malone.
• Your query should output a table with a single column for the name of each
song.
• You should not make any assumptions about what Post Malone’s artist_id is.
SELECT name
FROM songs
WHERE artist_id = 54

7.write a SQL query that returns the average energy of songs that are by Drake.
• Your query should output a table with a single column and a single row
containing the average energy.
• You should not make any assumptions about what Drake’s artist_id is.
SELECT AVG(energy)
FROM songs
WHERE artist_id = 23

8.write a SQL query that lists the names of the songs that feature other artists.
• Songs that feature other artists will include “feat.” in the name of the song.
• Your query should output a table with a single column for the name of each
song.
SELECT name
FROM songs
WHERE name LIKE "%feat.%"
srcs
https://www.freecodecamp.org/news/sql-contains-string-sql-regex-example-query/
https://www.w3schools.com/SQL/sql_like.asp

1.2 Assignment 2

Download 2. WC_2_MoviesDB.sql
Import into PhpMyAdmin

1. write a SQL query to list the titles of all movies released in 2014.
• Your query should output a table with a single column for the title of each
movie.
SELECT title
FROM movies
WHERE year = 2014


2.write a SQL query to determine the birth year of Emma Stone.
• Your query should output a table with a single column and a single row (not
counting the header) containing Emma Stone’s birth year.
• You may assume that there is only one person in the database with the name
Emma Stone
SELECT birth
FROM people
WHERE name = 'Emma Stone'

3.write a SQL query to list the titles of all movies with a release date on or after
2018, in alphabetical order.
• Your query should output a table with a single column for the title of each
movie.
• Movies released in 2018 should be included, as should movies with release
dates in the future.
SELECT title
FROM movies
WHERE year >= 2018
ORDER BY title ASC

4.write a SQL query to determine the number of movies with an IMDb rating of 8.4.
• Your query should output a table with a single column and a single row (not
counting the header) containing the number of movies with an 8.4 rating.
SELECT COUNT(rating)
FROM ratings
WHERE rating = 8.4

5.write a SQL query to list the titles and release years of all Harry Potter movies, in
chronological order.
• Your query should output a table with two columns, one for the title of each
movie and one for the release year of each movie.
• You may assume that the title of all Harry Potter movies will begin with the
words “Harry Potter“, and that if a movie title begins with the words “Harry
Potter”, it is a Harry Potter movie.
SELECT title, year
FROM movies
WHERE title LIKE 'Harry Potter%'
ORDER BY year ASC

6.write a SQL query to determine the average rating of all movies released in 2012.
• Your query should output a table with a single column and a single row (not
counting the header) containing the average rating.
SELECT AVG(rating)
FROM ratings, movies
WHERE year = 2012

7.write a SQL query to list all movies released in 2010 and their ratings, in
descending order by rating. For movies with the same rating, order them
alphabetically by title.
• Your query should output a table with two columns, one for the title of each
movie and one for the rating of each movie.
• Movies that do not have ratings should not be included in the result.
SELECT title, rating
FROM movies, ratings
WHERE year = 2010 AND NOT rating = 'null'
ORDER BY rating DESC, title ASC
srcs
https://www.w3schools.com/SQL/sql_orderby.asp

8.write a SQL query to list the names of all people who starred in Spider-man.
• Your query should output a table with a single column for the name of each
person.
• You may assume that there is only one movie in the database with the title
Spider-man.
SELECT name
FROM people, movies
WHERE title = 'Spider-man'

9.write a SQL query to list the names of all people who starred in a movie released
in 2004, ordered by birth year.
• Your query should output a table with a single column for the name of each
person.
• People with the same birth year may be listed in any order.
• No need to worry about people who have no birth year listed, so long as
those who do have a birth year are listed in order.
SELECT name
FROM people, movie
WHERE year = 2004
ORDER BY birth


// Need help

10. write a SQL query to list the names of all people who have directed a movie that
received a rating of at least 8.0.
• Your query should output a table with a single column for the name of each
person.
• If a person directed more than one movie that received a rating of at least
8.0, they should only appear in your results once.
SELECT name
FROM directors, people, ratings
WHERE rating >= 8.0

11. write a SQL query to list the titles of the five highest rated movies (in order) that
Zendaya starred in, starting with the highest rated.
• Your query should output a table with a single column for the title of each
movie.
• You may assume that there is only one person in the database with the name
Zendaya.
SELECT title
FROM movies, people, ratings, stars
WHERE rating >= 7.9 AND person_id = 3918035
ORDER BY rating DESC


// Need help

12. write a SQL query to list the titles of all movies in which both Tom Holland and
Andrew Garfield starred.
• Your query should output a table with a single column for the title of each
movie.
• You may assume that there is only one person in the database with the name
Tom Holland.
• You may assume that there is only one person in the database with the name
Andrew Garfield.
SELECT title
FROM movies, people
WHERE name = 'Tom Holland' AND name = 'Andrew Garfield'


// Need help

13. write a SQL query to list the names of all people who starred in a movie in which
Tobey Maguire also starred.
• Your query should output a table with a single column for the name of each
person.
• Tobey Maguire himself should not be included in the resulting list.
SELECT name
FROM stars, people
WHERE movie_id IN ('145487', '10872600', '316654', '413300')
name = id = person_id = movie_id = person_id = id = name


// Need help

14. write a SQL query to find the actor who has the highest difference between their
best and their worst rated movie
SELECT name
FROM people, ratings
WHERE

1.3 Assignment 3


// Need help

Download 3. EmmenCity-daderbase.sql
Import into PhpMyAdmin

The Jukebox has been stolen! School has called upon you to solve the mystery of the
stolen jukebox of room 1.016. School believes that the thief stole the jukebox and then,
shortly afterwards, took a flight out of town with the help of an accomplice. Your goal is
to identify:

1. Who the thief is
2. What city the thief escaped to
3. Who the thief’s accomplice is who helped them escape

The theft took place on July 28

SELECT name
FROM people

SELECT city
FROM airports
