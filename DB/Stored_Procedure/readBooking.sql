CREATE PROCEDURE `readBooking` ()
BEGIN
SELECT pas.Voornaam,
    pas.Achternaam,
    con.Adres,
    con.Email,
    vlu.Bestemming,
    vlu.Vertrekdatum,
    vlu.Vertrektijd,
    vlu.Vluchtnummer,
    ins.id AS insId,
    vlu.id AS vluId,
    pas.id AS pasId,
    con.id AS conId
    FROM Instapkaart AS ins 
    INNER JOIN Passagier AS pas ON ins.PassagierId = pas.id
    INNER JOIN Contact AS con ON con.PassagierId = pas.id 
    INNER JOIN Vlucht AS vlu ON ins.VluchtId = vlu.id;
END