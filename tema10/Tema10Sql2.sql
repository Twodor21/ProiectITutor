SELECT * FROM users
WHERE Nume IN ('Popa','Vlad');

SELECT * FROM users
WHERE Salary BETWEEN 2500 AND 3500;

SELECT * FROM users
WHERE Salary BETWEEN 1000 AND 3500
AND Nume NOT IN ('Popa');

SELECT * FROM users
WHERE Prenume NOT BETWEEN 'Tudose' AND 'Vasile';

SELECT Nume AS LastName 
FROM users;

SELECT Prenume
FROM users AS Datass;

SELECT CONCAT(Nume,' ',Prenume) AS FullName
FROM users;

SELECT u.Nume AS Nombre
FROM users AS u
WHERE u.Nume='Popa';