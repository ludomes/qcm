CREATE TABLE QCM(
codeQCM INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Titre VARCHAR( 256 ) ,
PassPhrase VARCHAR( 256 ) ,
Ouvert INT
)

create table Question (
codeQuestion int not null AUTO_INCREMENT PRIMARY KEY ,
codeQcm int not null,
Libelle varchar(1024));

create table Reponse (
codeReponse int not null AUTO_INCREMENT PRIMARY KEY ,
codeQuestion int not null,
Type int,
Libelle varchar(1024),
BonneReponse int);

create table Etudiant (
codeEtudiant int not null AUTO_INCREMENT PRIMARY KEY ,
Nom varchar(256),
Prenom varchar(256),
Classe varchar(256));

create table QCMFait (
codeQCMFait int not null AUTO_INCREMENT PRIMARY KEY ,
codeEtudiant int not null,
codeQCM int not null,
DateDeb datetime,
DateFin datetime);

create table ReponseEtudiant (
codeRE int not null AUTO_INCREMENT PRIMARY KEY ,
codeQCMFait int not null,
CodeQuestion int not null,
CodeReponse int not null,
Libelle varchar(1024),
DateReponse datetime,
Valide int);