
/*Database week 3 Assignments

1.1 Assignment 1
1. write a SQL query that lists the names of songs that are by Post Malone.
*/

SELECT id, name
FROM artists
WHERE name = 'Post Malone'

SELECT name
FROM songs
WHERE artist_id = 54

/*
2. write a SQL query that returns the average energy of songs that are by Drake.
*/

SELECT id, name
FROM artists
WHERE name = 'Drake'

SELECT AVG(energy)
FROM songs
WHERE artist_id = 23

/*
1.2 Assignment 2
1. Write a SQL query to list the titles and release years of all Harry Potter movies, in
chronological order.
*/

SELECT title, year
FROM movies
WHERE title LIKE 'Harry Potter%'
ORDER BY year ASC

/*
2. write a SQL query to determine the average rating of all movies released in 2012.
*/

SELECT AVG(rating)
FROM ratings, movies
WHERE movies.id = ratings.movie_id
AND year = 2012

/*
3. write a SQL query to list all movies released in 2010 and their ratings, in
descending order by rating. For movies with the same rating, order them
alphabetically by title.
*/

SELECT rating
FROM ratings INNER JOIN movies
  ON ratings.movie_id = movies.id
ORDER BY rating DESC, title ASC

/*
4. write a SQL query to list the names of all people who starred in Spider-Man.
*/

SELECT name
FROM people JOIN stars
  ON people.id = stars.person_id
JOIN movies
  ON movies.id = stars.movie_id
WHERE movies.title = 'Spider-Man'

/*
5. write a SQL query to list the names of all people who starred in a movie released in
2004, ordered by birth year.
*/

SELECT name, birth
FROM people JOIN stars
  ON people.id = stars.person_id
JOIN movies
  ON movies.id = stars.movie_id
WHERE movies.year = 2004
ORDER BY birth ASC

/*
6. write a SQL query to list the names of all people who have directed a movie that
received a rating of at least 8.0.
*/

SELECT name
FROM people JOIN directors
  ON people.id = directors.person_id
JOIN ratings
  ON ratings.movie_id = directors.movie_id
WHERE ratings.rating > 8.0

/*
7. write a SQL query to list the titles of the five highest rated movies (in order) that
Zendaya starred in, starting with the highest rated.

movies, ratings, people, stars

Wrong answer, check answer sheet.

8. write a SQL query to list the titles of all movies in which both Tom Holland and
Andrew Garfield starred.

answer is too complex

9. write a SQL query to list the names of all people who starred in a movie in which
Tobey Maguire also starred.

answer is too complex

10. write a SQL query to find the actor who has the highest difference between their
best and their worst rated movie

answer is too complex

1.3 Assignment 3
Complete assignment from Week 1 - assignment 3 and send your elaboration by email!
