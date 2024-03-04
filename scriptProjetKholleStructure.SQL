DROP DATABASE IF EXISTS projetkholle;

CREATE DATABASE IF NOT EXISTS projetkholle;
USE projetkholle;
# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEUR
 (
   ID VARCHAR(4) NOT NULL  ,
   NOM VARCHAR(32) NULL  ,
   PRENOM VARCHAR(32) NULL  ,
   POSTE VARCHAR(32) NULL  ,
   CLASSE VARCHAR(32) NULL  
   , PRIMARY KEY (ID) 
 )ENGINE = InnoDB;

# -----------------------------------------------------------------------------
#       TABLE : CRENEAU_KHOLLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CRENEAU_KHOLLE
 (
   IDKHOLLE VARCHAR(4) NOT NULL  ,
   ID_ETUDIANT VARCHAR(4) NOT NULL  ,
   ID_RESPONSABLE_MATIERE VARCHAR(4) NOT NULL  ,
   ID_ENSEIGNANT VARCHAR(4) NOT NULL  ,
   DATECRENEAU DATE NULL  ,
   HEURECRENEAU TIME NULL  ,
   SALLECRENEAU CHAR(32) NULL  ,
   DUREE INTEGER NULL  ,
   MATIERE CHAR(32) NULL  ,
   COMPLET BOOL NULL  
   , PRIMARY KEY (IDKHOLLE) 
 )ENGINE = InnoDB;
 
# -----------------------------------------------------------------------------
#       TABLE : CLASSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLASSE
 (
   IDCLASSE VARCHAR(4) NOT NULL  ,
   NOMCLASSE VARCHAR(20) 
   , PRIMARY KEY (IDCLASSE) 
 )ENGINE = InnoDB;


# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CRENEAU_KHOLLE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CRENEAU_KHOLLE_UTILISATEUR
     ON CRENEAU_KHOLLE (ID_ETUDIANT ASC);

CREATE  INDEX I_FK_CRENEAU_KHOLLE_UTILISATEUR1
     ON CRENEAU_KHOLLE (ID_RESPONSABLE_MATIERE ASC);

CREATE  INDEX I_FK_CRENEAU_KHOLLE_UTILISATEUR2
     ON CRENEAU_KHOLLE (ID_ENSEIGNANT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE CRENEAU_KHOLLE 
  ADD FOREIGN KEY FK_CRENEAU_KHOLLE_UTILISATEUR (ID_ETUDIANT)
      REFERENCES UTILISATEUR (ID) ;


ALTER TABLE CRENEAU_KHOLLE 
  ADD FOREIGN KEY FK_CRENEAU_KHOLLE_UTILISATEUR1 (ID_RESPONSABLE_MATIERE)
      REFERENCES UTILISATEUR (ID) ;


ALTER TABLE CRENEAU_KHOLLE 
  ADD FOREIGN KEY FK_CRENEAU_KHOLLE_UTILISATEUR2 (ID_ENSEIGNANT)
      REFERENCES UTILISATEUR (ID) ;
	  

ALTER TABLE UTILISATEUR 
  ADD FOREIGN KEY FK_CLASSE_UTILISATEUR (CLASSE)
      REFERENCES CLASSE (IDCLASSE) ;

