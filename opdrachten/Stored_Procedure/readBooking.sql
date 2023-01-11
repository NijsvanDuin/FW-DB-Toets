CREATE PROCEDURE `readBooking` ()
BEGIN

Select   pas.id
		,pas.Voornaam
		,pas.Achternaam
        ,con.id
        ,con.Adres
        ,con.Email
        ,vlu.Bestemming
        ,vlu.Vertrekdatum
        ,vlu.Vertrektijd
        ,vlu.Vluchtnummer
        ,vlu.id

From instapkaart 			as ins
inner join passagier 		as pas
on ins.PassagierId = pas.id

inner join contact			as con
on con.PassagierId = pas.id

inner join vlucht			as vlu
on ins.VluchtId = vlu.id;

END;
