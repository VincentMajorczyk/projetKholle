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
	('1', 'Classe1'),
	('2', 'Classe2'),
	('3', 'Classe3'),
	('4', 'Classe4');
	
INSERT INTO `salles` (`id`, `nomsalle`) VALUES 
	('1', 'Salle1'),
	('2', 'Salle2'),
	('3', 'Salle3'),
	('4', 'Salle4');
	
	
INSERT INTO `postes` (`id`, `nomposte`) VALUES 
	('1', 'étudiant'),
	('2', 'enseignant'),
	('3', 'responsable_matière');
	
INSERT INTO users VALUES ('1', 'majorczyk', 'Vincent', 'vincent1.majorczyk@gmail.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', '1', '2', 0);

INSERT INTO USERS (nom, prenom, email, password, poste, classe, nbkholleinscr) VALUES
('Doe', 'John', 'john.doe@example.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', 1, 1, '0'),
('Smith', 'Jane', 'jane.smith@example.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', 1, 2, '0'),
('Johnson', 'Alice', 'alice.johnson@example.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', 2, 1, '0'),
('Adam', 'Alice', 'alice.adam@example.com', '$2y$10$9rcs8DI.KzUs7dsw0xj/6egTbV0GRJzcMYeXEQMN2xCo9yy2A52ie', 2, 1, '0');

INSERT INTO MATIERES (id, nommatiere) VALUES
(1, 'Mathématiques'),
(2, 'Science'),
(3, 'Histoire'),
(4, 'Langues'),
(5, 'Informatique');



INSERT INTO CRENEAUS (id_etudiant, id_enseignant, id_classe, datecreneau, heurecreneau, sallecreneau, duree, matiere, complet) VALUES
(4, 3, 2, '2024-03-25', '09:00:00', '1', 60, 1, 1),
(2, 3, 2, '2024-03-25', '10:00:00', '2', 60, 2, 1),
(3, 2, 1, '2024-03-26', '11:00:00', '3', 90, 3, 1);



INSERT INTO CRENEAUS (id_enseignant, id_classe, datecreneau, heurecreneau, sallecreneau, duree, matiere, complet) VALUES
(4, 3, '2024-03-26', '11:00:00', '3', 90, 3, 0),
(2, 4, '2024-03-26', '11:00:00', '3', 90, 3, 0);