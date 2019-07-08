--Cr�ation des tables--

CREATE TABLE PROJETS
(
    nom_projet VARCHAR (100),
    date_projet DATE,
    desc_projet VARCHAR(10000),
    PRIMARY KEY (ID);
)
CREATE TABLE EXPERIENCE
(
    nom_experience VARCHAR (100),
    date_experience DATE,
    desc_experience VARCHAR(10000),
)
CREATE TABLE TESTIMONIAL
(
    nom_temoin VARCHAR (100),
    date_tem DATE,
    critique VARCHAR(10000),
    PRIMARY KEY (ID);
)
CREATE TABLE GETINTOUCH
(
    num�ro_tel VARCHAR (10),
    mail VARCHAR (255),
    nom_contact VARCHAR (100),
    pr�nom_contact VARCHAR (100),
    mail_contact VARCHAR (255),
    date_contact DATE,
    objet_contact VARCHAR(10000),
    PRIMARY KEY (ID);
)
CREATE TABLE FORMATION
(
    nom_formation VARCHAR (100),
    date_formation DATE,
    desc_formation VARCHAR(10000),
    PRIMARY KEY (ID);
)

--Insertions--
--//Projets//--
INSERT INTO PROJETS (nom_projet, date_projet, desc_projet)
VALUES
('HTML/CSS',01/01/2019,'Projet de CV en ligne au cours de notre apprentissage du HTML et du CSS, Javascript et PHP bient�ts pr�sents.'),
('Inventaire+',01/01/2019,'Projet orient� r�seau, il faut �quiper une entreprise pour quelle puisse faire ses inventaires informatiquement'),
('PlanteConnect�',01/01/2019,'Projet de Plante connect� avec un Arduino');

--//Experience//--
INSERT INTO EXPERIENCE (nom_experience,date_experience,desc_experience)
VALUES
('Employ� Polyvalent',11/2018,'McDonalds France (CDI, poste occup� actuellement'),
('Employ� Administratif',08/2018,'Euler Hermes Recouvrement'),
('Animateur enfants 3-5 ans',07/2017,'MJC LArbresle'),
('Animateur enfants',02/2016,'Loisirs Pluriels Grenoble');

--//Testimonial//--

--//GetInTouch//--
INSERT INTO GETINTOUCH (num�ro_tel,mail)
VALUES
('0789037320','arnaudpizzetta@live.com');
--//Formation//--
INSERT INTO FORMATION (nom_formation, date_formation, desc_formation)
VALUES
('Lyc�e Germaine Tillion',09/2015,'Baccalaur�at ES'),
('YNOV',09/2018,'Formation Ing�sup Informatique (Actuellement en 1�re ann�e)');