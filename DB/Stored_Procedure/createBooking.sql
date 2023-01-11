CREATE DEFINER=`root`@`localhost` PROCEDURE `createBooking`(
	IN Adres VARCHAR(255),
    IN Woonplaats VARCHAR(255),
    IN Postcode VARCHAR(6),
    IN Email VARCHAR(255),
    IN Mobiel INT(11),
    IN Voornaam VARCHAR(255),
    IN Achternaam VARCHAR(255),
    IN Geboortedatum DATE,
    IN Vluchtnummer VARCHAR(255),
    IN Oorsprong VARCHAR(255),
    IN Gate VARCHAR(5),
    IN Bestemming VARCHAR(255),
    IN Vertrekdatum DATE,
    IN Vertrektijd TIME)
BEGIN
	DECLARE PassagierId INT;
    DECLARE VluchtId INT;
    DECLARE ContactId INT;
    DECLARE InstapkaartId INT;
    
    -- Insert Passagier
    INSERT INTO Passagier(Voornaam, Achternaam, Geboortedatum, IsActief, DatumAangemaakt) VALUES(Voornaam, Achternaam, Geboortedatum, 1, '2023-01-11');
    SET PassagierId = LAST_INSERT_ID();
    
    -- Insert Contact
    INSERT INTO Contact(PassagierId, Adres, Woonplaats, Postcode, Email, Mobiel, IsActief, DatumAangemaakt) VALUES(PassagierId, Adres, Woonplaats, Postcode, Email, Mobiel, 1, '2023-01-11');
    SET ContactId = LAST_INSERT_ID();
    
    -- Insert Vlucht
    INSERT INTO Vlucht(Vertrekdatum, Vertrektijd, Aankomstdatum, Aankomsttijd, Vluchtnummer, Oorsprong, Bestemming, IsActief, DatumAangemaakt) VALUES(Vertrekdatum, Vertrektijd, Aankomstdatum, Aankomsttijd, Vluchtnummer, Oorsprong, Bestemming, 1, '2023-01-11');
    SET VluchtId = LAST_INSERT_ID();
    
    -- Insert Boeking
    INSERT INTO Instapkaart(PassagierId, VluchtId, Gate, IsActief, DatumAangemaakt) VALUES(PassagierId, VluchtId, Gate, 1, '2023-01-11');
    SET InstapkaartId = LAST_INSERT_ID();
    
    -- Return boeking_id
    SELECT InstapkaartId;
END