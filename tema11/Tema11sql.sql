SELECT Nume,gender,height,weight
FROM features
INNER JOIN users ON features.userID=users.userID;

SELECT Nume,gender,height,weight
FROM users
LEFT JOIN features ON users.userID=features.userID;

SELECT Nume,gender,height,weight
FROM users
RIGHT JOIN features ON users.userID=features.userID;

SELECT A.Nume AS Nume1, B.Nume AS Nume2,A.Prenume
FROM users A, users B
WHERE A.userID <> B.userID;

SELECT Nume FROM users
UNION 
SELECT gender FROM features;

SELECT Nume FROM users
UNION ALL 
SELECT gender FROM features;

SELECT COUNT(userID),gender
FROM features
GROUP BY gender;

SELECT COUNT(userID), gender
FROM features
GROUP BY gender
HAVING COUNT(userID) < 3;

SELECT Nume
FROM users
WHERE EXISTS (SELECT gender FROM features
WHERE users.userID = features.userID
AND gender='male');