DROP DATABASE IF EXISTS MLR2;

CREATE DATABASE IF NOT EXISTS MLR2;
USE MLR2;
# -----------------------------------------------------------------------------
#       TABLE : AUTEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AUTEUR
 (
   IDAUTEUR INTEGER(100) NOT NULL AUTO_INCREMENT ,
   NOM CHAR(32) NOT NULL  ,
   PRENOM CHAR(32) NOT NULL  ,
   DATE_NAISSANCE DATE NULL  
   , PRIMARY KEY (IDAUTEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PAGE
 (
   IDPAGE INTEGER(2) NOT NULL AUTO_INCREMENT ,
   IDLIVRE INTEGER(10) NOT NULL  ,
   IDCAT INTEGER(2) NOT NULL  ,
   IDCHAP INTEGER(100) NOT NULL  ,
   IDLIVRE_1 INTEGER(10) NOT NULL  ,
   IDCHAP_1 INTEGER(100) NOT NULL  ,
   NUMPAGE CHAR(32) NOT NULL  
   , PRIMARY KEY (IDPAGE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PAGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PAGE_MANGA
     ON PAGE (IDLIVRE ASC);

CREATE  INDEX I_FK_PAGE_CATEGORIE
     ON PAGE (IDCAT ASC);

CREATE  INDEX I_FK_PAGE_CHAPITRE
     ON PAGE (IDCHAP ASC);

CREATE  INDEX I_FK_PAGE_MANGA1
     ON PAGE (IDLIVRE_1 ASC);

CREATE  INDEX I_FK_PAGE_CHAPITRE1
     ON PAGE (IDCHAP_1 ASC);

# -----------------------------------------------------------------------------
#       TABLE : MANGA
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MANGA
 (
   IDLIVRE INTEGER(10) NOT NULL AUTO_INCREMENT ,
   IDAUTEUR INTEGER(100) NOT NULL  ,
   TITRE CHAR(50) NOT NULL  ,
   NBR_CHAP INTEGER(100) NULL  
   , PRIMARY KEY (IDLIVRE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MANGA
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MANGA_AUTEUR
     ON MANGA (IDAUTEUR ASC);

# -----------------------------------------------------------------------------
#       TABLE : CATEGORIE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CATEGORIE
 (
   IDCAT INTEGER(2) NOT NULL AUTO_INCREMENT ,
   NOM CHAR(32) NULL  
   , PRIMARY KEY (IDCAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CHAPITRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CHAPITRE
 (
   IDCHAP INTEGER(100) NOT NULL AUTO_INCREMENT ,
   NOM CHAR(50) NULL  ,
   NUM INTEGER(100) NOT NULL  
   , PRIMARY KEY (IDCHAP) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE PAGE 
  ADD FOREIGN KEY FK_PAGE_MANGA (IDLIVRE)
      REFERENCES MANGA (IDLIVRE) ;


ALTER TABLE PAGE 
  ADD FOREIGN KEY FK_PAGE_CATEGORIE (IDCAT)
      REFERENCES CATEGORIE (IDCAT) ;


ALTER TABLE PAGE 
  ADD FOREIGN KEY FK_PAGE_CHAPITRE (IDCHAP)
      REFERENCES CHAPITRE (IDCHAP) ;


ALTER TABLE PAGE 
  ADD FOREIGN KEY FK_PAGE_MANGA1 (IDLIVRE_1)
      REFERENCES MANGA (IDLIVRE) ;


ALTER TABLE PAGE 
  ADD FOREIGN KEY FK_PAGE_CHAPITRE1 (IDCHAP_1)
      REFERENCES CHAPITRE (IDCHAP) ;


ALTER TABLE MANGA 
  ADD FOREIGN KEY FK_MANGA_AUTEUR (IDAUTEUR)
      REFERENCES AUTEUR (IDAUTEUR) ;

