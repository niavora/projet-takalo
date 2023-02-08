create database takalo;

use takalo;

drop table objet;
drop table utilisateur;

Create table adminis(
    idAdmin integer primary key,
    nom VARCHAR(50),
    mdp VARCHAR(50)
);

insert into adminis values(1,'Nandraina','123');

Create table utilisateur(
    idUtil integer primary key,
    nom VARCHAR(50),
    email VARCHAR(50),
    mdp VARCHAR(50)
);

insert into utilisateur values(1,'Antsa','antsa@gmail.com','antsa');
insert into utilisateur values(2,'Nandraina','nandraina@gmail.com','nandraina');
insert into utilisateur values(3,'Mathieu','mathieu@gmail.com','mathieu');

Create table objet(
    idObjet integer primary key,
    idUtil integer,
    nomObjet VARCHAR(50),
    descri VARCHAR(50),
    idCategorie integer,
    photo VARCHAR(30),
    prixEstim integer,
    foreign key (idUtil) references utilisateur(idUtil)
); 

insert into objet values(1,1,'pantalon','pantalon boyfriend, taille S',1,'pantalon.jpg',1000);
insert into objet values(2,1,'telephone','telephone samsung, prix abordable',2,'telephone.jpg',2000);
insert into objet values(3,1,'tasse','tasse blanche, bon qualité',3,'tasse.jpg',2500);

insert into objet values(4,2,'haut','haut noir manche longue',1,'haut.jpg',4000);
insert into objet values(5,2,'ordinateur','ordinateur Windows',2,'ordinateur.jpg',5000);
insert into objet values(6,2,'assiette','assiette bleue',3,'assiette.jpg',3500);

insert into objet values(7,3,'tshirt','thirt gris style',1,'thirt.jpg',1500);
insert into objet values(8,3,'radio','radio un peu ancienne',2,'radio.jpg',1000);
insert into objet values(9,3,'verre','verre classe',3,'verre.jpg',800);

create table categorie(
    idCategorie integer primary key,
    categorie VARCHAR(50)
);

insert into categorie values(1,'vetement');
insert into categorie values(2,'appareil');
insert into categorie values(3,'cuisine');

create table echange(
    idEchange integer primary key,
    idObjet1 integer,
    idObjet2 integer,
    idUtil1 integer,
    idUtil2 integer,
    etat_transaction integer,
    dateTransaction datetime,
    constraint foreign key (idObjet1) references objet(idObjet1),
    constraint foreign key (idObjet2) references objet(idObjet2),
    constraint foreign key (idUtil1) references utilisateur(idUtil1),
    constraint foreign key (idUtil2) references utilisateur(idUtil2)
);








