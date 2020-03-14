UPDATE users
SET Nume='Mitica',Prenume='Dragomir',Salary=2500
WHERE Nume='Vlad';

SELECT *
FROM users;

UPDATE users
SET Nume='Vlad',Prenume='Tudose',Salary=2800
WHERE Nume='Mitica';

SELECT *
FROM users;

/*
DELETE FROM users
WHERE nume='Vlad';
*/

SELECT *
FROM users;

SELECT * FROM users
LIMIT 2;

SELECT MAX(Nume) AS MaxName
FROM users;

SELECT COUNT(Nume) AS EmptyNO
FROM users
WHERE Telefon IS NULL;

SELECT AVG(Salary)
FROM users;

SELECT SUM(Salary)
FROM users;

SELECT * FROM users
WHERE Prenume LIKE 'T%';

SELECT * FROM users
WHERE Prenume LIKE '%e';

