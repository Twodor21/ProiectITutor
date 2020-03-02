SELECT Nume 
FROM users;

SELECT * FROM users;

SELECT Nume,Prenume
FROM users;

SELECT DISTINCT Adresa
FROM users;

SELECT COUNT(Telefon)
FROM users;

SELECT COUNT(*) AS Numere
FROM (SELECT DISTINCT Telefon FROM users) AS TEST;