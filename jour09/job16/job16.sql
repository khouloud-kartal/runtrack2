SELECT salles.nom, etage.nom, salles.capacite
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
WHERE salles.capacite = (
    SELECT MAX(capacite) 
    FROM salles
    );
UPDATE salles
SET nom = 'Biggest Room'
WHERE salles.capacite = (
    SELECT MAX(capacite)
  	FROM salles)