USE bdEmpresa;

CREATE TABLE Treballadors (
	codi int UNSIGNED AUTO_INCREMENT,
	nom VARCHAR(50) NOT NULL,
	cognoms VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
    PRIMARY KEY (codi)
);

INSERT INTO Treballadors (nom,cognoms,email) VALUES
('paula', 'alonso pons', 'app@clot.com'),
('joan', 'pelayo rocamora', 'jrr@fje.net'),
('pere', 'masponts matadepera', 'pmm@daw2.com'),
('esther', 'casajoana contreras', 'mcc@fjeclot.com'),
('sergi', 'dalmau delacroix', 'jdd@clotfje.net');
