use superhero;

DROP PROCEDURE IF EXISTS sp_search_superheroe;
DELIMITER $$

CREATE PROCEDURE sp_search_superheroe(IN p_name VARCHAR(200))
BEGIN
    SELECT 
        s.id AS HeroID,
        s.superhero_name AS SuperHeroe,
        s.full_name AS NombreReal,
        g.gender AS Genero,
        r.race AS Raza,
        p.publisher_name AS Editorial,
        a.alignment AS Alineacion,
        eye.colour AS ColorOjos,
        hair.colour AS ColorCabello,
        skin.colour AS ColorPiel,
        s.height_cm AS AlturaCM,
        s.weight_kg AS PesoKG
    FROM superhero.superhero s
    INNER JOIN superhero.gender g       ON s.gender_id = g.id
    INNER JOIN superhero.race r         ON s.race_id = r.id
    INNER JOIN superhero.publisher p    ON s.publisher_id = p.id
    INNER JOIN superhero.alignment a    ON s.alignment_id = a.id
    INNER JOIN superhero.colour eye     ON s.eye_colour_id = eye.id
    INNER JOIN superhero.colour hair    ON s.hair_colour_id = hair.id
    INNER JOIN superhero.colour skin    ON s.skin_colour_id = skin.id
    WHERE s.superhero_name LIKE CONCAT('%', p_name, '%')
    LIMIT 100;
END$$

DELIMITER ;

CALL sp_search_superheroe('Beetle');
