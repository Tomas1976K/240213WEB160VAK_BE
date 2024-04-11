SELECT `vardas`, `pavarde` FROM `autoriai`;
SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) FROM `autoriai`;
SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) AS 'vardas_pavarde' FROM `autoriai`;
SELECT `pavadinimas`, ROUND(`kaina`) AS 'suapvalinta_kaina' FROM `knygos`;
SELECT * FROM `autoriai` WHERE `vardas` = 'Jonas';
SELECT * FROM `knygos` WHERE `kaina` < 15 AND `puslapiu_skaicius` > 300;
SELECT * FROM `knygos` WHERE `kaina` < 13 AND `puslapiu_skaicius` > 400;
SELECT * FROM `knygos` WHERE `kaina` > 19 OR `kaina` < 10 OR `puslapiu_skaicius` > 700;
SELECT * FROM `knygos` WHERE (`kaina` > 15 AND `kaina` < 20) OR (`puslapiu_skaicius` > 300 AND `puslapiu_skaicius` < 600);


SELECT * FROM `knygos` WHERE `kaina` IS NOT null;
SELECT * FROM `knygos` WHERE `kaina` IS null;
SELECT * FROM `knygos` WHERE `kaina` != 7.80;
SELECT * FROM `knygos` WHERE `kaina` I= 7.80;


SELECT * FROM `knygos` WHERE `kaina` IN (7.80, 12.50, 50.99);
SELECT * FROM `knygos` WHERE `id` IN ( SELECT `id` FROM `autoriai` WHERE `pavarde` = 'tolkien' OR `pavarde` = 'martin' );

SELECT `vardas`, COUNT(`id`) FROM `autoriai` GROUP BY `vardas`;
SELECT `vardas`, COUNT(`id`) AS 'kiekis' FROM `autoriai` WHERE `vardas` != 'J. R. R.' GROUP BY `vardas` HAVING `kiekis` = 1 ORDER BY `vardas`;
