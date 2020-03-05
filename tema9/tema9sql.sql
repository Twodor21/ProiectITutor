SELECT * FROM users
WHERE Nume='Popa';

SELECT * FROM users
WHERE Prenume LIKE 'A%';

SELECT * FROM users
WHERE Nume IN ('Dogaru','Popa');

SELECT Nume,Prenume FROM users
WHERE Nume='Popa' AND Prenume='Andreea';

SELECT Nume,Prenume FROM users
WHERE Nume='Popa' OR Prenume='Andreea';

SELECT Nume,Prenume FROM users
WHERE NOT Prenume='Andreea';

SELECT Nume,Prenume FROM users
WHERE NOT Nume='Popa' AND NOT Prenume='Andreea';

SELECT * FROM users
ORDER BY Prenume DESC, Nume ASC;

INSERT INTO users (Nume,Prenume,Telefon,Adresa)
VALUES ('Bobita','Ioan','074235XXX','Str. Jupiter');

INSERT INTO users (Nume,Prenume,Telefon,Adresa)
VALUES ('Varzaru','Ioan','074235XXX','Str. Jupiter');
DELETE FROM users WHERE Nume='Bobita';
SELECT * FROM users;

DELETE FROM users WHERE Nume='Varzaru';
SELECT * FROM users;

INSERT INTO users (Nume,Prenume)
VALUES ('Gheorghe','Vasile');
SELECT * FROM users;

SELECT * FROM users
WHERE Telefon IS NULL;