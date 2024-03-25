DROP DATABASE IF EXISTS projetkholle;

CREATE DATABASE IF NOT EXISTS projetkholle;
USE projetkholle;
# -----------------------------------------------------------------------------
#       TABLE : USERS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USERS
 (
   id INT(4) NOT NULL AUTO_INCREMENT  ,
   nom VARCHAR(32) NULL  ,
   prenom VARCHAR(32) NULL  ,
   email VARCHAR(64) NULL	,
   password VARCHAR(64) NULL	,
   poste INT(4) NULL  ,
   classe INT(4) NULL  ,
   nbkholleinscr VARCHAR(32) NULL	
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;

# -----------------------------------------------------------------------------
#       TABLE : CRENEAU
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CRENEAUS
 (
   id INT(4) NOT NULL AUTO_INCREMENT ,
   id_etudiant INT(4) NULL  ,
   id_enseignant INT(4) NOT NULL  ,
   id_classe INT(4) NOT NULL ,
   datecreneau VARCHAR(15) NULL  ,
   heurecreneau TIME NULL  ,
   sallecreneau INT(4) NULL  ,
   duree INTEGER NULL  ,
   matiere INT(4) NULL  ,
   complet BOOL NULL  
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;
 
# -----------------------------------------------------------------------------
#       TABLE : CLASSES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLASSES
 (
   id INT(4) NOT NULL AUTO_INCREMENT ,
   nomclasse VARCHAR(20) 
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;
 
 
 # -----------------------------------------------------------------------------
#       TABLE : SALLES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SALLES
 (
   id INT(4) NOT NULL AUTO_INCREMENT ,
   nomsalle VARCHAR(20) 
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;
 
 
 
# -----------------------------------------------------------------------------
#       TABLE : POSTES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS POSTES
 (
   id INT(4) NOT NULL AUTO_INCREMENT ,
   nomposte VARCHAR(20) 
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;
 
 
  
# -----------------------------------------------------------------------------
#       TABLE : MATIERES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MATIERES
 (
   id INT(4) NOT NULL AUTO_INCREMENT ,
   nommatiere VARCHAR(20) 
   , PRIMARY KEY (id) 
 )ENGINE = InnoDB;


# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CRENEAUS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CRENEAUS_UTILISATEUR
     ON CRENEAUS (ID_ETUDIANT ASC);

CREATE  INDEX I_FK_CRENEAUS_UTILISATEUR2
     ON CRENEAUS (ID_ENSEIGNANT ASC);




# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE CRENEAUS 
  ADD FOREIGN KEY FK_CRENEAUS_UTILISATEUR (id_etudiant)
      REFERENCES USERS (id) ;

ALTER TABLE CRENEAUS 
  ADD FOREIGN KEY FK_CRENEAUS_MATIERE (matiere)
      REFERENCES MATIERES (id) ;

ALTER TABLE CRENEAUS
  ADD FOREIGN KEY FK_CRENEAUS_CLASSE (id_classe)
      REFERENCES CLASSES (id) ;

ALTER TABLE CRENEAUS
  ADD FOREIGN KEY FK_CRENEAUS_UTILISATEUR2 (id_enseignant)
      REFERENCES USERS (id) ;
	  
ALTER TABLE CRENEAUS
  ADD FOREIGN KEY FK_CRENEAUS_SALLE (sallecreneau)
      REFERENCES SALLES (id) ;
	  

ALTER TABLE USERS 
  ADD FOREIGN KEY FK_CLASSE_UTILISATEUR (classe)
      REFERENCES CLASSES (id) ;
	  
ALTER TABLE USERS 
  ADD FOREIGN KEY FK_POSTE_UTILISATEUR (poste)
      REFERENCES POSTES (id) ;
	  
	  


INSERT INTO `classes` (`id`, `NOMCLASSE`) VALUES 
	(1, 'Espagnol'),
	(2, 'Anglais'),
	(3, 'Économie'),
	(4, 'Interrogation économique'),
	(5, 'Entretien'),
	(6, 'Approfondissement méthodologique'),
	(7, 'Droit privé'),
	(8, 'Droit public'),
	(9, 'Histoire des idées politiques (HIP)');
	
INSERT INTO `salles` (`id`, `nomsalle`) VALUES 
	(1, 'E1'),
	(2, 'E5'),
	(3, 'E11'),
	(4, 'E2'),
	(5, 'E4'),
	(6, 'E6'),
	(7, 'E8'),
	(8, 'E10'),
	(9, 'K7'),
	(10, 'K8'),
	(11, 'K9'),
	(12, 'K10'),
	(13, 'H13'),
	(14, 'H15');
	
	
	
INSERT INTO `postes` (`id`, `nomposte`) VALUES 
	('1', 'étudiant'),
	('2', 'enseignant'),
	('3', 'responsable_matière');

INSERT INTO USERS (nom, prenom, email, password, poste, classe, nbkholleinscr) VALUES
('Millaret', 'Hélène', 'hmillaret@gmail.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', 3, null, '0');

