INSERT INTO `classes` (`IDCLASSE`, `NOMCLASSE`) VALUES 
	('1', 'Classe1'),
	('2', 'Classe2'),
	('3', 'Classe3'),
	('4', 'Classe4');
	
INSERT INTO `users` (`ID`, `NOM`, `PRENOM`, `POSTE`, `CLASSE`) VALUES 
	('1', 'Nom1', 'Prenom1', 'etudiant', '3'),
	('2', 'Nom2', 'Prenom2', 'etudiant', '1'),
	('3', 'Nom3', 'Prenom3', 'enseignant', NULL),
	('4', 'Nom4', 'Prenom4', 'responsableMatiere', NULL),
	('5', 'Nom5', 'Prenom5', 'etudiant', '4'),
	('6', 'Nom6', 'Prenom6', 'etudiant', '2');
	('7', 'Nom7', 'Prenom7', 'enseignant', NULL),
	
INSERT INTO `creneau_kholle` (`IDKHOLLE`, `ID_ETUDIANT`, `ID_RESPONSABLE_MATIERE`, `ID_ENSEIGNANT`, `DATECRENEAU`, `HEURECRENEAU`, `SALLECRENEAU`, `DUREE`, `MATIERE`, `COMPLET`) VALUES 
	('1', '1', '4', '3', '2024-03-05', '09:30:00', 'salle1', '30', 'math', NULL);
	('2', '5', '4', '7', '2024-03-05', '09:30:00', 'salle1', '45', 'français', NULL);
	('3', '6', '4', '7', '2024-03-05', '09:30:00', 'salle3', '30', 'physique', NULL);